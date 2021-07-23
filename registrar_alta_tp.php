<?php

$tpcod = $_POST["tpcodigo"];
$tpnom = $_POST["tpnombre"];

$sql = "INSERT INTO tipo_prueba (tp_codigo, tp_nombre) VALUES ('$tpcod', '$tpnom')";
//echo"<br>Consulta: ".$sql;

include("conexion.php");

$res = mysqli_query($conexion, $sql);

?>