<?php
    include("conuser.php");

    $nomus = $_POST["nombreusuario"];
    $passus = $_POST["passusuario"];

    $sql = "SELECT * FROM usuario WHERE user_name = '$nomus' AND user_pass = '$passus'";
    echo "<br>".$sql;
    $res = mysqli_query($conuser, $sql);
    $row = mysqli_fetch_row($res);

    if($row > 0) {
        session_start();
        $_SESSION["verified_user"] = "OK";
        header("Location: menu_configuracion.php");
    }
    else {
        header("Location: ingreso_configuracion.php?error_id=user_credential_fail");
    }
?>