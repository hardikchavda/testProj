<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function home()
    {
        return view("home");
    }
    function getAllData($name, $rno)
    {
        return "Name is $name and Roll Number is $rno";
    }
    function about()
    {
        return view("about");
    }
}
