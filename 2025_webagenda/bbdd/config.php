<?php

// CONSTANTES DEFINIDAS
define("MYSQL", 1);                         // Base de datos MySQL

// Base de datos utilizada por la aplicación
$cfg["dbMotor"] = MYSQL;                                   // Valores posibles: MYSQL o SQLITE

// Configuración para MySQL
$cfg["mysqlHost"]     = "localhost";    //127.0.0.1 para chequear puerto
$cfg["port"] = "3306";                        // Puerto
$cfg["mysqlUser"]     = "root";           // Nombre de usuario
$cfg["mysqlPassword"] = "";                                 // Contraseña de usuario
$cfg["mysqlDatabase"] = "agenda";           // Nombre de la base de datos
$cfg["nombretabla"] = "contactos";       //Tabla usado en el CRUD


