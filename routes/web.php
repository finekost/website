<?php

Route::get('/', function () {
    //return view('home');
    return Response::view('home')->header('Cache-Control', 'max-age=2592000, public');
});
