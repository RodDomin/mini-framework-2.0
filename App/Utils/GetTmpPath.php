<?php

namespace App\Utils;

class GetTmpPath implements IUtils {
    public static function run($args) {
        $path = $args['path'];

        $filePath = __DIR__ . "/../../tmp/" . $path;

        if (file_exists($filePath)) {
            header("Content-Type: image/jpeg",);
            readfile($filePath);
            die();
        } else {
            http_response_code(404);
        }
    }
}