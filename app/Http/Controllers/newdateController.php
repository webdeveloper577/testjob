<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class newdateController extends Controller
{
   public function index(){
	   $texts = App\newdate::inread();
		return view('index', compact('texts'));
   }
}
