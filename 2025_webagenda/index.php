<?php
    
    require_once("funciones.php");

    $pdo = conectaDb();
    $consulta = "SELECT * FROM $cfg[nombretabla]";

    $resultado = $pdo->query($consulta);

    print("<pre>");
    print_r("Filas obtenidas:".$resultado->rowCount());
    print("</pre>");

    $datos=$resultado->fetchAll();
    print("<pre>");
    print_r($datos);
    print("</pre>");
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


       

</body>
</html>