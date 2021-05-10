<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $cats = Cat::all();
        return view('home', compact('cats'));
    }
}
