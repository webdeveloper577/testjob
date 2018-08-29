<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newdateController extends Model
{
    public function index() {
		$texts = App\newdate::inread();
		return view('index', compact('texts'));
	}
}
