<?php

Route::prefix('small-app')->group(function () {
    Route::get('/', function(){
		echo 'Hello from the my first package!';
	});
	Route::get('/test', function(){
		echo 'Test from the my first package!';
	});
	Route::get('add/{a}/{b}', 'TechDjoin\SmallApp\Controllers\MainController@add');
	Route::get('subtract/{a}/{b}', 'TechDjoin\SmallApp\Controllers\MainController@subtract');
});

