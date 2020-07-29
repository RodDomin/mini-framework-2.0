<?php

namespace App\Utils;

class GetAssetsPath implements IUtils
{
    private static $returnTypes = [
        "img" => "Content-Type: image/jpeg",
        "css" => "Content-type: text/css",
        "js" => "Content-Type: text/javascript",
        "svg" => "Content-type: image/svg+xml"
    ];

    public static function run(array $verbs)
    {
        $type = $verbs['type'];
        $path = $verbs['path'];

        $filePath = __DIR__ . "/../../public/" . $type . "/" . $path;

        if (file_exists($filePath)) {
            header(self::$returnTypes[$type]);
            
            $arr = explode(".", $path);
            
            if ($arr[count($arr) - 1] == 'php' || $arr[count($arr) - 1] == 'css') {
                include $filePath;
                die();
            }
            
            readfile($filePath);
            die();
        } else {
            http_response_code(404);
        }
    }
}