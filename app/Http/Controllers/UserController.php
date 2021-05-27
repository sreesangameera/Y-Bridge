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
        try{
        $user=new User;
       
            $user->fname=$request->fname;
            $user->lname=$request->lname;
            $user->role=$request->role;
            $user->email=$request->email;
            $user->password= Hash::make($request->password);
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
          
            $user->save();
     }

       
        elseif($x->role=="Student"){
            $user=new Student;
            
                
                $user->FirstName=$x->fname;
                $user->LastName=$x->lname;
                $user->EmailID=$x->email;
              
                $user->save();
         }

        elseif($x->role=="Lecturer"){
            $user=new Academic;
            
                $user->FirstName=$x->fname;
                $user->LastName=$x->lname;
                $user->EmailID=$x->email;
              
                $user->save();
         }

         $details=['title'=>'your account successfully registered in ybridge.',
                  'body'=>'You are welcome to ybridge : '];
           Mail::to($x->email)->send(new ybridge_mail($details));

         $t="User Added";
        return redirect()->back()->with('msg',$t);    
        }
    public function stud(){
        $p=DB::table('students')->get();
            return view('AdminDash/studentd')->with('studentt',$p);      }
    public function indd(){
        $p=DB::table('industrialists')->get();
            return view('AdminDash/industrialistd')->with('industrialistt',$p);      }
    public function acad(){
        $p=DB::table('academics')->get();
            return view('AdminDash/academicd')->with('academict',$p);      }
    public function stusd(){
        $p=DB::table('student_societies')->get();
            return view('AdminDash/studentsoc')->with('studentsoct',$p);      }
    public function uped(){
        $p=DB::table('upcoming_events')->get();
            return view('AdminDash/upcomingeve')->with('c',$p);      }
    
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

public function shind($id){
    $r=str_replace("*","/",$id);
    $c=DB::table('industrialists')->where('CompanyPersonalEmailID',$r)->first();
return view('ShowProfile/industrialistsp')->with('c', $c);      
}

public function sug(){
           
    $ss =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('LecturerID');
    $ssi =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('CompanyPersonalEmailID');

    //$su=implode("<br>",$user->LecturerID)->with('suggestiont',$ssi);
    
        return view('studentprojects/suggestion')->with('suggestiont',$ss)->with('suggestionta',$ssi);
  
}
    //return view('studentprojects/sugglec')->with('suggestionlec',$ll);
  

public function sugglec(){
       
$ll =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('StudentID');
$lli =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('CompanyPersonalEmailID');
$x=explode(',',$ll,0);
    return view('studentprojects/sugglec')->with('suggestionlec',$ll);
    
}

public function suggind(){
       
$ii =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('StudentID');
$iil =DB::table('suggestions')->orderby('id','DESC')->limit(1)->value('LecturerID');

    return view('studentprojects/suggind')->with('suggestionind',$ii);
}
}


