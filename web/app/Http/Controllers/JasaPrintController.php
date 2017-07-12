<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JasaPrintController extends Controller
{
    public function index(){
    	return view('page.JasaPrint')
    }
}
