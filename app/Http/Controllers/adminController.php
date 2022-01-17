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
        $data = userInfo::all();
        return view('admin.addUser', compact('data'));
    }
    public function saveUser(Request $req)
    {
        $data = new userInfo();
        $data::create($req->all());
        return redirect()->back()->with('success', 'success');
    }
}
