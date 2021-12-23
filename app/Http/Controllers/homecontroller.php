<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function home()
    {
        $name = "Hardik Chavda";
        $address = "Rajkot";
        $script = "<H1>hELLO</H1>";
        $data =  [
            'name' => $name,
            'address' => $address
        ];

        $data1 = "red";
        // return view("home")
        //     ->withData($name)
        //     ->withAddress($address);
        return view("home", compact('data', 'data1', 'script'));
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
