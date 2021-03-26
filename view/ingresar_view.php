<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inscripci&oacute;n</title>
         <link href="img/UCA.png" rel="icon">
        <link href="img/UCA.png" rel="apple-touch-icon"> 
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
                <h1>Inscripci&oacute;n de estudiantes</h1>
            </div>
            <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                        <label class="col-form-label col-md-3">Nombre:</label>
                        <input type="text" class="form-control"  name = "txt_nombre"placeholder="Ingrese el nombre">
                      </div>
                      <div class="form-group col-md-6">
                        <label class="col-form-label col-md-3">Apellidos:</label>
                        <input type="text" class="form-control" name = "txt_apellidos" placeholder="Ingrese los apellidos">
                      </div>
                  </div>
                  <div class="form-group">
                        <label class="col-form-label col-md-3">Tel&eacute;fono:</label>
                        <input type="number" class="form-control" name="txt_telefono" placeholder="Ingrese el n&uacute;mero de tel&eacute;fono">
                  </div>
                  <div class="form-group">
                        <label class="col-form-label col-md-3">Correo electr&oacute;nico:</label>
                        <input type="mail" class="form-control" name="txt_correo" placeholder="Ingrese el correo electr&oacute;nico">
                  </div>
                  <div class="form-group">
                        <label class="col-form-label col-md-3">Edad:</label>
                        <input type="number" class="form-control"  name = "txt_edad"placeholder="Ingrese la edad">
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                         <label class="col-form-label col-md-3">Curso Inter&eacute;s:</label>
                         <input type="text" class="form-control" name = "txt_curso" placeholder="Ingrese el curso de su inter&eacute;s">
                      </div>
                      <div class="form-group col-md-6">
                        <label class="col-form-label col-md-3">Nota Final:</label>
                        <input type="number" class="form-control" name = "txt_nota" placeholder="En caso de ser estudiante egresado ingrese la nota">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <div class="float-right">
                          <a href = "index.php" class = "btn btn-xl btn-danger m-r-5">Cancelar</a>
                          <input type="submit" class="btn btn-xl btn-primary m-r-5" name="btn_enviar" value="Procesar">
                      </div>
                  </div>
            </form>
         </div>
    </body>
</html>