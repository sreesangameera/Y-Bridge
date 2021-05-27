<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function spps(){
        return view('searchpps');      }

    public function sppi(){
        return view('searchppi');      }

    public function sppa(){
        return view('searchppa');      }

    public function snotifi(){
        return view('Notification/stnotifi');      }
    
    public function lnotifi(){
        return view('Notification/lenotifi');      }
    
    public function inotifi(){
        return view('Notification/innotifi');      } 
    
    public function sprqsts(){
        return view('ProjectRequests/sprequests');      }
        
    public function lprqsts(){
        return view('ProjectRequests/lprequests');      }
        
    public function iprqsts(){
        return view('ProjectRequests/iprequests');      } 
            
     public function sspro(){
        $p=DB::table('studentprojects')->get();
        return view('StoredProjects/ssprojects')->with('usert',$p);      }
    public function ispro(){
        $p=DB::table('industrialistprojects')->get();
        return view('StoredProjects/isprojects')->with('usert',$p);      }
    public function lspro(){
        $p=DB::table('academicprojects')->get();
        return view('StoredProjects/lsprojects')->with('usert',$p);      }

}
