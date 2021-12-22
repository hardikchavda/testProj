<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function home()
    {
        $name = "Hardik Chavda";
        $address = "Rajkot";
        return view("home")
            ->withData($name)
            ->withAddress($address);
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
