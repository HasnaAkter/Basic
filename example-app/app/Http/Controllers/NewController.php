<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    function home(){

        $Data=array("bd","india","canada","america");
        $LoginStatus = true;
        return view('home',['Datakey'=>$Data,'LoginStatusKey'=>$LoginStatus]); 
    }
}
