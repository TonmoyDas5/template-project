<?php
use App\Http\controllers\backend\CategoryController;
use App\Http\controllers\backend\BackendController;
use App\Http\controllers\backend\TestController;
use App\Http\controllers\backend\LabtestController;
use App\Http\controllers\backend\DepartmentController;
use Illuminate\Support\Facades\Route;


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

// Route::get('/bitm', function () {
    // return "This is view page";
// });


// Route::get('/',[
//     'uses'=> 'studentcontroller1@index',
//     'as' => '/'
// ]);
// Route::get('/basic/bitm',function(){
//     return 'Hello World';
// })



//Route::get('/', 'StudentController@index')



//Route::get('/home1',[studentcontroller1::class,'index']);



Route::get('/', function(){
   
     return view('backend.main');
 })->name('admin');





Route::get('/master',[BackendController::class,'index']);
Route::get('/control_panel',[BackendController::class,'admin']);

Route::get('/doctor-admin',[TestController::class,'doctor'])->name('doctor');
Route::get('/dashboard-admin',[TestController::class,'dashboard'])->name('dashboard');


Route::get('/studentlist-data',[LabtestController::class,'student'])->name('studentlist.show');
Route::get('/create-form',[LabtestController::class,'create_form'])->name('create.form');
Route::post('/create-submit',[LabtestController::class,'submit'])->name('create.submit');




Route::get('/teacher-list',[LabtestController::class,'show'])->name('teacher.show');
Route::get('/create-from',[LabtestController::class,'createform'])->name('teacher.form');


//departmentcontroller

Route::get('/form-create',[DepartmentController::class,'create']);
Route::post('/department-store',[DepartmentController::class,'store'])->name('store.data');
Route::get('/department-show',[DepartmentController::class,'show'])->name('dpt.show');
Route::get('/institiute-show',[DepartmentController::class,'view'])->name('institiute.show');
Route::get('/institiute-form',[DepartmentController::class,'form'])->name('institiute.form');
Route::get('/class-show',[departmentcontroller::class,'views'])->name('class.show');
Route::get('class-from',[DepartmentController::class,'from'])->name('class.from');










?>



