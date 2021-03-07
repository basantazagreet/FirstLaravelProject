<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetWalaController;
use App\Http\Controllers\AddEmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//CRUD operation with API (Checked in Postman)
Route::get("getwala",[GetWalaController::class,'getData']);
Route::get("employeelist/{id?}",[AddEmployeeController::class,'showEmployeeInAPI']);
Route::post("addemployee",[AddEmployeeController::class,'addEmployeeInAPI']);
Route::put("updateemployee",[AddEmployeeController::class, 'updateDataInAPI']);
Route::delete("deleteemployee/{id}",[AddEmployeeController::class,'deleteEmployeeInAPI']);

Route::get("search/{name}",[AddEmployeeController::class,'searchInAPI']);
Route::post("validate",[AddEmployeeController::class,'validateInAPI']);
Route::post("filesubmit",[AddEmployeeController::class,'uploadInAPI']);