<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
    public function index()
    {
       return "I am index";
    }

   
    public function create()
    {
       return "i am creat";
    }

    public function store(Request $request)
    {

    }

   
    public function show($id)
    {
       return "i am show";
    }

    
    public function edit($id)
    {
      return "i am update";
    }

   
    public function update(Request $request, $id)
    {
      
    }

   
    public function destroy($id)
    {
    }
}
