<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\userInfo;

class homecontroller extends Controller
{
    function home()
    {
        // Simple Way for CRUD

        // $dataTable  = DB::select('select * from user_info');
        // DB::insert('insert into user_info (address, age,contact) values("Surat",20,"5656566")');

        // $dataTable  = DB::table('user_info')
        //     ->where('address', 'Surat')
        //     //->get()
        //     ->first();
        //dd($dataTable);

        $dataTable = userInfo::all();
        dd($dataTable);

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
        return view("home", compact('data', 'data1', 'script', 'users', 'dataTable'));
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
