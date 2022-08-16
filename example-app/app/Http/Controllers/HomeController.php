<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    function myself(){
        return " my 1st laravel ";
    }

    function my(){
        return " this , my return";
    }

 function about(){
        return view('about');
    }

    function myabout(){

        $Data=array();
        return view('about',['Datakey'=>$Data]); 
    }
    
}
