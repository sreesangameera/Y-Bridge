<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Frontendcontroller extends Controller
{
    public function home(){
        $p=DB::table('students')->get();
            
            $q=DB::table('academics')->get();
            
            $r=DB::table('industrialists')->get();
            $v=DB::table('student_societies')->get();
            $u=DB::table('upcoming_events')->get();
        return view('Home/home')->with('studentt',$p)->with('academict',$q)->with('industrialistt',$r)->with('studentsoct',$v)->with('upcominget',$u);     }

    public function homea(){
            $p=DB::table('students')->get();
                
                $q=DB::table('academics')->get();
                
                $r=DB::table('industrialists')->get();
                $v=DB::table('student_societies')->get();
                $u=DB::table('upcoming_events')->get();
            return view('/Home/home')->with('studentt',$p)->with('academict',$q)->with('industrialistt',$r)->with('studentsoct',$v)->with('upcominget',$u) ;      }

    public function index(){
        return view('Home/Introduction');      }
    
    public function obj(){
        return view('Home/Objectives');      }

    public function upes(){
        return view('Home/UpcomingEvents');      }
    
    public function prs(){
        return view('Home/Participants');      }
    
    public function stsa(){
        return view('Home/StudentSocieties');      }

    public function log(){
        return view('Login/Login');      }
            
    public function sgn(){
        return view('Login/SignUp');      }

    public function fgp(){
        return view('Login/ForgetPassword');      }

    public function a(){
        return view('a');      }

    public function admin(){
        return view('Admin/Admin');      }

    public function wfa(){
        return view('Login/waitingforacceptance');      }

    public function sstp($email){
        $c=DB::table('students')->where('EmailID',$email)->first();
        return view('ShowProfile/studentsp')->with('c',$c);      }
    public function sacp($email){
        $c=DB::table('academics')->where('EmailID',$email)->first();
        return view('ShowProfile/academicsp')->with('c',$c);      }
    public function sinp($email){
        $c=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->first();
        return view('ShowProfile/industrialistsp')->with('c',$c);      }
        

    public function pr(){
            $p=DB::table('students')->get();
            
            $q=DB::table('academics')->get();
            
            $r=DB::table('industrialists')->get();
            return view('Home/Participants')->with('studentt',$p)->with('academict',$q)->with('industrialistt',$r);      
        }

    public function upe(){
            $v=DB::table('upcoming_events')->get();
            return view('Home/UpcomingEvents')->with('upcominget',$v);      
        }
    public function sts(){
        $v=DB::table('student_societies')->get();
            return view('Home/StudentSocieties')->with('studentsoct',$v);      }
    public function abc(){
        $email=   Auth::user()->email ;
        $c=DB::table('students')->where('EmailID',$email)->first();
            return view('test4')->with('c',$c);      }
    
    public function profile(){
      $email=   Auth::user()->email ;
      $role= Auth::user()->role ;
      

              
        if($role=="Student"){
            $c=DB::table('students')->where('EmailID',$email)->first();
            return view('profile.studentp')->with('c',$c);
        }
        elseif($role=="Industry"){
            $c=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->first();
            return view('profile.industrialistp')->with('c',$c);
        }
        elseif($role=="Lecturer"){
            $c=DB::table('academics')->where('EmailID',$email)->first();
            return view('profile.academicp')->with('c', $c);

        }
        elseif($role=="Admin"){
            $p=DB::table('students')->get();
                
            $q=DB::table('academics')->get();
            
            $r=DB::table('industrialists')->get();

            $s=DB::table('users')->get();
            $l=1;
            return view('AdminDash.dashboard')->with('studentt',$p)->with('academict',$q)->with('industrialistt',$r)->with('usert',$s)->with('l',$l);

        }
    }
}
