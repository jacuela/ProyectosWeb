<?php
    
    require_once("./includes/funciones.php");

    $pdo = conectaDb2();

    $consulta = "SELECT * FROM contactos";
    $resultado = $pdo->query($consulta);

    //var_dump($pdo);
    //print "<br>";
    //var_dump($resultado);

    //print("<pre>");
    //print_r("Filas obtenidas:".$resultado->rowCount());
    
    //print("</pre>");

    // $datos=$resultado->fetchAll();
    // print("<pre>");
    // print_r($datos);
    // print("</pre>");

    // print($datos[0]['fecha_nac']);
 
    // $date = new DateTime($datos[0]['fecha_nac']);
    // echo $date->format('d-m-Y');

    //  para select -> SELECT DATE_FORMAT(BirthDate, "%d-%m-%Y") FROM Employees;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
<?php
        // $pdo = conectaDb2();
        // $consulta = "SELECT * FROM $cfg[nombretabla]";

        // $resultado = $pdo->query($consulta);
        if (!$resultado) {
            print "    <p class='error'>Error en la consulta. {$pdo->errorInfo()[2]}</p>";
        } else {
            print "    <p>Listado completo de registros:</p>";
            print "    <table class='conborde franjas'>";
            print "      <thead>";
            print "        <tr>";
            print "          <th>ID</th>";
            print "          <th>Nombre</th>";
            print "          <th>Apellidos</th>";
            print "          <th>Email</th>";
            print "          <th>Fecha Nacimiento</th>";
            print "        </tr>";
            print "      </thead>";
            foreach ($resultado as $registro) {
                print "      <tr>";
                print "        <td>$registro[id]</td>";
                print "        <td>$registro[nombre]</td>";
                print "        <td>$registro[apellidos]</td>";
                print "        <td>$registro[email]</td>";
                print "        <td>$registro[fecha_nac]</td>";
                print "      </tr>";
            }
            print "    </table>";
        }

         ?>


       

</body>
</html>