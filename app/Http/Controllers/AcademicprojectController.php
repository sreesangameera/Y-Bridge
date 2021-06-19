<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Academicproject;
use Illuminate\Support\Facades\DB;
use App\Models\Academic;
use App\Models\User;
use App\Models\Desclecturer;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\Models\Connectlecturer;
use App\Models\Connections;
use App\Models\Student;
use App\Models\Studentproject;
use App\Models\Suggestion;

class AcademicprojectController extends Controller

{
    public function create()
    {
        return view('ProjectPage.LecturerProjectPage');
    }
    
    public function store1()
    {
    
       try{
            $academicproject = new Academicproject();
        $academicproject->Destination = request('Destination');
        $academicproject->LecturerID = request('LecturerID');
        $academicproject->ProjectID = request('ProjectID');
        $academicproject->Titleoftheproject = request('Titleoftheproject');

        $academicproject->Description = request('Description');
        
        
        $academicproject->ProjectType = request('ProjectType');
        //$academicproject->ProjectStatus = request('ProjectStatus');
        
        $academicproject->save();
        $description = Str::of(request('Description'))->split('/[\s,"".()]+/');
        $keys = DB::table('dictionaries')->get();
        $newArr = [];
        $mt = [];
        foreach($keys as $key){
           for($i = 0 ; $i < count($description) ; $i++){
               if(strcasecmp($description[$i],$key->keywordName) == 0){
                   $newArr[] = $key->keywordName;
                   $mt[] = $key->mainTermId;

               }
           }
           
       }
     

       $dict = array_count_values($mt);
            arsort($dict);
            $maxMainKey = array_key_first($dict);



        $desc = new Desclecturer();
        $desc->LecturerID = request('LecturerID');
        $desc->Description = implode(", ",$newArr);
        $desc->Mainterms = implode(", ",$mt);
        

        $desc->save();
        $maxi = [];
        
       // $dict =DB::table('dictionaries')->whereIn('keywordName',[$newArr])->pluck('mainTermId')->toArray();
       $i=0;
       foreach(array_keys($dict) as $d){
       
           if($i >=3)break;
               $maxi[]=$d;
           $i++;
           }
            
     
         $connectionl = new Connectlecturer();
         $connectionl->LecturerID = request('LecturerID');
         $connectionl->MainTermID = implode(", ",$maxi);
         $connectionl->Maintermcount = implode(", ",$dict);
        
         $connectionl->save();

         $stu = DB::table('students')->select('Skills','LastName','FirstName','StudentID')->get();

     $stuInt= [];
    $id = [];
     foreach($stu as $s){
         if(strcasecmp($s->Skills,'') != 0){
              $stuInt = explode(',',$s->Skills);
         
         
        for($i = 0 ; $i < count($stuInt); $i++){
            $num = DB::table('mainTerms')->where('mainTerm',$stuInt[$i])->first();  
                 for($i=0; $i< count($maxi); $i++) {
           if($maxi[$i] == (integer)$num->mainTermId){
            
               array_push($id, $s->StudentID);
               break;
           }
        }
     
     }
         }
    }
         
        $lec =DB::table('connections')->where('mainTermId',$maxMainKey)->pluck('StudentID')->toArray(); 
        $connect = new Suggestion();
        $connect->Destination=request('Destination');
        $connect->ProjectID=request('ProjectID');
        $connect->MainTermID = implode(",",$maxi);
        $connect->LecturerID = request('LecturerID');
        $connect->StudentID = implode(",",$id);
        $connect->save();}

        /*$stuss =DB::table('connectindustrialists')->where('MainTermID',$maxMainKey)->pluck('NameWithInitials')->toArray();
     $connect = new Suggestion();
     $connect->Destination=request('Destination');
     $connect->MainTermID = $maxMainKey;
     $connect->LecturerID = request('LecturerID');
     $connect->NameWithInitials=implode(",",$stuss);
        $connect->save();*/
    


        catch(\Illuminate\Database\QueryException $exception){
            $s="These words are not maching in description box,try another description";
            return redirect()->back()->with('msg',$s);
        }
       // $connect->save();

    return redirect('/urp');
    //return redirect()->route('urp',['id'=> request('EmployeeID')]);
    }
}