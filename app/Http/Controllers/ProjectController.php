<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function SProject(){
        return view('ProjectPage/StudentProjectPage');      }

    public function LProject(){
        return view('ProjectPage/LecturerProjectPage');      }

    public function IProject(){
        return view('ProjectPage/IndustrialistProjectPage');      }

    public function spps(){
        return view('searchpps');      }

    public function sppi(){
        return view('searchppi');      }

    public function sppa(){
        return view('searchppa');      }

    public function snotifi(){
        $email=   Auth::user()->email ;
        $id=DB::table('students')->where('EmailID',$email)->value('StudentID');
        $p=DB::table('notifications')->where('rid',$id)->get();
        return view('Notification/stnotifi')->with('nt',$p);       }
    
    public function lnotifi(){
        $email=   Auth::user()->email ;
        $id=DB::table('academics')->where('EmailID',$email)->value('EmployeeID');
        $p=DB::table('notifications')->where('rid',$id)->get();
        return view('Notification/lenotifi')->with('nt',$p);      }
    
    public function inotifi(){
        $email=   Auth::user()->email ;
        $id=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->value('CompanyPersonalEmailID');
        $p=DB::table('notifications')->where('rid',$id)->get();
        return view('Notification/innotifi')->with('nt',$p);      } 
    
    public function sprqsts(){
        $email=   Auth::user()->email ;
        $id=DB::table('students')->where('EmailID',$email)->value('StudentID');
        $qi=DB::table('requests')->where('rid',$id)->where('srole',"industrialist")->get();
        $ql=DB::table('requests')->where('rid',$id)->where('srole',"lecturer")->get();
        
        return view('ProjectRequests/sprequests')->with('irts',$qi)->with('lrts',$ql);      }

    public function racpts($id){
        DB::table('requests')->where('id',$id)->update(['accptd' => "accepted",]);
        $ln=DB::table('requests')->where('id',$id)->value('rn');
        $pid=DB::table('requests')->where('id',$id)->value('pid');
        DB::table('academicprojects')->where('ProjectID',$pid)->update(['StudentID' => $ln,]);
        return redirect()->back();
        }
        public function rdclns($id){
            $rid=DB::table('requests')->where('id',$id)->value('sid');
            $ln=DB::table('requests')->where('id',$id)->value('rn');
            $lnp=DB::table('requests')->where('id',$id)->value('pid');
            DB::table('notifications')->insert([
                'msg' => $ln." has declined your request",'rid' => $rid,'pid' => $lnp]);
        DB::table('requests')->where('id',$id)->update(['accptd' => "declined",]);
    
        return redirect()->back();
        }

        public function racptsi($id){
            DB::table('requests')->where('id',$id)->update(['accptd' => "accepted",]);
            $ln=DB::table('requests')->where('id',$id)->value('rn');
            $pid=DB::table('requests')->where('id',$id)->value('pid');
            DB::table('industrialistprojects')->where('ProjectID',$pid)->update(['StudentID' => $ln,]);
            return redirect()->back();
            }
            public function rdclnsi($id){
                $rid=DB::table('requests')->where('id',$id)->value('sid');
                $ln=DB::table('requests')->where('id',$id)->value('rn');
                $lnp=DB::table('requests')->where('id',$id)->value('pid');
                DB::table('notifications')->insert([
                    'msg' => $ln." has declined your request",'rid' => $rid,'pid' => $lnp]);
            DB::table('requests')->where('id',$id)->update(['accptd' => "declined",]);
        
            return redirect()->back();
            }
        
    public function lprqsts(){
        $email=   Auth::user()->email ;
        $id=DB::table('academics')->where('EmailID',$email)->value('EmployeeID');
        $p=DB::table('requests')->where('rid',$id)->get();
        return view('ProjectRequests/lprequests')->with('rt',$p); 
         }
    public function racpt($id){
    DB::table('requests')->where('id',$id)->update(['accptd' => "accepted",]);
    $ln=DB::table('requests')->where('id',$id)->value('rn');
    $pid=DB::table('requests')->where('id',$id)->value('pid');
    DB::table('studentprojects')->where('ProjectID',$pid)->update(['LecturerID' => $ln,]);
    return redirect()->back();
    }
    public function rdcln($id){
        $rid=DB::table('requests')->where('id',$id)->value('sid');
        $ln=DB::table('requests')->where('id',$id)->value('rn');
        $lnp=DB::table('requests')->where('id',$id)->value('pid');
        DB::table('notifications')->insert([
            'msg' => $ln." has declined your request",'rid' => $rid,'pid' => $lnp]);
    DB::table('requests')->where('id',$id)->update(['accptd' => "declined",]);

    return redirect()->back();
    }
        
    public function iprqsts(){
        $email=   Auth::user()->email ;
        $id=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->value('CompanyPersonalEmailID');
        $p=DB::table('requests')->where('rid',$id)->get();
        
        return view('ProjectRequests/iprequests')->with('rti',$p);     } 
    public function racpti($id){
        DB::table('requests')->where('id',$id)->update(['accptd' => "accepted",]);
        $ln=DB::table('requests')->where('id',$id)->value('rn');
        $pid=DB::table('requests')->where('id',$id)->value('pid');
        DB::table('studentprojects')->where('ProjectID',$pid)->update(['CompanyPersonalEmailID' => $ln,]);
        return redirect()->back();
        }
        public function rdclni($id){
            $rid=DB::table('requests')->where('id',$id)->value('sid');
            $ln=DB::table('requests')->where('id',$id)->value('rn');
            $lnp=DB::table('requests')->where('id',$id)->value('pid');
            DB::table('notifications')->insert([
                'msg' => $ln." has declined your request",'rid' => $rid,'pid' => $lnp]);
        DB::table('requests')->where('id',$id)->update(['accptd' => "declined",]);
    
        return redirect()->back();
        }
            
     public function sspro(){
        $email=   Auth::user()->email ;
        $id=DB::table('students')->where('EmailID',$email)->value('StudentID');
        
        $p=DB::table('studentprojects')->where('StudentID',$id)->get();
        return view('StoredProjects/ssprojects')->with('usert',$p);      }
    public function ispro(){
        $email=   Auth::user()->email ;
        $id=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->value('CompanyPersonalEmailID');
        
        $p=DB::table('industrialistprojects')->where('CompanyPersonalEmailID',$id)->get();
        
        return view('StoredProjects/isprojects')->with('usert',$p);      }
    public function lspro(){
        $email=   Auth::user()->email ;
        $id=DB::table('academics')->where('EmailID',$email)->value('EmployeeID');
        
        $p=DB::table('academicprojects')->where('LecturerID',$id)->get();
        
        return view('StoredProjects/lsprojects')->with('usert',$p);      }


        public function delsp($id){
            $user=DB::table('studentprojects')->where('id',$id ) ->delete();
            $s="Project Deleted successfully";
            return redirect()->back()->with('usert',$user)->with('msg',$s); 
        }  

        public function dellp($id){
            $user=DB::table('academicprojects')->where('id',$id ) ->delete();
            return redirect()->back()->with('usert',$user); 
        }  

        public function delip($id){
            $user=DB::table('industrialistprojects')->where('id',$id ) ->delete();
            return redirect()->back()->with('usert',$user); 
        }  

}
