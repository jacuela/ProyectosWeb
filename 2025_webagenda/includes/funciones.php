<?php

require_once(__DIR__."/../bbdd/config.php");

//Esta funcion conecta con la BBDD y me devuelve el PDO
function conectaDb()
{
    global $cfg;

    try {
        //Conecto a una bbdd concreta
        $dsn = 'mysql:dbname=agenda;host=127.0.0.1;port=3307;charset=utf8mb4';
        $usuario = 'root';
        $contraseña = '';

        $tmp = new PDO("mysql:dbname=$cfg[mysqlDatabase];host=$cfg[mysqlHost];port=$cfg[port];charset=utf8mb4",
                                                          $cfg["mysqlUser"],    
                                                          $cfg["mysqlPassword"]);
        echo "EXITO en la conexión indicand la bbdd. <br>";

    } catch (PDOException $e) {
        //Conecto pero sin escoger la bbdd. Por ejemplo, si voy a crearla
         echo "Fallo primera conexion. No encuentro la base de datos $cfg[mysqlDatabase] <br>";  
         $tmp = new PDO("mysql:host=$cfg[mysqlHost];port=$cfg[port];charset=utf8mb4", 
                                                     $cfg["mysqlUser"], 
                                                     $cfg["mysqlPassword"]);
    } catch (PDOException $e) {
        print "    <p>Error: No puede conectarse con la base de datos. {$e->getMessage()}</p>\n";
        return null;
        //exit;
    } finally {
        $tmp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return $tmp;
    }
}


function conectaDb2()
{
    // global $cfg;
    //$dsn = "mysql:dbname=$cfg[mysqlDatabase];host=127.0.0.1;port=$cfg[port];charset=utf8mb4";  //esta SI chequea el puerto

    $dsn = 'mysql:dbname=agenda;host=127.0.0.1;port=3306;charset=utf8mb4';
    $usuario = "root";
    $contraseña = "";


    try {
        $gbd = new PDO($dsn, $usuario, $contraseña);
        echo "EXITO en la conexión. <br>";
        return $gbd;
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage().'\n';
        return null;
    }

}
