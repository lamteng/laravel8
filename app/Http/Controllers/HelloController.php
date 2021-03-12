<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        $coolString = "Hello from Routes AGAIN.";

        return view('subviews.hello', 
         
            compact('coolString') 
        
        );
    
    }
}
