<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function __construct () {
        $this->middleware('auth')->only('dashboard');
    }
    public function homepage () {
        return view ('welcome');
    }
    public function dashboard (){
        //!Query al database
        $consoles = Console::where('user_id', Auth::user()->id)->get();
        //! Gli oggetti dello user id prendili e compact nella dashboard
        return view ('dashboard',compact('consoles'));
    }
    public function cmfvt (){
        return view ('cmfvt');
    }
}
