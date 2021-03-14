<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

//use DB;

class HelloController extends Controller
{
    public function about(){

        return view('about');
    
    }
    public function services(){


        // model = singular
        // Service

        // Table = plular
        // services

//        $services = [
//            "Service 1",            
//            "Service 2",
//            "Service 3",
//            "Service 4",
//        ];
//        $services = Service::all();
//        $services = DB::select('select name from services');
        $services = \App\Models\Service::all();

//        dd($services);

        return view('services', compact('services'));
    
    }

}
