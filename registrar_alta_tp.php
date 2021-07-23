<?php

$tpcod = $_POST["tpcodigo"];
$tpnom = $_POST["tpnombre"];

$sql = "INSERT INTO tipo_prueba (tp_codigo, tp_nombre) VALUES ('$tpcod', '$tpnom')";
//echo"<br>Consulta: ".$sql;

include("conexion.php");

$res = mysqli_query($conexion, $sql);
if($res) {
    echo"<br>Agregado exitoso";
    header("Refresh: 3; url=listar_tp.php");
}
else {
    echo"<br>Falló la agregación";
    header("Refresh: 3; url=listar_tp.php");
}
?>