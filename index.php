<?php
date_default_timezone_set("America/Costa_Rica");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Principal</title>
        <link href="img/UCA.png" rel="icon">
        <link href="img/UCA.png" rel="apple-touch-icon"> 
        <link rel="stylesheet" href="css/card.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <style>
            .centrado{
                text-align:center;
                margin-top: 25px;
            }
        </style>
    </head>
    <body style="background: gray;">
         <div class="container">
            <div class="col-md-6"><img src="img/UCA.png"width="100px"height="100px"></div>
              <div class="centrado">
                    <h1>Bienvenido(a), por favor escoja una opci&oacute;n</h1>
                    <hr>
                    <marquee>Bienvenido al sistema, seleccione alguna de las dos opciones</marquee>
              </div>
              <div class="container-card">
                    <div class="card"  style="background:#000000;" >
                            <center><img src="img/ingresar.png" style="max-width: 400px; max-height: 200px;"></center>
                        <div class="contenido-card">
                            <h3 class = "text-white">Ingresar un estudiante</h3>
                            <p class = "text-white">Manten actualizado la lista de estudiantes activos de la Universidad.</p>
                            <a href = "ingresar.php" class="btn btn-xl btn-warning m-r-5 text-dark" >Continuar</a> 
                        </div>
                    </div>
                    <div class="card" style="background:#000000;">
                           <center><img src="img/lista.png" style="max-width: 400px; max-height: 200px;"></center>
                        <div class="contenido-card">
                            <h3 class = "text-white">Lista de estudiantes</h3>
                            <p class = "text-white">En este apartado puedes ver la lista de estudiantes actual registrados.</p>
                            <a href="consultar.php" class="btn btn-xl btn-warning m-r-5 text-dark" >Continuar</a>
                        </div>
                    </div>
                    <div class="card" style="background:#000000;">
                           <center><img src="img/json.jpg" style="max-width: 400px; max-height: 200px;"></center>
                        <div class="contenido-card">
                            <h3 class = "text-white">Archivo JSON de estudiantes</h3>
                            <p class = "text-white">En este apartado puedes ver o descargar el archivo JSON de los estudiantes actual registrados.</p>
                            <div class = "row">
                                  <div class = "col-md-6">
                                        <a href="json/crearJSON.php" class="btn btn-warning text-dark" >Ver archivo</a>
                                  </div>
                                  <div class = "col-md-6">
                                        <a href="json/descargarJSON.php" target="_BLANK" class="btn btn-warning text-dark" >Descargar archivo</a>
                                  </div>
                            </div>
                        </div>
                    </div>
                     <div class="card" style="background:#000000;">
                           <center><img src="img/egresados.jpg" style="max-width: 400px; max-height: 200px;"></center>
                        <div class="contenido-card">
                            <h3 class = "text-white">Lista de estudiantes egresados</h3>
                            <p class = "text-white">Aqu&iacute; se encuentra la lista de estudiantes egresados.</p>
                            <a href="estudiante_egresado.php" class="btn btn-xl btn-warning m-r-5 text-dark" >Continuar</a>
                        </div>
                    </div>
                </div> <!-- END CONTAINER CARD -->
                 <br><br><br><br>
                 <div class = "float-right">
                        <h5 ><?=date("d/m/Y h:i A") ?></h5>
                 </div>
        </div>
    </body>
</html>