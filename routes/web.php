<?php

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('notes', function () {
    return view('My first note.');
});*/

Route::get('create',function(){
	return '[Create notes]';
});

Route::get('notes/{note}',function($note){
	return $note;
})->where('note','[0-9]+');