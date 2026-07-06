<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    function welcome()
    {
        return view('welcome');
    }
}
