<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
      
        return view('user.dashboard',compact('get_user_name'));
    }
}
