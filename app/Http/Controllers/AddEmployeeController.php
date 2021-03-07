<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;
use Illuminate\Support\Facades\DB;
class AddEmployeeController extends Controller
{

    function showEmployee(){
        $data = Employee::all();
        return view ('employeelist' , ['employees' => $data]);
    }

    function deleteEmployee($ID){
        $data = Employee::find($ID);
        $data -> delete();
        return redirect('employeelist');

    }

    function addEmployee(Request $req){
        $employee = new Employee;
        $employee -> name = $req -> name; 
        $employee -> email = $req -> email; 
        $employee -> address = $req -> address; 
        $employee -> save();
        return redirect('employeeform');
    }


    function showEmployeeToEdit($ID){
        $data = Employee::find($ID);
        return view ('employeeeditform', ['data' => $data]);

    }

    function updateData(Request $req){
        $data = Employee::find($req -> id);
        $data -> name = $req -> name; 
        $data -> email = $req -> email; 
        $data -> address = $req -> address; 
        $data -> save();
        return redirect('employeelist');
    }
    
    function showEmployeeInAPI($id=null){
        return $id?Employee::find($id):Employee::all();
    }

    function addEmployeeInAPI(Request $req){
        $employee = new Employee;
        $employee -> name = $req -> name; 
        $employee -> email = $req -> email; 
        $employee -> address = $req -> address; 
        $result = $employee -> save();
        
        if($result){
            return ["result" => "Data Saved"];
        }else{
            return ["result" => "Operation Failed"];
        }
    }

    function updateDataInAPI(Request $req){
        $data = Employee::find($req -> id);
        $data -> name = $req -> name; 
        $data -> email = $req -> email; 
        $data -> address = $req -> address; 
        $result = $data -> save();
        
        if($result){
            return ["result" => "Data Updated"];
        }else{
            return ["result" => "Operation Failed"];
        }
    }

    function deleteEmployeeInAPI($id){
        $data = Employee::find($id);
        $result = $data -> delete(); 
        if($result){
            return ["result" => "Data deleted"];
        }else{
            return ["result" => "Operation Failed"];
        }
    }

    function searchInAPI($name){

        return Employee::where("name","like","%".$name."%")->get();
    }

    function validateInAPI(Request $req){
        $rules = array (
            "email" => "required",
            "name" => "required | max:5"
        );
        //Validator class ko object    
        $validator = Validator::make($req -> all(), $rules);

        if($validator -> fails()){
            return $validator -> errors();
        }
        else{
            return ["result" => "Valid"];
            //We can add code to insert validated data.
        }
    }

    function uploadInAPI(Request $req){
         $result = $req -> file('file') -> store('apiDocs');
         return ['result' => $result];
    }


    //Joined two tables employees and salary where salary has foreign key empid
    function salaryOf(){
        return DB::table('employees')->join('salaries','employees.id','=','salaries.empid')->where('employees.name',"Hemanta Sapkota")->get();
    }

    function getName(){
    return DB::table('employees')->join('salaries','employees.id','=','salaries.empid')
    ->where('employees.id',1)
    ->select('employees.name')
    ->get();


    }

}
