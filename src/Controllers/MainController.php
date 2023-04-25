<?php

namespace TechDjoin\SmallApp\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function add($a, $b){
    	$result = $a + $b;
	    return view('small-app::add', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
