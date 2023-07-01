<?php

namespace App\Http\Controllers;

//use DB;
use App\Doctor;

class DoctorsController extends Controller
{
    public function index()
    {
    	//$doctors = DB::table('doctors')->get();
    	$doctors = Doctor::all();
    	return view('doctors.list',compact('doctors'));
    }
    
    public function show(Doctor $doctor)
    {	
    	return view('doctors.show',compact('doctor'));
    
    }
	
}
