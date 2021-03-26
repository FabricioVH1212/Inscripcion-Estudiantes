<?php
    require 'view/ingresar_view.php';
    require 'conexion/pdo.php';

    if(isset($_POST["btn_enviar"])){
        ?>
         <br>
         <div class="centrado">
             <div class="col-md-12"><hr>
        <?php
        $nombre = $_POST["txt_nombre"];
        $apellidos = $_POST["txt_apellidos"];
        $telefono = $_POST["txt_telefono"];
        $correo = $_POST["txt_correo"];
        $edad = $_POST["txt_edad"];
        $curso = $_POST["txt_curso"];
        $nota = $_POST["txt_nota"];
            //validaciones de los nombres
                   if(empty($nombre)){
                                echo ('<div class="alert alert-danger" role="alert">El nombre no debe ser vac&iacute;o</div>');
                                exit();
                    }     
                    if(strlen($nombre) < 3){
                       echo ('<div class="alert alert-danger" role="alert">El nombre no debe ser menos de 3 d&iacute;gitos</div>');
                        exit();                        
                    }
                    if(!empty($nombre)){
                        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); 
                    }
            //validaciones de los apellidos
                    if(empty($apellidos)){
                        echo ('<div class="alert alert-danger" role="alert">Los apellidos no deben estar vac&iacute;os</div>');
                        exit();
                    }     
                    if(strlen($apellidos) < 3){
                        echo ('<div class="alert alert-danger" role="alert">Los apellidos no debe ser menos de 6 d&iacute;gitos</div>');
                        exit();                        
                    } 
                    if(!empty($apellidos)){
                        $apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING); 
                    }  
            //validaciones del numero telefonico
                    if(empty($telefono)){
                        echo ('<div class="alert alert-danger" role="alert">El n&uacute;mero telef&oacute;nico no debe ser vac&iacute;o</div>');
                        exit();
                    }
                    if(!is_numeric($telefono)){
                        echo ('<div class="alert alert-danger" role="alert">El n&uacute;mero telef&oacute;nico no debe tener letras o car&acute;cteres especiales</div>');
                        exit();
                    } 
                    if(strlen($telefono) < 8){
                        echo ('<div class="alert alert-danger" role="alert">El n&uacute;mero de telef&oacute;nico no debe ser menos de 8 digitos</div>');
                        exit();                        
                    }
                    if(!empty($telefono)){
                        $telefono = filter_var($telefono, FILTER_SANITIZE_STRING); 
                    }
            //validaciones del correo electronico
                    if(empty($correo)){
                        echo ('<div class="alert alert-danger" role="alert">El correo electr&oacute;nico no debe ser vac&iacute;o</div>');
                        exit();
                    }                    
                    if(false === filter_var($correo, FILTER_VALIDATE_EMAIL)){
                        echo ('<div class="alert alert-danger" role="alert">Formato de correo electr&oacute;nico incorrecto</div>');
                        exit();
                    }
                    if(!empty($correo)){
                        $correo = filter_var($correo, FILTER_SANITIZE_STRING); 
                    }
            //validaciones de la edad
                    if(empty($edad)){
                        echo ('<div class="alert alert-danger" role="alert">La edad no debe ser vac&iacute;o</div>');
                        exit();
                    }
                    if(!is_numeric($edad)){
                        echo ('<div class="alert alert-danger" role="alert">La edad no debe tener letras o car&acute;cteres especiales</div>');
                        exit();
                    } 
                    if(!empty($edad)){
                        $edad = filter_var($edad, FILTER_SANITIZE_STRING); 
                    }
            //validaciones del curso de interes
                    if(empty($curso)){
                                echo ('<div class="alert alert-danger" role="alert">El nombre del curso no debe estar vac&iacute;o</div>');
                                exit();
                    }     
                    if(strlen($curso) < 3){
                       echo ('<div class="alert alert-danger" role="alert">El nombre del curso no debe ser menos de 3 d&iacute;gitos</div>');
                        exit();                        
                    }
                    if(!empty($curso)){
                        $curso = filter_var($curso, FILTER_SANITIZE_STRING); 
                    }

                    $sql = $pdo->prepare("INSERT INTO estudiantes (IDE_ESTUDIANTE,DSC_NOMBRE,DSC_APELLIDOS, NUM_EDAD,NUM_TELEFONO,DSC_CORREO, DSC_CURSO,NUM_NOTA) VALUES (NULL, '".$nombre."', '".$apellidos."', '".$edad."','".$telefono."','".$correo."', '".$curso."','".$nota."')");
                    if($sql->execute() == true){
                         echo('<h4 class = "alert alert-success text-left" role="alert">Datos enviados correctamente</h4>');
                    ?>
                     <table class="table table-bordered table-success">
                        <thead>
                            <tr>
                                <th scope="col" colspan="3"><?=$nombre." ".$apellidos?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <em>Edad</em><br><?=$edad?>
                            </td>
                            <td>
                                <em>Tel&eacute;fono</em><br><?=$telefono?>
                            </td>
                            <td>
                                <em>Correo electr&oacute;nico</em><br><?=$correo?>
                            </td>  
                             <td>
                                <em>Curso de inter&eacute;s</em><br><?=$curso?><br>
                                <a href = "consultar.php" class = "btn btn-xl btn-primary m-r-5">Ver lista de estudiantes</a>
                            </td> 
                       </tr>
                        </tbody>
                     </table>  
                    <?php
                    }else{
                        echo('<h4 class = "alert alert-danger text-left" role="alert">Hubo un error en el env&iacute;o de datos</h4>');
                    }
                ?>
            </div>
     </div>
     <?php
    }
    ?>
       
  