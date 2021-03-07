<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\usersController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\FirstAPIController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\AddEmployeeController;
use App\Http\Controllers\StaffsDisplayController;
use App\Http\Controllers\CustomerController;



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



Route::get('/', function () {
    return view('welcome');
});

// Route::get('user', function () {
//     return view('user');
// });

// Route::get('hello', function () {
//     return view('hello');
// });

Route::get('form', function () {
    return view('form');
});




Route::get("hello",[usersController::class,'sayHello']);

Route::POST("formaction",[FormController::class,'getData']);


//Middleware lai
Route::view('home','home');
Route::view('noaccess','noaccess');
Route::view('user','user') -> middleware('protectpage');


//Database haru
Route::get("url",[DatabaseController::class,'index']);
Route::get("allusers",[UserController::class,'getData']);

Route::get("getall",[FirstAPIController::class,'getData']);



//Session haru
Route::view('loginform','login');
Route::post("userauth",[LoginController::class,'userLogin']);

Route::view('profile','profile');



Route::post('/logout', function () {
    if (session() -> has ('user'))
    {
        session() -> pull('user',null);
    }
    return redirect('loginform');
});

Route::post('/login', function () {
    if (session() -> has ('user'))
    {
        return redirect ('profile');
    }
    return view('loginform');
});

//Flash form
Route::view('flashform','Flashform');
//Flash Form submit
Route::post("flashsubmit",[FlashController::class,'storeM']);


//File Upload form
Route::view('fileuploadform','FileUploadForm');
//File Upload submit controller
Route::post("filesubmit",[FileUploadController::class,'upload']);


//Add data to table (Employee) Form
Route::view('employeeform','EmployeeForm');
//Add Employee Controller
Route::post("addemployee",[AddEmployeeController::class,'addEmployee']);
Route::post("employee",[AddEmployeeController::class,'addEmployee']);
Route::get("employeelist",[AddEmployeeController::class,'showEmployee']);
//Delete Employees
Route::get("deleteemployee/{id}",[AddEmployeeController::class,'deleteEmployee']);
//Edit contents of Employees
Route::get("editemployee/{id}",[AddEmployeeController::class,'showEmployeeToEdit']);
Route::post("updateemployee",[AddEmployeeController::class, 'updateData']);
Route::get("employeeoperations",[AddEmployeeController::class, 'doOperations']);


//Staffs ko pagination garna example
//View ma sidhai data pathacha controller bata
Route::get("staffstable",[StaffsDisplayController::class,'showStaffs']);
Route::get('deletestaff/{id}', [StaffsDisplayController::class,'deleteStaff']);
Route::get("staffsoperations",[StaffsDisplayController::class,'doOperations']);

//Customers display in table from database
Route::get("customerslist",[CustomerController::class,'showCustomers']);
Route::get('deletecustomer/{ID}', [CustomerController::class,'deleteCustomer']);
Route::get("editcustomer/{id}",[CustomerController::class,'showCustomerToEdit']);
Route::post("updatecustomer",[CustomerController::class, 'updateData']);

