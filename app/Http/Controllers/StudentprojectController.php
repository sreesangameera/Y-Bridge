<?php

namespace App\Http\Controllers;
use App\Models\Studentproject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\User;
use App\Models\Description;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Connection;
use App\Models\Connectlecturer;
use App\Models\Academicproject;
use App\Models\Desclecturer;
use App\Models\Suggestion;
use App\Models\Suggestionstud;
use App\Models\ConnectIndustrialist;
use App\Models\MainTerm;

class StudentprojectController extends Controller
{
    public function create()
    {
        return view('ProjectPage.StudentProjectPage');
    }
    
    public function store1()
    {


       try{$studentproject = new Studentproject();
        $studentproject->Destination = request('Destination');
        $studentproject->StudentID = request('StudentID');
        $studentproject->ProjectID = request('ProjectID');
        $studentproject->Titleoftheproject = request('Titleoftheproject');

        $studentproject->Description = request('Description');
        
        $studentproject->ProjectType = request('ProjectType');
       
        
        //StudentProject::create($request->all());
       $studentproject->save();
       $description = Str::of(request('Description'))->split(' /[\s,""().]+/ ');
       $keys = DB::table('dictionaries')->get();
       $newArr = [];
       $mt = [];
       //echo strcasecmp($description[0],"NeTwork");
      
      foreach($keys as $key){
           for($i = 0 ; $i < count($description) ; $i++){
               if(strcasecmp($description[$i],$key->keywordName) == 0){
                   $newArr[] = $key->keywordName;
                   array_push($mt,$key->mainTermId);
               }
           }
           
       }
     
      $desc = new Description();
      $desc->StudentID = request('StudentID');
      $desc->Description = implode(", ",$newArr);
      $desc->Mainterms = implode(", ",$mt);

      $desc->save();

      //$dict =DB::table('dictionaries')->whereIn('keywordName',[$newArr])->pluck('mainTermId')->toArray();
        $maxi = [];
        $dict = array_count_values($mt);
        arsort($dict);
        $maxMainKey = array_key_first($dict);
        //$m = array_values($dict)[0];
        $i=0;
        foreach(array_keys($dict) as $d){
        //for($i = 0 ; $i < count($dict); $i++){
            //$m = array_values($d)[0];
            //$m = $dict[0];
            if($i >=3)break;
                $maxi[]=$d;
            $i++;
            }
        
            
    
     
     $connection = new Connection();
     $connection->StudentID = request('StudentID');
     $connection->MainTermID = implode(", ",$maxi);
     $connection->Maintermcount = implode(", ",$dict);
     $connection->save(); 

     
     

     $lec = DB::table('academics')->select('ResearchInterest','LastName','Title','FirstName','EmployeeID')->get();

     $lecInt= [];
    $id = [];
     foreach($lec as $l){
         if(strcasecmp($l->ResearchInterest,'') != 0){
              $lecInt = explode(',',$l->ResearchInterest);
         
         
        for($i = 0 ; $i < count($lecInt); $i++){
            $num = DB::table('mainTerms')->where('mainTerm',$lecInt[$i])->first();  
                  for($i = 0; $i < count($maxi); $i++)
                  {
                    if($maxi[$i] == (integer)$num->mainTermId){
            
               array_push($id, $l->EmployeeID);
               break;
                    }
        }
     
     }
         }
    }
    
     
     $connect = new Suggestion();
     $connect->Destination=request('Destination');
     $connect->ProjectID=request('ProjectID');
     $connect->MainTermID = implode(", ",$maxi);
     $connect->StudentID = request('StudentID');  
     $connect->LecturerID = implode(",",$id); 



     //$st = request('StudentID');



     
     //$connect->save();
     //$connect->LecturerID =$stu;
     //$ls=implode(",",$stu);
     //$connect->LecturerID = Str::of($ls)->split('/[\s,]+/');
     //$stud=explode("<br>",$stu);
     //foreach($stud as $i)
        //$connect->LecturerID= $i;
     //$connect->StudentID=$st;
     
     

    
     
     $stuss = DB::table('industrialists')->select('CompanyPersonalEmailID','FieldOfInterests')->get();

     $indus= [];
    $id1 = [];
     foreach($stuss as $st){
         if(strcasecmp($st->FieldOfInterests,'') != 0){
              $indus = explode(',',$st->FieldOfInterests);
         
         
        for($i = 0 ; $i < count($indus); $i++){
            $num = DB::table('mainTerms')->where('mainTerm',$indus[$i])->first();  
          for($i = 0 ; $i < count($maxi); $i++) {       
           if($maxi[$i] == (integer)$num->mainTermId){
            
               array_push($id1, $st->CompanyPersonalEmailID);
               break;
            
        }
    }
     }
         }
    }
     
     //$connect = new Suggestion();
     //$connect->Destination=request('Destination');
     //$connect->MainTermID = $maxMainKey;
     //$connect->StudentID = request('StudentID');



    $connect->CompanyPersonalEmailID=implode(",",$id1);
     
     
     
     /**$connect1 = new Suggestion();
     $connect1->Destination=request('Destination');
     $connect1->MainTermID = $maxMainKey;
     $connect1->StudentID= request('StudentID');
     
     $connect1->save();**/
    $connect->save();
    }
     catch(\Illuminate\Database\QueryException $exception){
        $s="These words are not maching in description box,try another description";
        return redirect()->back()->with('msg',$s);
    }
   
   return redirect()->route('urpd',['id'=> request('StudentID')]);
   
}
}