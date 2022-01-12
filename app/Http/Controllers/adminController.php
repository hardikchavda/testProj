<?php

namespace App\Http\Controllers;

use App\userInfo;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addUser()
    {
        return view('admin.addUser');
    }
    public function saveUser(Request $req)
    {
        $data = new userInfo();
        $data::create($req->all());
    }
}
