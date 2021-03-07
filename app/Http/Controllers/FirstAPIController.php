<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FirstAPIController extends Controller
{
    function getData(){
        $data = Http::get("https://reqres.in/api/users?page=1");
        return view('ShowDataView',['collection' => $data['data']]);
    }
}
