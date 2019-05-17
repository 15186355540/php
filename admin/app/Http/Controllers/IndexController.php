<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $a = [
		'name'=>"张三",
		'age'=>18,
		'sex'=>"男"
		];
		return $a;
    }
}
