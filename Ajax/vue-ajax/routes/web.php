<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('skills', function () {
    return ['Laravel', 'Jquery', 'Ajax', 'Vue'];
});
