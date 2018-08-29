<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newdate extends Model
{
    //
	public static function inread() {
		return static::where('read',0)->get();
	}
}
