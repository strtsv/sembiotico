<?php

namespace App\Http\Controllers;

class MapsController extends Controller
{
    public function index()
    {
    	$contentFoo = "Maps!";
    	return view('maps.doctors',compact($contentFoo));
    }
	
}
