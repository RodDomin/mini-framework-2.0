<?php

include __DIR__ . '/database.php';
include __DIR__ . '/general.php';

define('ENV', 'development');

function dd($var) {
    var_dump($var);
    die;
}

function relative_url(string $path) {
    $actual_link = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0];

    return $actual_link . $path;
}

function url(string $path) {
    return WEB_HOST . $path;
}