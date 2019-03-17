<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();

class LogoutController extends Controller
{
    public function LogOut(){
        Session::flush();
        return redirect()->route('login');
    }
}
