<?php

namespace App\Http\Controllers;
use App\Models\fruit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class forDashboard extends Controller
{
    public function dash()
    {
        return view('dashboard',['list'=>fruit::all()]);
    }
    public function saveFruit(Request $req)
    {
        $req->validate([
            'fruitName' => 'required',
            'price'=>'required',
            'dateOfImport'=>'required',
        ]);
            fruit::create([
                'fruitName'=>  $req->fruitName,
                'price'=>$req->price,
                'dateOfImport'=>$req->dateOfImport,
            ]);
            return redirect('/dashboard');
    }
    public function delete($id)
    {
       $deleteFruit = fruit::find($id);
       $deleteFruit->delete();
       return redirect('/dashboard');

    }
}
