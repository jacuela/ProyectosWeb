<?php
    
    require_once("./includes/funciones.php");

    $pdo = conectaDb();
    $consulta = "SELECT * FROM $cfg[nombretabla]";

    $resultado = $pdo->query($consulta);

    // print("<pre>");
    // print_r("Filas obtenidas:".$resultado->rowCount());
    // print("</pre>");

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
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
<?php
        $pdo = conectaDb();
        $consulta = "SELECT * FROM $cfg[nombretabla]";

        $resultado = $pdo->query($consulta);
        if (!$resultado) {
            print "    <p class='error'>Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        } else {
            print "    <p>Listado completo de registros:</p>\n";
            print "\n";
            print "    <table class=\"conborde franjas\">\n";
            print "      <thead>\n";
            print "        <tr>\n";
            print "          <th>ID</th>\n";
            print "          <th>Nombre</th>\n";
            print "          <th>Apellidos</th>\n";
            print "          <th>Email</th>\n";
            print "          <th>Fecha Nacimiento</th>\n";
            print "        </tr>\n";
            print "      </thead>\n";
            foreach ($resultado as $registro) {
                print "      <tr>\n";
                print "        <td>$registro[id]</td>\n";
                print "        <td>$registro[nombre]</td>\n";
                print "        <td>$registro[apellidos]</td>\n";
                print "        <td>$registro[email]</td>\n";
                print "        <td>$registro[fecha_nac]</td>\n";
                print "      </tr>\n";
            }
            print "    </table>\n";
        }

        ?>


       

</body>
</html>