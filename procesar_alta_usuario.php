<?php
    $nomusr = $_POST["nombreusuario"];
    $passusr = $_POST["passusuario"];

    include("conuser.php");
    $sql1 = "SELECT * FROM usuario";
    $res1 = mysqli_query($conuser, $sql1);
    
    $cont = 0;
    while($vec = mysqli_fetch_row($res1)) {
        if($vec[1] == $nomusr || $vec[2] == $passusr) {
            $cont++;
        }
    }

    if($cont == 0) {

    $sql2 = "INSERT INTO usuario (user_name, user_pass) VALUES ('$nomusr', '$passusr')";
    //echo"<br>Consulta: ".$sql;

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="icon/runconfig.png">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/alta.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/version.js"></script>

        <title>Registrar</title>
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
                    <h5>Agregar Tipo de Prueba</h5>
                </header>
            </section>
            <hr class="hrcolor">
            <div class="botones">
                <div class="p-2 bd-highlight">
                    <button class="btn btn-outline-warning btn-sm" type="button" onclick="location.href='menu_configuracion.html'">Menú Configuración</button>
                    <td><button class="btn btn-outline-secondary btn-sm" onclick="location.href='listar_tp.php'" role="button">Ver lista de pruebas</button></td>
                </div>              
            </div>
            <hr class="hrcolor">
            <?php
                $res2 = mysqli_query($conuser, $sql2);
                if($res2) {
                    //echo"<br>Agregado exitoso";
                    header("Location: listar_usuario.php");
                }
                else {
                    ?>
                    <div style="margin-left: 37px;">
                    <p>¡Falló el alta!</p>
                    </div>
                    <?php
                }
            ?>
        </main>
        <footer>
            <label class="version"></label>
        </footer>
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
    echo"<br>El usuario y/o contraseña ya existen";
    header("Refresh: 4, url=form_alta_usuario.html");
}
?>