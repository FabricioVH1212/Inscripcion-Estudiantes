<!DOCTYPE html>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Estudiantes egresados</title>
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
            .tabla{
                 max-height:500px;
                 overflow:auto;
            }
        </style>
    </head>
    <body style="background: gray;">
        <div class = "container">
            <div class="col-md-6"><img src="img/UCA.png"width="100px"height="100px"></div>
                <div = class = "centrado">
                    <h1>Estudiantes egresados</h1> 
                     <div class="float-left">
                            <section class = "paginacion"> 
                                <ul>
                                  <li><a href="index.php">&laquo;</a></li>
                                </ul>
                            </section>
                      </div>
                      <div class="float-right">
                          <button class = "btn btn-lg btn-warning m-r-5" id="btn_cargar">Cargar datos</button>
                      </div>
                            <div class = "tabla table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                                 <table class="table  bg-dark table-bordered table-hover"id="tabla">
		                              <thead>
		                                  <tr class="text-white">
		                                      <th scope="col">C&oacute;digo de estudiante</th>
		                                      <th scope="col">Nombre del estudiante</th>
		                                      <th scope="col">Edad</th>
		                                      <th scope="col">Nota Final</th>
		                                  </tr>
		                              </thead>
	                              <tbody></tbody>
	                            </table>
                            </div>
                </div>
        </div>
        <script src="js/ajax.js"></script>
    </body>
</html>