<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcmeController extends Controller
{
    public function index(){
        return view('index');
    }
}
