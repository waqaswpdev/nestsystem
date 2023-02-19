<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ViewDegreeController extends Controller
{
    function index(Request $requset){
        $id = $requset->id;
        
        $degreeinfo = DB::table('degreeinfo')->where('instituteID' , $id)->get();
        //return view('degreeinfo' , compact("degreeinfo"));
        return view('viewdegree' , compact("degreeinfo"));
    
    }
}
