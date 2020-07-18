<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;

class User extends DataLayer
{
    function __construct()
    {
        parent::__construct(
            'users', [
                'name',
                'email',
                'password'
            ]
        );
    }
}
