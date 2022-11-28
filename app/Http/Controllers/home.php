<?php

namespace App\Http\Controllers;
use App\Models\fruit;

use Illuminate\Http\Request;

class home extends Controller
{
    public function fruitList()
    {
        return view('home',['list'=>fruit::all()],['SN'=>1]);
    }
    public function searchFruit(Request $req)
    {
        $req->validate([
            'searchFruitName' => 'required',
        ]);
        $search = $req -> input('searchFruitName');
        $list = fruit::query()->where('fruitName','LIKE',"%{$search}%")->get();
        return view('home',compact('list'),['SN'=>1]);

    }
}
