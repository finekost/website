<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/bueroplatz-mieten', function () {
    return view('office');
});
