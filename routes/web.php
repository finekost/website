<?php

Route::get('/', function () {
<<<<<<< HEAD
  return view('home');
});

Route::get('/bueroplatz-mieten', function () {
    return view('office');
=======
    return view('home');
    //return Response::view('home')->header('Cache-Control', 'max-age=2592000, public');
>>>>>>> develop
});
