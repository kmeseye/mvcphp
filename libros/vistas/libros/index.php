<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>
<?php include "vistas/header.php";?>
    <h1>Libros<h1>
<hr>
<?php

include "navegacion.php";

if (isset($action) && $action != "") {
    include "partials/".$action.".php";
}else{
        include "partials/Listar.php";
    }
?>

</body>
</html>