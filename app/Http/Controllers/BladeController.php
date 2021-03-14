<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        return view('page.home', ['name' => 'arip']);
    }
    
    public function contact()
    {
        return view('page.contact');
    }

    public function about()
    {
        return view('page.about');
    }
}
