<?php

//creates form for input
Route::get('/', function()
{
	return View::make('bcform');
});


//posts paragraphs based on form results
Route::post('/p3', function()
{
	$data = Input::all();
	return View::make('bctext',$data);
});
