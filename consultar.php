<?php 
	require 'conexion/pdo.php';
	//Consulta de los estudiantes
    $estudiantesPorPagina = 8;
    $numeroPagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

    // Calculo valor inicial
    $primerRegistro = ($numeroPagina>1) ? ($numeroPagina * $estudiantesPorPagina - $estudiantesPorPagina) : 0;
    $sql = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM estudiantes LIMIT $primerRegistro, $estudiantesPorPagina");
    $sql->execute();

    $totalEstudiantes = $pdo->prepare("SELECT count(1) FROM estudiantes");
    $totalEstudiantes->execute();
    $totalEstudiantes = $totalEstudiantes->fetchColumn();//Devuelve el resultado como número
    
    $totalPaginas = ceil($totalEstudiantes/$estudiantesPorPagina);
    require 'view/consultar_view.php';
?>