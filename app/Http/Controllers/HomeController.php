<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cats = Cat::all();
        return view('index', compact('cats'));
    }
}
