<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ybridge_mail;



class login extends Controller
{
    
    public function forgetp(Request $request)
    {
            $email=DB::table('users')->where('email',$request->email)->value('email');
            if($email){
                $password=rand(100000,1000000);
                DB::table('users')->where('email',$request->email)->update([
                    'password' =>Hash::make($password),
                ]);
                $s="Password reset successful";
            }
            else{
                $s="Email is wrong";
            }
        
           
           
   
     
           
  
       if($s=="Password reset successful"){
           $details=['title'=>'Your password has reset.',
                  'body'=>'Your new password : '.$password];
           Mail::to($email)->send(new ybridge_mail($details));
           return redirect()->route('login')->with('msg',$s);
       }
       else{
           return redirect()->route('forget')->with('msg',$s);
       }
   }
}
