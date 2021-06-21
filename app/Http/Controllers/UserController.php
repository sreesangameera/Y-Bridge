<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Industrialist;
use App\Models\Academic;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ybridge_mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');

        
     
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          
            'UserName' => 'required',
            'Role' => '',
            'password' => 'required',
        ]);
    
       
        User::create($request->all());
       
     
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'UserName' => 'required',
            'password' => 'required',

        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function indexl(){
        return view('layouts/App');     
     }

    public function admindash(){
        $p=DB::table('users')->get();
        return view('AdminDash.dashboard')->with('usert',$p);      
    }

    public function registeruser(Request $request){
        $request->validate([
          
            'fname' => 'required',
            'lname' => 'required',
            'role' => 'required',
            'email' => 'required|email|unique:users',
            'linkedin' => 'nullable|unique:users',
            'password' => 'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z]).*$/|
            confirmed',
        ]);
        
        try{
        $user=new User;
       
            $user->fname=$request->fname;
            $user->lname=$request->lname;
            $user->role=$request->role;
            $user->email=$request->email;
            $user->linkedin=$request->linkedin;
            $user->password= Hash::make($request->password_confirmation);
            $user->save();
        }
        catch(\Illuminate\Database\QueryException $exception){
            $s="This email already have an account";
            return redirect()->back()->with('msg',$s);
        }
        $t="Wait for the acceptance";
        $details=['title'=>'new user is waiting',
                  'body'=>' : '];
           Mail::to('ybridgejaffna@gmail.com')->send(new ybridge_mail($details));
        return redirect()->back()->with('msg',$t);    
    
     }

     public function selectu($id){
        DB::table('users')->where('id',$id)->update(['not_confirmed' => "0",
                                                                         ]);
        $x=DB::table('users')->where('id',$id)->first();
        if($x->role=="Industry"){
        $user=new Industrialist;
        
            $user->NameWithInitials=$x->fname." ".$x->lname;
            $user->CompanyPersonalEmailID=$x->email;
            $user->LinkedIn=$x->linkedin;
            $user->save();
     }

       
        elseif($x->role=="Student"){
            $user=new Student;
            
                
                $user->FirstName=$x->fname;
                $user->LastName=$x->lname;
                $user->EmailID=$x->email;
                $user->LinkedIn=$x->linkedin;
                $user->save();
         }

        elseif($x->role=="Lecturer"){
            $user=new Academic;
            
                $user->FirstName=$x->fname;
                $user->LastName=$x->lname;
                $user->EmailID=$x->email;
                $user->LinkedIn=$x->linkedin;
                $user->save();
         }

         $details=['title'=>'your account successfully registered in y-bridge.',
                  'body'=>'You are welcome to ybridge : '];
           Mail::to($x->email)->send(new ybridge_mail($details));

         $t="User Added";
        return redirect()->back()->with('msg',$t);    
        }
    public function stud(){
        $email=   Auth::user()->email ;
        $p=DB::table('students')->get();
            return view('AdminDash/studentd')->with('studentt',$p);      }
    public function indd(){
        $email=   Auth::user()->email ;
        $p=DB::table('industrialists')->get();
            return view('AdminDash/industrialistd')->with('industrialistt',$p);      }
    public function acad(){
        $email=   Auth::user()->email ;
        $p=DB::table('academics')->get();
            return view('AdminDash/academicd')->with('academict',$p);      }
    public function stusd(){
        $email=   Auth::user()->email ;
        $p=DB::table('student_societies')->get();
            return view('AdminDash/studentsoc')->with('studentsoct',$p);      }
    public function uped(){
        $email=   Auth::user()->email ;
        $p=DB::table('upcoming_events')->get();
            return view('AdminDash/upcomingeve')->with('c',$p);      }
    public function mtid(){
        $email=   Auth::user()->email ;
        $p=DB::table('mainterms')->get();
            return view('AdminDash/mainterms')->with('c',$p);      }
    public function dctnry(){
        $email=   Auth::user()->email ;
        $p=DB::table('dictionaries')->get();
            return view('AdminDash/dictionary')->with('c',$p);      }

    public function spdb(){
        $email=   Auth::user()->email ;
        $p=DB::table('studentprojects')->get();
            return view('AdminDash/studentpd')->with('usert',$p);      }

    public function lpdb(){
        $email=   Auth::user()->email ;
        $p=DB::table('academicprojects')->get();
            return view('AdminDash/academicpd')->with('usert',$p);      }
    public function ipdb(){
        $email=   Auth::user()->email ;
        $p=DB::table('industrialistprojects')->get();
            return view('AdminDash/industrialistpd')->with('usert',$p);      }
    
    public function upcomingeventsadmin(Request $request){

                DB::table('upcoming_events')->where('id',$request->id)->update([
                    'Link' => $request->link,'Date' => $request->date,'EName' => $request->ename,'Description' => $request->description,

                                                                                ]);
                return redirect()->back()->with('msg',"Event updated");
            
        }
    public function studentsocietiesadmin(Request $request){
  
            DB::table('student_societies')->where('id',$request->id)->update([
                'Link' => $request->link,'Date' => $request->date,'EName' => $request->ename,'Description' => $request->description,

                                                                            ]);
            return redirect()->back()->with('msg',"Event updated");
        
    }
    
    public function upcomingeventsadminadd(Request $request){

        DB::table('upcoming_events')->insert([
            'Link' => $request->link,'Date' => $request->date,'EName' => $request->ename,'Description' => $request->description, ]);
                
                
        return redirect()->back()->with('msg',"Event Added");
    
}
public function studentsocietiesadminadd(Request $request){
        
            
    DB::table('student_societies')->insert([
        'Link' => $request->link,'Date' => $request->date,'EName' => $request->ename,'Description' => $request->description,

                                                                    ]);
    return redirect()->back()->with('msg',"Event Added");

}

public function maintermidadminadd(Request $request){
    try{    
            
    DB::table('mainterms')->insert([
        'mainTermId' => $request->mainTermId,'mainTerm' => $request->mainTerm

                                                                    ]);}
                                                                    catch(\Illuminate\Database\QueryException $exception){
                                                                        $s="MaintermId already using";
                                                                        return redirect()->back()->with('msg',$s);
                                                                    }
    return redirect()->back()->with('msg',"Successfully Done");

}

public function dictionaryadminadd(Request $request){
        
            
    DB::table('dictionaries')->insert([
        'keywordName' => $request->keywordName,'mainTermId' => $request->mainTermId

                                                                    ]);
    return redirect()->back()->with('msg',"Successfully Done");

}


public function aeadmin(Request $request){
  
    DB::table('academics')->where('id',$request->id)->update([
        'EmailID' => $request->EmailID

                                                                    ]);
    return redirect()->back()->with('msg',"Successfully Done");

}

public function ieadmin(Request $request){
  
    DB::table('industrialists')->where('id',$request->id)->update([
        'CompanyPersonalEmailID' => $request->CompanyPersonalEmailID

                                                                    ]);
    return redirect()->back()->with('msg',"Successfully Done");

}

public function seadmin(Request $request){
  
    DB::table('students')->where('id',$request->id)->update([
        'EmailID' => $request->EmailID

                                                                    ]);
    return redirect()->back()->with('msg',"Successfully Done");

}

      
public function shlec($id){
    $q=str_replace("*","/",$id);
    $c=DB::table('academics')->where('EmployeeID',$q)->first();
return view('ShowProfile/academicsp')->with('c', $c);      
}
public function shstu($id){
    $q=str_replace("*","/",$id);
    $c=DB::table('students')->where('StudentID',$q)->first();
return view('ShowProfile/studentsp')->with('c', $c);
}
public function shstu2($id){
    $q=str_replace("*","/",$id);
    $c=DB::table('students')->where('StudentID',$q)->first();
return view('ShowProfile/studentsp2')->with('c', $c);
}

public function shind($id){
    $r=str_replace("*","/",$id);
    $c=DB::table('industrialists')->where('CompanyPersonalEmailID',$r)->first();
return view('ShowProfile/industrialistsp')->with('c', $c);      
}

public function sug(){
    $id = $_GET['id'];


$ss =DB::table('suggestions')->where('StudentID',$id)->orderby('id','DESC')->limit(1)->value('LecturerID');
$ssar = explode(',',$ss);
$sw = DB::table('academics')->whereIn('EmployeeID',$ssar)->get()->toArray();


$ssi =DB::table('suggestions')->where('StudentID',$id)->orderby('id','DESC')->limit(1)->value('CompanyPersonalEmailID');
$ssa = explode(',',$ssi);
$si = DB::table('industrialists')->whereIn('CompanyPersonalEmailID',$ssa)->get()->toArray();
//$su=implode("<br>",$user->LecturerID)->with('suggestiont',$ssi);
return view('studentprojects/suggestion')->with('suggestiont',$sw)->with('suggestionta',$si);

///return gettype($ssi);

}
public function showsugs($ProjectID){
    //$id = $_GET['id'];

    //$r=str_replace("*","/",$ProjectID);
$ss =DB::table('suggestions')->where('ProjectID',$ProjectID)->value('LecturerID');
$ssar = explode(',',$ss);
$sw = DB::table('academics')->whereIn('EmployeeID',$ssar)->get()->toArray();


$ssi =DB::table('suggestions')->where('ProjectID',$ProjectID)->value('CompanyPersonalEmailID');
$ssa = explode(',',$ssi);
$si = DB::table('industrialists')->whereIn('CompanyPersonalEmailID',$ssa)->get()->toArray();
//$su=implode("<br>",$user->LecturerID)->with('suggestiont',$ssi);
return view('ShowSug/showsugs')->with('suggestiont',$sw)->with('suggestionta',$si);

///return gettype($ssi);

}
//return view('studentprojects/sugglec')->with('suggestionlec',$ll);


public function sugglec(){

 $ll =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('StudentID');
 $lli =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('CompanyPersonalEmailID');
 $x=explode(',',$ll,0);
     return view('studentprojects/sugglec')->with('suggestionlec',$ll);
     
 }

 public function showsugl($ProjectID){
    $ll =DB::table('suggestions')->where('ProjectID',$ProjectID)->value('StudentID');
    $lli =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('CompanyPersonalEmailID');
    $x=explode(',',$ll,0);
        return view('ShowSug/showsugl')->with('suggestionleca',$ll);
    }

/**public function sugglec(){
     $id = $_GET['id'];


$ssl =DB::table('suggestions')->where('LecturerID',$id)->orderby('id','DESC')->limit(1)->value('StudentID');
$sslr = explode(',',$ssl);
$swl = DB::table('students')->whereIn('StudentID',$sslr)->get()->toArray();
return view('studentprojects/sugglec')->with('suggestionlec',$swl);
 }**/


 /**public function suggind(){
     $id = $_GET['id'];


$ss =DB::table('suggestions')->where('CompanyPersonalEmailID',$id)->orderby('id','DESC')->limit(1)->value('StudentID');
$ssa = explode(',',$ss);
$sd = DB::table('students')->whereIn('StudentID',$ssa)->get()->toArray();

return view('studentprojects/suggind')->with('suggestionind',$sd);
 }
}**/
 public function suggind(){

     $ii =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('StudentID');
     $iil =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('LecturerID');
     
         return view('studentprojects/suggind')->with('suggestionind',$ii);
     }

     public function showsugi($ProjectID){

        $ii =DB::table('suggestions')->where('ProjectID',$ProjectID)->value('StudentID');
        $iil =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('LecturerID');
        
            return view('ShowSug/showsugi')->with('suggestionind',$ii);
        }
//stu-lec
public function streq(request $request){
    try{$email=   Auth::user()->email ;
        $fn=DB::table('students')->where('EmailID',$email)->value('FirstName');
        $ln=DB::table('students')->where('EmailID',$email)->value('LastName');

    DB::table('requests')->insert([
        'sid' => $request->stid,'rid' => $request->lid,'rn' => $request->ln,'sn' => $fn." ".$ln,'pid' => $request->pid ]);}
        catch(\Illuminate\Database\QueryException $exception){
            $s="These fields can not be null";
            return redirect()->back()->with('msg',$s);
        }

        return redirect()->back()->with('msg',"Your Request has been sent");
}
//stu-ind
public function lereq(request $request){
    try{$email=   Auth::user()->email ;
    $nwi=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->value('NameWithInitials');
    $tt=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->value('Title');

        DB::table('requests')->insert([
            'sid' => $request->inid,'rid' => $request->stid,'rn' => $request->stn,'sn' =>$tt.".".$nwi,'pid' => $request->pid,'srole' => "industrialist"]);}
            catch(\Illuminate\Database\QueryException $exception){
                $s="These fields can not be null";
                return redirect()->back()->with('msg',$s);
            }
    
            return redirect()->back()->with('msg',"Your Request has been sent");
        

       
}
//lec-stu
//in-stu
public function inreq(request $request){
    try{$email=   Auth::user()->email ;
        //$nwi=DB::table('industrialists')->where('CompanyPersonalEmailID',$email)->value('NameWithInitials');
        $tt=DB::table('academics')->where('EmailID',$email)->value('Title');
        $fn=DB::table('academics')->where('EmailID',$email)->value('FirstName');
        $ln=DB::table('academics')->where('EmailID',$email)->value('LastName');
        

   
    
        DB::table('requests')->insert([
            'sid' => $request->inid,'rid' => $request->stid,'rn' => $request->stn,'sn' => $tt.".".$fn." ".$ln,'pid' => $request->pid,'srole' => "lecturer" ]);}
            catch(\Illuminate\Database\QueryException $exception){
                $s="These fields can not be null";
                return redirect()->back()->with('msg',$s);
            }
    
            return redirect()->back()->with('msg',"Your Request has been sent");
    
}
public function delmi($id){
    $user=DB::table('mainterms')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}  
public function deld($id){
    $user=DB::table('dictionaries')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}  
public function delss($id){
    $user=DB::table('student_societies')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}
public function deue($id){
    $user=DB::table('upcoming_events')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}  
public function deldb($id){
    $user=DB::table('users')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}
public function dell($id){
    $user=DB::table('academics')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}  
public function dels($id){
    $user=DB::table('students')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}
public function deli($id){
    $user=DB::table('industrialists')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
} 
public function delspd($id){
    $user=DB::table('studentprojects')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
} 
public function dellpd($id){
    $user=DB::table('academicprojects')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
} 
public function delipd($id){
    $user=DB::table('industrialistprojects')->where('id',$id ) ->delete();
    $s="Deleted successfully";
    return redirect()->back()->with('usert',$user)->with('msg',$s); 
}  

}


