<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX PRINCIPAL</title>


    <link rel="stylesheet" href="http://127.0.0.1/prueba/src/public/style/dist/css/bootstrap.css">
    <link rel="stylesheet" href="http://127.0.0.1/prueba/src/public/font/css/all.css">

    <script src="http://127.0.0.1/prueba/src/public/style/dist/js/bootstrap.js"></script>
    <script src="http://127.0.0.1/prueba/src/public/font/js/all.js"></script>
</head>

<body>
<?php

($_GET["header"]) ? include_once($_GET["header"]) : null;

include_once($_GET["page"]);

?>

</body>
</html>


