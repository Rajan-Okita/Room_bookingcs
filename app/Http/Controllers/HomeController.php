<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userHome(){
        return view('dashboard');
    }

    public function editorHome(){
        return view('adminDashboard');
    }

    public function adminHome(){
        return view('adminDashboard');
    }
}
