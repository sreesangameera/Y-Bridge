<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CreateProjectController;
use App\user;
use App\Http\Controllers\UpdateProfiles;
use App\Http\Controllers\login;
use App\Http\Controllers\StudentprojectController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\AcademicprojectController;
use App\Http\Controllers\IndustrialistprojectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[Frontendcontroller::class, 'home']);

Route::get('/profile',[Frontendcontroller::class, 'profile'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';



Route::post('/updatestudent',[UpdateProfiles::class, 'updatestudent']);
Route::post('/updatestudentpp',[UpdateProfiles::class, 'updatestudentpp']);
Route::post('/profile',[UpdateProfiles::class, 'updatestudentpp']);
Route::post('/updateindustrialist',[UpdateProfiles::class, 'updateindustrialist']);
Route::post('/updateindustrialistpp',[UpdateProfiles::class, 'updateindustrialistpp']);
Route::post('/updateacademic',[UpdateProfiles::class, 'updateacademic']);
Route::post('/updateacademicpp',[UpdateProfiles::class, 'updateacademicpp']);
Route::post('/updateindustrialistri',[UpdateProfiles::class, 'updateindustrialistri']);
Route::post('/updatestudentri',[UpdateProfiles::class, 'updatestudentri']);
Route::post('/updateacademicri',[UpdateProfiles::class, 'updateacademicri']);



Route::get('/home',[Frontendcontroller::class, 'home']);
Route::get('/in',[Frontendcontroller::class, 'index']);
Route::get('/ob',[Frontendcontroller::class, 'obj']);
Route::get('/ue',[Frontendcontroller::class, 'upe']);
Route::get('/p',[Frontendcontroller::class, 'pr']);
Route::get('/ss',[Frontendcontroller::class, 'sts']);
//Route::get('/abc',[Frontendcontroller::class, 'abc']);
//Route::get('/h1',[Frontendcontroller::class, 'h']);



//Route::get('/fp',[Frontendcontroller::class, 'fgp']);
//Route::get('/a',[Frontendcontroller::class, 'a']);

Route::get('/sstp/{email}',[Frontendcontroller::class, 'sstp'])->name('sstp');
Route::get('/sacp/{email}',[Frontendcontroller::class, 'sacp'])->name('sacp');
Route::get('/sinp/{email}',[Frontendcontroller::class, 'sinp'])->name('sinp');


//Route::get('/admin',[Frontendcontroller::class, 'admin']);
//Route::post('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);
//Route::get('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);





Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);

//Route::get('/welcome', function () {
//    return view('a');
//});

Route::get('/urpd',[UserController::class,'sug'])->name('urpd');
Route::get('/urp',[UserController::class,'sugglec'])->name('urp');
Route::get('/uri',[UserController::class,'suggind'])->name('uri');
Route::get('/create',[UserController::class,'create']);
Route::post('/store',[UserController::class,'store']);
Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[UserController::class,'update'])->name('update');
Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('delete');

//Route::get('/admindash',[UserController::class,'admindash']);
Route::get('/indd',[UserController::class,'indd']);
Route::get('/stud',[UserController::class,'stud']);
Route::get('/acad',[UserController::class,'acad']);
Route::get('/stusd',[UserController::class,'stusd']);
Route::post('/studentsocietiesadmin',[UserController::class,'studentsocietiesadmin']);
Route::post('/studentsocietiesadminadd',[UserController::class,'studentsocietiesadminadd']);
Route::get('/uped',[UserController::class,'uped']);
Route::post('/upcomingeventsadmin',[UserController::class,'upcomingeventsadmin']);
Route::post('/upcomingeventsadminadd',[UserController::class,'upcomingeventsadminadd']);
Route::post('/registeruser',[UserController::class,'registeruser']);

Route::get('selectu/{user}/', [UserController::class,'selectu'])->name('selectu');

Route::get('crop-image-upload', [CropImageController::class,'index']);
Route::post('crop-image-upload ', [CropImageController::class,'uploadCropImage']);

Route::post('/forgetp',[login::class,'forgetp']);
Route::get('/forget',function(){
    return view('auth.forgot-password');
  });


  //Route::get('/',[Frontendcontroller::class, 'wfa']);












Route::get('/spp',[ProjectController::class, 'SProject']);
Route::get('/lpp',[ProjectController::class, 'LProject']);
Route::get('/ipp',[ProjectController::class, 'IProject']);

Route::get('/spps',[ProjectController::class, 'spps']);
Route::get('/sppi',[ProjectController::class, 'sppi']);
Route::get('/sppa',[ProjectController::class, 'sppa']);
Route::get('/snotifi',[ProjectController::class, 'snotifi']);
Route::get('/lnotifi',[ProjectController::class, 'lnotifi']);
Route::get('/inotifi',[ProjectController::class, 'inotifi']);
Route::get('/sprqsts',[ProjectController::class, 'sprqsts']);
Route::get('/lprqsts',[ProjectController::class, 'lprqsts']);
Route::get('/iprqsts',[ProjectController::class, 'iprqsts']);
Route::get('/sspro/{id}',[ProjectController::class, 'sspro'])->name('sspro');
Route::get('/ispro/{id}',[ProjectController::class, 'ispro'])->name('ispro');
Route::get('/lspro/{id}',[ProjectController::class, 'lspro'])->name('lspro');

Route::get('/racpt/{id}',[ProjectController::class,'racpt'])->name('racpt');
Route::get('/rdcln/{id}',[ProjectController::class,'rdcln'])->name('rdcln');

Route::get('/racpts/{id}',[ProjectController::class,'racpts'])->name('racpts');
Route::get('/rdclns/{id}',[ProjectController::class,'rdclns'])->name('rdclns');

Route::get('/racpti/{id}',[ProjectController::class,'racpti'])->name('racpti');
Route::get('/rdclni/{id}',[ProjectController::class,'rdclni'])->name('rdclni');

Route::get('/create1',[StudentprojectController::class,'create']);

Route::post('/st',[StudentprojectController::class,'store1']);


Route::post('/split',[DescriptionController::class,'split']);

Route::post('/keywords',[DescriptionController::class,'keywords']);

Route::post('/collection',[DescriptionController::class,'index']);

//Route::post('/sto',[DescriptionController::class,'store']);

Route::get('/join',[DescriptionController::class,'join']);
Route::get('/receive',[DescriptionController::class,'receive']);
Route::get('/sql',[StudentprojectController::class,'sql']);

Route::get('/remove',[StudentprojectController::class,'remove']);

Route::post('/check',[StudentprojectController::class,'check']);

Route::get('/createL',[AcademicprojectController::class,'create']);
Route::post('/sto',[AcademicprojectController::class,'store1']);

Route::post('/stor',[IndustrialistprojectController::class,'stor']);

Route::get('/shstu/{id}',[UserController::class,'shstu'])->name('shstu');
Route::get('/shstu2/{id}',[UserController::class,'shstu2'])->name('shstu2');
Route::get('/shlec/{id}',[UserController::class,'shlec'])->name('shlec');
Route::get('/shind/{id}',[UserController::class,'shind'])->name('shind');
Route::post('sreq',[UserController::class,'streq'])->name('sreq');
Route::post('lreq',[UserController::class,'lereq'])->name('lreq');
Route::post('ireq',[UserController::class,'inreq'])->name('ireq');
/*Route::get('Admin/Admin',function(){
    $data=App\user::all();
    return view('Admin/Admin')->with('table_data',$data);
});*/
Route::get('/abcd',[UpdateProfiles::class,'abcd'])->name('abcd');
Route::post('post',[UpdateProfiles::class,'store'])->name('post');



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/


/*Route::get('Admin/Admin',function(){
    $data=App\user::all();
    return view('Admin/Admin')->with('table_data',$data);
});*/




/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/