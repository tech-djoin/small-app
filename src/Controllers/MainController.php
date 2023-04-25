<?php

namespace TechDjoin\SmallApp\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    protected $title = 'Kategori Mitra';

    public function __construct() {

    }

    public function add($a, $b){
        $info['header'] = $this->title;
        $info['description'] = 'Daftar';
        $info['breadcrumb'] = null;
    	$result = $a + $b;
	    return view('small-app::add', compact('result'), $info);
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
