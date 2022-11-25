<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class forAuthentication extends Controller
{
    public function dash()
    {
        return view('dashboard');
    }
    public function forSignup()
    {
        return view('signupPage');
    }
    public function forLogin()
    {
        return view('loginPage');
    }
    public function forSaveData(Request $req)
    {
        $req->validate([
            'adminId1' => 'required',
            'password'=>'required',
        ]);
            admin::create([//name of model form database table name error insert into ....
                'adminId'=>  $req->adminId1,
                'password'=>Hash::make($req->password),
            ]);
            return view('dashboard');
    }
    public function forLoginAuthentication(Request $req)
    {
        $req->validate([
            'adminId' => 'required',//it is the name of the form
            'password'=>'required',
        ]);
        if(Auth::attempt($req->only('adminId','password'))){//form name
            // return redirect()->route('dashboard');
            return redirect('/');
        }
        else{
            return back()->with('fail','user not found');
        }
    }
}
