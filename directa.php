<?php
include("conexion.php");
$sql1 = "SELECT * FROM tipo_prueba";
$res1 = mysqli_query($conexion, $sql1);

$sql2 = "SELECT * FROM marca_kit";
$res2 = mysqli_query($conexion, $sql2);

$sql3 = "SELECT * FROM tecnologia";
$res3 = mysqli_query($conexion, $sql3);

$sql5 = "SELECT * FROM destino";
$res5 = mysqli_query($conexion, $sql5);

$sql6 = "SELECT * FROM funcion";
$res6 = mysqli_query($conexion, $sql6);

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="icon/favicon.png">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/dirgenerador.js"></script>
        <script src="js/version.js"></script>
        <title>Calculadora directa</title>
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
                    <h5>Especificación BSIP E.UOA1391</h5>
                </header>
                <hr>
            </section>
            <section>
                <header>
                    <h5 hidden>Formulario</h5>
                </header>
                <form class="formulario">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="tipodeprueba" class="form-label">TIPO DE PRUEBA: </label>
                                <select class="form-select" name="tipodeprueba" id="tipodeprueba">
                                <?php
                                while($vec1 = mysqli_fetch_row($res1)) {
                                    ?>
                                    <option value="<?php echo $vec1[1];?>"><?php echo $vec1[2];?></option>
                                    <?php
                                }
                                ?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="marcakit" class="form-label">MARCA DEL KIT: </label>
                                <select class="form-select" name="marcakit" id="marcakit">
                                <?php
                                while($vec2 = mysqli_fetch_row($res2)) {
                                    ?>
                                    <option value="<?php echo $vec2[1];?>"><?php echo $vec2[2];?></option>
                                    <?php
                                }
                                ?> 
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tecnologia" class="form-label">TECNOLOGIA: </label>
                        <select class="form-select" name="tecnologia" id="tecnologia">
                        <?php
                        while($vec3 = mysqli_fetch_row($res3)) {
                            ?>
                            <option value="<?php echo $vec3[1];?>"><?php echo $vec3[2];?></option>
                            <?php
                        }
                        ?> 
                        </select>
                    </div>
                    <label>CAPACIDADES: </label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="capacidad1" name="capacidad1">
                        <label class="form-check-label" for="capacidad1"> 9k</label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="capacidad2" name="capacidad2">
                        <label class="form-check-label" for="capacidad2"> 12k</label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="capacidad3" name="capacidad3">
                        <label class="form-check-label" for="capacidad3"> 18k</label>
                        <br>
                        <input class="form-check-input" type="checkbox" id="capacidad4" name="capacidad4">
                        <label class="form-check-label" for="capacidad4"> 24k</label>
                        <br>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="destino" class="form-label">DESTINO: </label>
                                <select class="form-select" name="destino" id="destino">
                                <?php
                                while($vec5 = mysqli_fetch_row($res5)) {
                                    ?>
                                    <option value="<?php echo $vec5[1];?>"><?php echo $vec5[2];?></option>
                                    <?php
                                }
                                ?>     
                                </select>
                            </div>
                        </div>
                        <div class="col-md">  
                            <div class="mb-3">
                                <div>
                                    <label for="funcion" class="form-label">FUNCION: </label>
                                    <select class="form-select" name="funcion" id="funcion">
                                    <?php
                                    while($vec6 = mysqli_fetch_row($res6)) {
                                        ?>
                                        <option value="<?php echo $vec6[1];?>"><?php echo $vec6[2];?></option>
                                        <?php
                                    }
                                    ?>    
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>  
                </form>
                <p></p>
            </section>
            <section>
                <header>
                    <h5 hidden>Código</h5>
                </header>
                <form class="formulario">
                    <label>CODIGO calculado: </label>
                    <div class="mb-3">
                        <input class="form-control" type="text" id="codigo" readonly="readonly">
                        <p></p>
                        <button type="button" class="btn btn-primary" id="generar">Generar código</button>
                        <button type="button" class="btn btn-secondary" id="borrar">Borrar</button>
                    </div>
                </form>
            </section>
            <p></p>
            <p class="backhome"><a class="btn btn-outline-primary btn-sm" href="index.html" role="button">Menú principal</a></p>
            <a href=""></a>
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


<!--

<option class="opcion" selected>Seleccionar</option>
<option value="F">Funcional</option>
<option value="S">Seguridad Eléctrica</option>

<option class="opcion" selected>Seleccionar</option>
<option value="HS">Hisense</option>
<option value="MD">Midea</option>
<option value="AX">Aux</option>
<option value="SM">Samsung</option>

<option class="opcion" selected>Seleccionar</option>
<option value="IV">Inverter</option>
<option value="ON">On/Off</option>

<option class="opcion" selected>Seleccionar</option>
<option value="FS">p/ Frío solo</option>
<option value="FC">p/Frío-Calor</option>
<option value="AM">Ambos</option>

<option class="opcion" selected>Seleccionar</option>
<option value="UE">Unidad Exterior</option>
<option value="UI">Unidad Interior</option>

-->