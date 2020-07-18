<?php
use App\Kernel\Views;

$params = Views::getParams();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hello and welcome to <? echo ($params['name']); ?>
    </h1>
</body>
</html>