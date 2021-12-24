<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function home()
    {
        $name = "Hardik Chavda";
        $address = "Rajkot";
        $script = "<h2>Hello With Tags</h2>";
        $data =  [
            'name' => $name,
            'address' => $address
        ];
        $users = [
            [
                'id' => 1,
                'name' =>  'User1'
            ],
            [
                'id' => 2,
                'name' =>  'User2'
            ]
        ];

        $data1 = "red";
        // return view("home")
        //     ->withData($name)
        //     ->withAddress($address);
        return view("home", compact('data', 'data1', 'script', 'users'));
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
