<?php

include __DIR__ . '/database.php';
include __DIR__ . '/general.php';

define('ENV', 'development');

function dd($var) {
    var_dump($var);
    die;
}