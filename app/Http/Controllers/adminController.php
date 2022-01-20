<?php

namespace App\Http\Controllers;

use App\Http\Requests\addUser;
use App\User;
use App\userInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
    public function saveUser(addUser $req)
    {
        // $req->validate([
        //         'address' => 'required|min:10',
        //         'age'=>'required|min:2|max:2|numeric',
        //         'contact'=>'required|min:10|numeric'
        // ]);
        //if validate find problem than redirects to default route.
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

    public function login()
    {
        return view('admin.login');
    }
    public function loginUser(Request $req)
    {
        $uname = $req->name;
        $password = $req->password;
        //dd(Auth::attempt(['name' => $uname, 'password' => $password]));
        if (Auth::attempt(['name' => $uname, 'password' => $password])) {
            return redirect()->intended('admin');
        } else {
            return Redirect::to('login');
        }
    }
    public function register()
    {
        return view('admin.register');
    }

    public function saveUserAdmin(Request $req)
    {
        $data = new User();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = bcrypt($req->password);
        $data->save();
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
