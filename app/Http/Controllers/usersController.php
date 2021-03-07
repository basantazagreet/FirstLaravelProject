<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    function sayHello () {
        $data = ['Basanta','Hemanta','Diwas'];
        return view ('hello', ['users' => $data]);
    }
}
