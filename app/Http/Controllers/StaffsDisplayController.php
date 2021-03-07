<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;

class StaffsDisplayController extends Controller
{
    function showStaffs (){
        // Pagination ma 5 wata items per page lai
        $data = Staff::paginate(5);
        return view('staffslist',['staffs' => $data]);
    }
    function deleteStaff($ID){
        $data = Staff::find($ID);
        $data -> delete();
        return redirect('staffstable');
    }

    function doOperations(){
        return DB::table('staffs') ->max('id');
    }






}
