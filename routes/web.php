<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\user;
use App\Http\Controllers\UpdateProfiles;
use App\Http\Controllers\login;


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



Route::get('/home',[Frontendcontroller::class, 'home']);
Route::get('/in',[Frontendcontroller::class, 'index']);
Route::get('/ob',[Frontendcontroller::class, 'obj']);
Route::get('/ue',[Frontendcontroller::class, 'upe']);
Route::get('/p',[Frontendcontroller::class, 'pr']);
Route::get('/ss',[Frontendcontroller::class, 'sts']);

Route::get('/h1',[Frontendcontroller::class, 'h']);



Route::get('/fp',[Frontendcontroller::class, 'fgp']);
Route::get('/a',[Frontendcontroller::class, 'a']);

//Route::get('/admin',[Frontendcontroller::class, 'admin']);
Route::post('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);
Route::get('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);





Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);

Route::get('/welcome', function () {
    return view('a');
});

Route::get('/urpd',[UserController::class,'index']);
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

/*Route::get('Admin/Admin',function(){
    $data=App\user::all();
    return view('Admin/Admin')->with('table_data',$data);
});*/




/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/