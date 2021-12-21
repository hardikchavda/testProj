<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function index()
    {
        return "Hello From Controller";
    }
    function getAllData($name, $rno)
    {
        return "Name is $name and Roll Number is $rno";
    }
}
