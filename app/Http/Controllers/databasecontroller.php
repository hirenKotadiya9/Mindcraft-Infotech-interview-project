<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class databasecontroller extends Controller
{
    public function index(){
        return view('form'); 
    }
}
