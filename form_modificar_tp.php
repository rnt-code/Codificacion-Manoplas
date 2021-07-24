<?php
    include("conexion.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM tipo_prueba WHERE id_tp = $id";
    $res = mysqli_query($conexion, $sql);
    $vec = mysqli_fetch_row($res);
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

        <title>Modificar</title>
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
                    <h5>Modificar Tipo de Prueba</h5>
                </header>
            </section>
            <hr>
            <div class="botones">
                <div class="p-2 bd-highlight">
                    <button class="btn btn-outline-warning btn-sm" type="button" onclick="location.href='menu_configuracion.html'">Menú Configuración</button>
                    <td><button class="btn btn-outline-primary btn-sm" type="button" onclick="location.href='form_alta_tp.html'">Agregar prueba</button></td>
                    <td><button class="btn btn-outline-secondary btn-sm" onclick="location.href='listar_tp.php'" role="button">Ver lista de pruebas</button></td>
                </div>              
            </div>
            <hr>
            <section>
            <header>
                <h5 hidden>Modificar prueba</h5>
            </header>
                <form method="post" action="procesar_modificar_tp.php">
                    <div class="desplazar-tabla">
                        <table>
                            <tr>
                                <td><label for="idtp">ID: </label></td>
                                <td><input class="readonly" type="text" name="idtp" id="idtp" value="<?php echo $id;?>" readonly></td>
                            </tr>
                            <tr>
                                <td><label for="tpcodigo">Código:</label></td>
                                <td><input type="text" name="tpcodigo" id="tpcodigo" value="<?php echo $vec[1];?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="tpnombre">Tipo de prueba:</label></td>
                                <td><input type="text" name="tpnombre" id="tpnombre" value="<?php echo $vec[2];?>"required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Gardar"></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </section>
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