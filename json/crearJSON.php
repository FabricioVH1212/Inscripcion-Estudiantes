<?php
	require '../conexion/pdo.php';
	header('Content-type: application/json; charset=utf8');
	$sql = $pdo->prepare("SELECT * FROM estudiantes");
	$sql->execute();

	$arregloPrincipal = [];

	while($estudiante = $sql->fetch()){
			$arreglo = [
				'id' => $estudiante->IDE_ESTUDIANTE,
				'nombre' => $estudiante->DSC_NOMBRE,
				'apellidos' => $estudiante->DSC_APELLIDOS,
				'edad' => $estudiante->NUM_EDAD,
				'nota_final' => $estudiante->NUM_NOTA
			];
			//Al arreglo principal , agreguele el arreglo
			array_push($arregloPrincipal,$arreglo);
		}
	//El ,JSON_PRETTY_PRINT es para imprimirlo de arriba pa abajo
		echo json_encode($arregloPrincipal,JSON_PRETTY_PRINT);
		/*Archivo JSON con datos de la base de datos*/
?>