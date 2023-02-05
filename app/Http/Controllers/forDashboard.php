<?php

namespace App\Http\Controllers;
use App\Models\fruit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class forDashboard extends Controller
{
    public function dash()
    {
        return view('dashboard',['list'=>fruit::all()],['SN'=>1]);
    }
    
    public function forEditFruit($id)
    {
        $data = fruit::find($id);
        return view('editFruit',['value'=>$data]);
    }
    public function editFruit(Request $req)
    {
        $req->validate([
            'fruitName' => 'required',
            'price'=>'required',
            'dateOfImport'=>'required',
        ]);
        $updateFruit = fruit::find($req->id);
        $updateFruit->fruitName = $req->fruitName;
        $updateFruit->price= $req->price;
        $updateFruit->dateOfImport = $req->dateOfImport;
        $updateFruit->save();
        return redirect('/dashboard');
    }
    public function trash()
    {
        $data = fruit::onlyTrashed()->get();
        return view('fruit-trash',['list'=>$data],['SN'=>1]);
    }
    public function saveFruit(Request $req)
    {
        $req->validate([
            'fruitName' => 'required',
            'price'=>'required',
           
        ]);
            fruit::create([
                'fruitName'=>  $req->fruitName,
                'price'=>$req->price,
            ]);
            return redirect('/dashboard');
    }
    public function delete($id)
    {
       $deleteFruit = fruit::find($id);
       $deleteFruit->delete();
       return redirect('/dashboard');

    }
    public function restore($id)
    {
       $deleteFruit = fruit::withTrashed()->find($id);
       $deleteFruit->restore();
       return redirect('/dashboard');

    }
    public function forceDelete($id)
    {
       $deleteFruit = fruit::withTrashed()->find($id);
       $deleteFruit->forceDelete();
       return redirect('/trash');

    }
}
