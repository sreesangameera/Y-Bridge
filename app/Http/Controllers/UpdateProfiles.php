<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use Carbon\Carbon;
=======
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95

class UpdateProfiles extends Controller
{
    public function updatestudent(Request $request){

<<<<<<< HEAD
        $dt = Carbon::createFromFormat('Y-m-d',$request->dob );

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            if($dt->isFuture()){
                $s="DOB can not be a future date";
            }
            else{
            try{
=======
        

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            

>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            DB::table('students')->where('EmailID',$request->email)->update(['FirstName'=>$request->fname,
                                                                        'LastName'=>$request->lname,
                                                                        'StudentID'=>$request->si,
                                                                        'Gender'=>$request->g,
                                                                        'DateOfBirth'=>$request->dob,
                                                                        'HomeAddress'=>$request->ha,
                                                                        'ContactNumber'=>$request->cn,
                                                                        'LinkedIn'=>$request->li,
                                                                        'StudyProgramme'=>$request->sp,
                                                                        'SubjectsOffered'=>$request->so,
                                                                        'YearOfStudy'=>$request->level,
<<<<<<< HEAD
                                                                        
=======
                                                                        'Photo' => $name,
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
                                                                        
                                                                        ]);
            DB::table('users')->where('email',$request->email)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
<<<<<<< HEAD
            }
            catch(\Illuminate\Database\QueryException $exception){
                $s="This linkedin is already using";
                
            }
        }
=======
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }
<<<<<<< HEAD
    public function updatestudentpp(Request $request){

        

        
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            
        
            DB::table('students')->where('EmailID',$request->email)->update(['Photo' => $name,
                                                                         ]);
            return redirect()->back()->with('msg',"Profile picture updated successfully.");
        
    }
    
    

    public function updateindustrialist(Request $request){

        $dt = Carbon::createFromFormat('Y-m-d',$request->dob );

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            if($dt->isFuture()){
                $s="DOB can not be a future date";
            }
            else{
            
            try{
=======

    public function updateindustrialist(Request $request){

        

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            

>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            DB::table('industrialists')->where('CompanyPersonalEmailID',$request->email)->update(['NameWithInitials'=>$request->namewi,
                                                                                    'CompanyName'=>$request->comn,
                                                                                    'Designation'=>$request->designation,
                                                                                    'LinkedIn'=>$request->linkedin,
                                                                                    'FieldOfInterests'=>$request->foi,
                                                                                    'ContactNumber'=>$request->cn,
<<<<<<< HEAD
                                                                                    
=======
                                                                                    'Photo' => $name,
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
                                                                        ]);
            DB::table('users')->where('email',$request->email)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
<<<<<<< HEAD
        catch(\Illuminate\Database\QueryException $exception){
            $s="This linkedin is already using";
        }
        }
    }
=======
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }

<<<<<<< HEAD
    public function updateindustrialistpp(Request $request){

        

        
        $name = $request->email.'.'.$request->photo->extension();
        $request->photo->move(public_path().'/upload/profile', $name);
        
    
        DB::table('industrialists')->where('CompanyPersonalEmailID',$request->email)->update(['Photo' => $name,]);
        return redirect()->back()->with('msg',"Profile picture updated successfully.");
    
}
    
    public function updateacademic(Request $request){

        $dt = Carbon::createFromFormat('Y-m-d',$request->dob );

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            if($dt->isFuture()){
                $s="DOB can not be a future date";
            }
            else{
            
            try{
=======
    
    
    public function updateacademic(Request $request){

        

        $pw=DB::table('users')->where('email',$request->email)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            $name = $request->email.'.'.$request->photo->extension();
            $request->photo->move(public_path().'/upload/profile', $name);
            

>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
            DB::table('academics')->where('EmailID',$request->email)->update(['Title'=>$request->title,
                                                                        'FirstName'=>$request->fname,
                                                                        'LastName'=>$request->lname,
                                                                        'EmployeeID'=>$request->eid,
                                                                        'Gender'=>$request->gender,
                                                                        'DateOfBirth'=>$request->dob,
                                                                        'Designation'=>$request->designation,
                                                                        'AdminRole'=>$request->arole,
                                                                        'LinkedIn'=>$request->linkedin,
                                                                        'ContactNumber'=>$request->cno,
                                                                        'OfficialWebsite'=>$request->ow,
                                                                        'ResearchInterest'=>$request->ri,
                                                                        'FieldOfSpecialization'=>$request->fos,
<<<<<<< HEAD
                                                                        
=======
                                                                        'Photo' => $name,
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
                                                                        ]);
            DB::table('users')->where('email',$request->email)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
<<<<<<< HEAD
        catch(\Illuminate\Database\QueryException $exception){
            $s="This linkedin is already using";
        }
        }
    }
=======
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }
<<<<<<< HEAD
    public function updateacademicpp(Request $request){

        

        
        $name = $request->email.'.'.$request->photo->extension();
        $request->photo->move(public_path().'/upload/profile', $name);
        
    
        DB::table('academics')->where('EmailID',$request->email)->update(['Photo' => $name,
                                                                        ]);
        return redirect()->back()->with('msg',"Profile picture updated successfully.");
    
}

=======
    
>>>>>>> 35ff1ad92f5c0bd24a6d1b89dbd7d0fff8bdca95

}
