<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
    	
    	return view('home');
    }
	
    public function about()
    {
    	$people = ['Gigi!!', 'Jesus', 'Jayson', 'Eliud'];
    	return view('about', compact('people'));
    }
    
    public function services()
    {
    	 
    	return view('services');
    }
    
    public function products()
    {
    
    	return view('products');
    }
    
    public function blog()
    {
    
    	return view('blog');
    }
    
    public function contact()
    {
    
    	return view('contact');
    }
    
    public function whyus()
    {
    
    	return view('whyus');
    }
	
}
