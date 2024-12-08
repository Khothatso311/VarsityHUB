<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class MainController extends Controller
{

    public function welcome(){

        

        $date =  Carbon::now()->format('Y');
        return view('auth.index', compact('date'));
    }  

    public function show($id){

      
    }


}