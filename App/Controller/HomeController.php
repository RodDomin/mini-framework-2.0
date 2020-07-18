<?php

namespace App\Controller;
use App\Kernel\Views;

class HomeController
{
    public static function show()
    {
        Views::render('index', ['name' => 'Mini-Framework 2.0']);
    }
}