<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct () {
        $this->middleware('auth')->only('dashboard');
    }

    public function homepage () {
        return view ('welcome');
    }
    public function dashboard (){
        return view ('dashboard');
    }
}
