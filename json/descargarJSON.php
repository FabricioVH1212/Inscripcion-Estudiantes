<?php
	require '../conexion/pdo.php';
	header('Content-disposition: attachment; filename=estudiantes.json; charset=utf8');//Para que sea un archivo descargable
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
			//El JSON_UNESCAPED_UNICODE se usa para descargarlo y que se muestre tildes
			echo json_encode($arregloPrincipal,JSON_UNESCAPED_UNICODE);

			/*Archivo JSON con datos de la base de datos*/
?>