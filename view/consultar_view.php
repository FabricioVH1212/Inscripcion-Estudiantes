<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Lista de estudiantes</title>
         <link href="img/UCA.png" rel="icon">
        <link href="img/UCA.png" rel="apple-touch-icon"> 
        <link href="css/consultar.css" rel="stylesheet">  
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
                  <h1>Lista de estudiantes</h1>
                  <div class="float-left">
                        <section class = "paginacion"> 
                            <ul>
                              <li><a href="index.php">&laquo;</a></li>
                            </ul>
                        </section>
                  </div>
                     <table class="table bg-dark table-bordered table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                          <thead>
                              <tr class="text-white">
                                  <th scope="col">C&oacute;digo de estudiante</th>
                                  <th scope="col">Nombre del estudiante</th>
                                  <th scope="col">Tel&eacute;fono</th>
                                  <th scope="col">Correo electr&oacute;nico</th>
                                  <th scope="col">Curso</th>
                              </tr>
                          </thead>
                          <tbody>
                                   <?php
                                      $sql->execute();
                                      foreach($sql as $fila) {  
                                   ?>
                                    <tr class = "text-white">
                                      <td ><?=$fila->IDE_ESTUDIANTE?></td>
                                      <td><?=$fila->DSC_NOMBRE ." ".$fila->DSC_APELLIDOS?></td>
                                      <td><?=$fila->NUM_TELEFONO?></td>
                                      <td ><?=$fila->DSC_CORREO?></td>   
                                      <td><?=$fila->DSC_CURSO?></td>
                                    </tr> 
                                    <?php 
                                    }?>
                        </tbody>
                     </table>
              </div>
              <section class="paginacion">
                      <ul>
                        <!-- Botón flecha derecha -->
                        <?php if($numeroPagina == 1){ ?>
                          <li class="disabled">&laquo</a></li>
                        <?php }else{?>
                          <li class="active"><a href="?pagina=<?= $numeroPagina - 1;?>">&laquo</a></li>
                        <?php } ?>

                        <!-- Botones centrales -->
                        <?php 
                          for ($i=1; $i<= $totalPaginas; $i++) { 
                            if($numeroPagina == $i){
                              echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                            }else{
                              echo "<li><a href='?pagina=$i'>$i</a></li>";
                            }
                          }
                        ?>
                        <!-- Botón flecha izquierda -->
                        <?php if($numeroPagina == $totalPaginas){ ?>
                          <li class="disabled">&raquo</a></li>
                        <?php }else{?>
                          <li class="active"><a href="?pagina=<?= $numeroPagina + 1;?>">&raquo</a></li>
                        <?php } ?>
                      </ul>
              </section>
         </div>
    </body>
</html>