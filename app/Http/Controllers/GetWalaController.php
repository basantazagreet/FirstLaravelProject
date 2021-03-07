<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetWalaController extends Controller
{
    function getData(){
        return ["name" => "Basanta Sapkota" , "email" => "sehwagbasanta@gmail.com"];



    }
}
