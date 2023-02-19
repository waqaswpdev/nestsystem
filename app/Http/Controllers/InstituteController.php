<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstituteController extends Controller
{
   function index(){
    
    $institutes = DB::table('institutes')->paginate(10);
    return view('institutes' , compact("institutes"));


   } 
   function redirectinst(){
    
    $programs = DB::table('programs')->paginate(10);
    return view('addinstitute' , compact("programs"));


   } 
   function addinstitute(Request $request){
    $submittedname = $request->insname.", ".$request->inscity;

    $programs = DB::table('programs')->get();
    $institutesaddress = DB::table('institutes')->where("instituteName" , $submittedname)->get();
    if(count($institutesaddress) > 0 ){
        $error = "Institute with same address already Exists";
    return view('addinstitute')->with('programs', $programs)->with('error', $error);
    }
    else if(
    DB::table('institutes')->insert(
        array(
               'instituteName'     =>   $submittedname,
               'instituteProvince'     =>   $request->insprovince,
               'instituteCity'     =>   $request->inscity,
               'instituteSlots'     =>  0,
               'programID'     =>   $request->insprogram, 
               'programID2'     =>   0,
               'instituteAddress'     =>   $request->insaddress,
               'instituteSlotsConsumed'   =>   0
        )
   )){
    
    $message = "Institute added Successfull";
    return view('addinstitute')->with('programs', $programs)->with('message', $message);
   }
   else{
    
    $error = "Failed to add Institute";
    return view('addinstitute')->with('programs', $programs)->with('error', $error);
   }
     
    


   }
}
