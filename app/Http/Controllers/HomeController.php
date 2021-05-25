<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index(){
        $cats = Cat::all();
        return view('index', compact('cats'));
    }

    public function setLang(Request $request){
        App::setLocale($request->get('lang'));
        return redirect(url()->previous());
    }

    public function single(Cat $cat){
        return response()->view('single', compact('cat'));
    }
}
