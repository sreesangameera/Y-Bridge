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
use App\Models\Industrialistproject;
use App\Models\Desclecturer;
use App\Models\Suggestion;
use App\Models\Suggestionstud;
use App\Models\ConnectIndustrialist;
use App\Models\Descindustrialist;

class IndustrialistprojectController extends Controller
{
    public function create()
    {
        return view('ProjectPage.IndustrialistProjectPage');
    }
    
    public function stor()
    {

    try{
        $industrialistproject = new Industrialistproject();
        $industrialistproject ->Destination = request('Destination');
        //$industrialistproject ->StudentID = request('StudentID');
        $industrialistproject ->ProjectID = request('ProjectID');
        $industrialistproject ->CompanyPersonalEmailID  = request('CompanyPersonalEmailID');
        $industrialistproject ->Description = request('Description');
        $industrialistproject ->Titleoftheproject= request('Titleoftheproject');
        
        //$industrialistproject ->ProjectType = request('ProjectType');
        
        
        //StudentProject::create($request->all());
        $industrialistproject ->save();
       $description = Str::of(request('Description'))->split('/[\s,()"".]+/');
       $keys = DB::table('dictionaries')->get();
       $newArr = [];
       $mt = [];
       //echo strcasecmp($description[0],"NeTwork");
       foreach($keys as $key){
        for($i = 0 ; $i < count($description) ; $i++){
            if(strcasecmp($description[$i],$key->keywordName) == 0){
                $newArr[] = $key->keywordName;
                $mt[] = $key->mainTermId;

            }
        }
        
    }
    $desc = new Descindustrialist();
    $desc->CompanyPersonalEmailID  = request('CompanyPersonalEmailID');
    $desc->Description = implode(", ",$newArr);
    $desc->Mainterms = implode(", ",$mt);
    $desc->save();
               
    //$dict =DB::table('dictionaries')->whereIn('keywordName',[$newArr])->pluck('mainTermId')->toArray();
        
    $dict = array_count_values($mt);
    arsort($dict);
    $maxMainKey = array_key_first($dict);
    $maxi = [];
    $i=0;
       foreach(array_keys($dict) as $d){
       
           if($i >=3)break;
               $maxi[]=$d;
           $i++;
           }

        $connectioni = new Connectindustrialist();
        $connectioni->CompanyPersonalEmailID  = request('CompanyPersonalEmailID');
        $connectioni->MainTermID = implode(", ",$maxi);
        $connectioni->Maintermcount= implode(", ",$dict);
        $connectioni->save();

        $stu = DB::table('students')->select('Skills','LastName','FirstName','StudentID')->get();

     $stuInt= [];
    $id = [];
     foreach($stu as $s){
         if(strcasecmp($s->Skills,'') != 0){
              $stuInt = explode(',',$s->Skills);
         
         
        for($i = 0 ; $i < count($stuInt); $i++){
            $num = DB::table('mainTerms')->where('mainTerm',$stuInt[$i])->first();  
                  for($i=0; $i< count($maxi); $i++)
                  {
           if($maxi[$i] == (integer)$num->mainTermId){
            
               array_push($id, $s->StudentID);
               break;
            
        }
    }
     
     }
         }
    }


       // $ind =DB::table('connections')->where('mainTermId',$maxMainKey)->pluck('StudentID')->toArray(); 
        $connect = new Suggestion();
        $connect->Destination=request('Destination');
        $connect->ProjectID=request('ProjectID');
        $connect->MainTermID = implode(",",$maxi);
        $connect->CompanyPersonalEmailID  = request('CompanyPersonalEmailID');
        $connect->StudentID = implode(",",$id);
        $connect->save();}

        /*$stu =DB::table('connectlecturers')->where('MainTermID',$maxMainKey)->pluck('LecturerID')->toArray();
     $connect = new Suggestion();
     $connect->Destination=request('Destination');
     $connect->MainTermID = $maxMainKey;
     $connect->NameWithInitials = request('NameWithInitials');
     //$st = request('StudentID');
     $connect->LecturerID = implode(",",$stu);
        $connect->save();*/
           /*$dict =DB::table('mainTerms')->where('mainTerm',$industrialistproject ->Technologies)->pluck('mainTermId');
           $connect = new Suggestion();
           $connect->Destination=request('Destination');
           $connect->MainTermID = $dict;
           $connect->StudentID = request('StudentID');
           $industrialistproject ->Industrialist= request('NameWithInitials');
          // $connect->StudentID = request('StudentID');
           
           $connect->save();
           
        $dict =DB::table('mainTerms')->where('mainTerm',$industrialistproject->Technologies)->pluck('mainTermId')->toArray();
        $connection = new ConnectIndustrialist();
        $connection->NameWithInitials = request('NameWithInitials');
        $connection->MainTermID = implode(",",$dict);
        $connection->save();
    
          
        $lec =DB::table('connections')->where('mainTermId',$connection->MainTermID)->pluck('StudentID')->toArray(); 
        $connect = new Suggestion();
        $connect->Destination=request('Destination');
        $connect->MainTermID = $connection->MainTermID;
        $connect->Industrialists = request('NameWithInitials');
        $connect->StudentID =implode(",", $lec);
        $connect->save();*/

        catch(\Illuminate\Database\QueryException $exception){
            $s="These words are not maching in description box,try another description";
            return redirect()->back()->with('msg',$s);
        }
     
     
    return redirect('/uri');
    //return redirect()->route('uri',['id'=> request('CompanyPersonalEmailID')]);
}
}