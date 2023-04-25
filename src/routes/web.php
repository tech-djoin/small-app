<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'        => config('admin.route.prefix') . '/small-app',
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    Route::get('/', function(){
		echo 'Hello from the my first package!';
	});
	Route::get('/test', function(){
		echo 'Test from the my first package!';
	});
	Route::get('add/{a}/{b}', 'TechDjoin\SmallApp\Controllers\MainController@add');
	Route::get('subtract/{a}/{b}', 'TechDjoin\SmallApp\Controllers\MainController@subtract');
});

