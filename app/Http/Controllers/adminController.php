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
    public function editUser($id)
    {
        $data =  userInfo::findorFail($id);
        //dd($data);
        return view('admin.editUser', compact('data'));
    }
    public function saveUser(Request $req)
    {
        $data = new userInfo();
        $data::create($req->all());
        return redirect()->back()->with('success', 'success');
    }
    public function saveeditUser(Request $req, $id)
    {
        $data = userInfo::find($id);
        $data->address = $req->address;
        $data->age = $req->age;
        $data->contact = $req->contact;
        $data->update();
        return redirect()->back()->with('success', 'update success');
    }
    public function deleteUser($id)
    {
        $data = userInfo::find($id);
        $data->delete();
        return redirect('admin/addUser')->with('success', 'delete success');
    }
}
