<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
  function index(){

    $user = auth()->user();
    $userrole = $user->userRole;

    if($userrole == "Admin"){
        return view("home");
    }
  }


}
