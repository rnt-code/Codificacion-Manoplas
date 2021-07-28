<?php
session_start();
if(isset($_SESSION["verified_user"])) {
?>
<?php
    $id = $_GET["id"];
    //echo"<br>ID=".$id;

    $sql = "DELETE FROM capacidad WHERE id_cap = $id;";
    //echo"<br>Consulta=".$sql;

    include("conexion.php");
    $res = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="icon/runconfig.png">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/version.js"></script>
        <title>Eliminación</title>
    </head>
    <body>
        <header id="header">
            <img class="header-img" src="image/BGH_logo_transparente_25.png" alt="Logo BGH">
            <label class="titulo-baner">LABORATORIO UOA</label>
        </header>
        <main>
            <header>
                <h1 class="titulo">Codificación de Manoplas</h1>
            </header>
            <section>
                <header class="subtitulo">
                    <h5>Eliminación</h5>
                </header>
            </section>
            <hr class="hrcolor">
            <div class="botones">
                <div class="p-2 bd-highlight">
                    <button class="btn btn-outline-warning btn-sm" type="button" onclick="location.href='menu_configuracion.php'">Menú Configuración</button>
                    <td><button class="btn btn-outline-primary btn-sm" type="button" onclick="location.href='form_alta_cap.php'">Agregar capacidad</button></td>
                </div>
            </div>
            <hr class="hrcolor">
            <?php
                if($res) {
                    //echo"<br>Eliminación exitosa";
                    header("Refresh: 0; url=listar_cap.php");
                }
                else {
                    ?>
                    <div style="margin-left: 37px;">
                    <p>¡Falló la eliminación!</p>
                    </div>
                    <?php
                }
            ?>
        </main>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->
    </body>
</html>
<?php
}
else {
	header("Location: ingreso_configuracion.php?error_id=user_credential_fail");
}
?>