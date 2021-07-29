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
        <script src="js/invgenerador.js"></script>
        <script src="js/version.js"></script>


        <title>BSIP E. Nº UOA1391</title>
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
            </section>
            <hr>
            <div class="botones">
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <!--
                        <button class="btn btn-primary" type="button" onclick="location.href='directa.php'">Calculadora directa</button>-->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button" >Calculadora directa</button>
                    </div>
                    <div class="p-2 bd-highlight">
                        <!--
                        <button class="btn btn-primary" type="button" onclick="location.href='inversa.html'">Calculadora inversa</button>-->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" type="button">Calculadora inversa</button>
                    </div>
                    <div class="ms-auto p-2 bd-highlight">
                        <button class="btn btn-outline-light btn-sm" type="button" onclick="location.href='ingreso_configuracion.php'">Configuración</button>
                    </div>
                </div>
            </div>
            <hr>
            <section>
                <header>
                    <h5 hidden>Referencia rápida</h5>
                </header>
                <img class="spec" src="image/quickreference2.jpg" alt="quick reference">
            </section>
            <section>
                <!--modal calc directa-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Calculadora Directa</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--Formulario de la calculadora directa-->
                            <form class="formulario">
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="dtipodeprueba" class="form-label">TIPO DE PRUEBA: </label>
                                            <select class="form-select" name="dtipodeprueba" id="dtipodeprueba">
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
                                            <label for="dmarcakit" class="form-label">MARCA DEL KIT: </label>
                                            <select class="form-select" name="dmarcakit" id="dmarcakit">
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
                                    <label for="dtecnologia" class="form-label">TECNOLOGIA: </label>
                                    <select class="form-select" name="dtecnologia" id="dtecnologia">
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
                                    <input class="form-check-input" type="checkbox" id="dcapacidad1" name="dcapacidad1">
                                    <label class="form-check-label" for="dcapacidad1"> 9k</label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" id="dcapacidad2" name="dcapacidad2">
                                    <label class="form-check-label" for="dcapacidad2"> 12k</label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" id="dcapacidad3" name="dcapacidad3">
                                    <label class="form-check-label" for="dcapacidad3"> 18k</label>
                                    <br>
                                    <input class="form-check-input" type="checkbox" id="dcapacidad4" name="dcapacidad4">
                                    <label class="form-check-label" for="dcapacidad4"> 24k</label>
                                    <br>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="ddestino" class="form-label">DESTINO: </label>
                                            <select class="form-select" name="ddestino" id="ddestino">
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
                                                <label for="dfuncion" class="form-label">FUNCION: </label>
                                                <select class="form-select" name="dfuncion" id="dfuncion">
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
                            <!--Fin formulario de la calculadora-->
                            <!--Botones-->
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
                                        <button type="button" class="btn btn-secondary btn-sm" id="borrar">Borrar</button>
                                    </div>
                                </form>
                            </section>
                            <!--Fin Botones-->  
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                      </div>
                    </div>
                </div>
                <!--Fin modal-->
            </section>
            <section>
                <!--modal calc inversa-->
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Calculadora Inversa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <!--Botones-->
                        <form class="formulario">
                            <label>INGRESAR CODIGO: </label>
                            <div class="mb-3">
                                <input class="form-control" type="text" id="icodigo"><br>
                                <button type="button" class="btn btn-primary" id="icodigo">Leer código</button>
                                <button type="button" class="btn btn-secondary btn-sm" id="iborrar">Borrar</button>
                            </div>
                        </form>
                        <!--Fin botones-->
                        <p></p>
                        <!--Formulario de la calculadora inversa-->
                        <form class="formulario">               
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="itipodeprueba" class="form-label">TIPO DE PRUEBA: </label>
                                        <input class="form-control" type="text" id="itipodeprueba" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="imarcadekit" class="form-label">MARCA DEL KIT: </label>
                                        <input class="form-control" type="text" id="imarcadekit" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="itecnologia" class="form-label">TECNOLOGIA: </label>
                                <input class="form-control" type="text" id="itecnologia" readonly="readonly">
                            </div>
                            <div class="mb-3">
                                <label for="itecnologia" class="form-label">CAPACIDADES: </label>
                                <input class="form-control" type="text" id="icapacidades" readonly="readonly">
                            </div>
                            <div class="row g-2">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label for="idestino" class="form-label">DESTINO: </label>
                                        <input class="form-control" type="text" id="idestino" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-md">  
                                    <div class="mb-3">
                                        <div>
                                            <label for="ifuncion" class="form-label">FUNCION: </label>
                                            <input class="form-control" type="text" id="ifuncion" readonly="readonly">
                                        </div>
                                    </div>
                                </div>   
                            </div>  
                        </form>
                        <!--Fin formulario de la calculadora-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                        </div>
                    </div>
                </div>                                    
                <!--Fin modal-->
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