<?php
session_start();
if(!isset($_SESSION["verified_user"])) {
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
        <link rel="stylesheet" href="css/alta.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/version.js"></script>
        <title>Ingreso</title>
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
                    <h5>Ingreso Configuración</h5>
                </header>
            </section>
            <hr>
            <section>
                <header>
                    <h5 hidden>Ingreso Configuración</h5>
                </header>
                <form method="post" action="startsession.php">
                    <div class="desplazar-tabla">
                        <table>
                            <tr>
                                <td><label for="nombreusuario">Usuario:</label></td>
                                <td><input type="text" name="nombreusuario" id="nombreusuario" required></td>
                            </tr>
                            <tr>
                                <td><label for="passusuario">Contraseña:</label></td>
                                <td><input type="password" name="passusuario" id="passusuario" required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Enviar"></td>
                            </tr>
                        </table>
                    </div>
                </form>
                <p></p>
            </section>
            <hr>
            <section>
            <header>
                <h5 hidden>Usuario equivocado</h5>
            </header>
                <?php
                if(isset($_GET["error_id"])) {
                    $error = $_GET["error_id"];
                    if($error == "user_credential_fail") {
                        ?>
                        <div style="margin-left: 37px;">
                        <p>¡Usuario no registrado!</p>
                        </div>
                        <?php
                    }
                }
                ?>
            </section>
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
	header("Location: menu_configuracion.php");
}
?>