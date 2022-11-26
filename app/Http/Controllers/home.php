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
}
