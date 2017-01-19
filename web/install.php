<?php
include_once("../app/Config.php");

$host = Config::$mvc_bd_hostname;
$user = Config::$mvc_bd_usuario;
$pass = Config::$mvc_bd_clave;

$conexion = mysqli_connect($host,$user,$pass) or die ("Error de conexión");
if (mysqli_query($conexion,"CREATE DATABASE IF NOT EXISTS alimentos")){
    echo "Base de datos creada correctamente<br>";
}else {
    echo "Fallo al crear la base de datos<br>";
}
mysqli_select_db($conexion,"alimentos");
$tabla_alimentos = "CREATE TABLE `alimentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `energia` decimal(10,2) NOT NULL,
  `proteina` decimal(10,2) NOT NULL,
  `hidratocarbono` decimal(10,2) NOT NULL,
  `fibra` decimal(10,2) NOT NULL,
  `grasatotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";

if (mysqli_query($conexion,$tabla_alimentos)){
    echo "Se ha creado la tabla alimentos<br>";
}else {
    echo "Fallo al crear la tabla alimentos<br>";
}
