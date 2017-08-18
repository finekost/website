<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    public function home()
    {
        $imgs = [
        'chris-greenhow-230148.jpg',
        'chris-greenhow-239689.jpg',
        'chris-greenhow-338865.jpg',
        'meduana-6917.jpg',
        'nick-scheerbart-15636.jpg',
        'robert-katzki-167994.jpg',
      ];

        $bgImage = $imgs[array_rand($imgs)];

        return view('home', ['bgImage' => $bgImage]);
    }
}
