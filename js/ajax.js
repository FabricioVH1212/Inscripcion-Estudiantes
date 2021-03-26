//Crear variable que indentifica que hacen click al boton
var btn = document.getElementById('btn_cargar');

btn.addEventListener('click',function(){
	//Instancia de XML para hacer solicitud de apertura archivo
	var solicitud = new XMLHttpRequest();
	//Traer el archivo
	solicitud.open('GET','json/estudiantes.json');

	//Función para cargar los datos
	//Hasta el momento solo nos carga documentos planos y no sirve
	solicitud.onload = function(){
		//Esta función separa los datos y convierte en array
		var datos = JSON.parse(solicitud.responseText);//Transforma en arreglo

		//Prepara una tabla para mostrar datos
		for (var i = 0; i < datos.length; i++) {
			var fila = document.createElement('tr');
				fila.className = "text-white";
				fila.innerHTML += ("<td>" +datos[i].id+"</td>");
				fila.innerHTML += ("<td>" +datos[i].nombre+"&nbsp;"+datos[i].apellido+"</td>");
				fila.innerHTML += ("<td>" +datos[i].edad+"</td>");
				fila.innerHTML += ("<td>" +datos[i].nota_final+"&nbsp;&#37"+"</td>");
			document.getElementById('tabla').appendChild(fila);
		}
	}
	//Generar envio de la solicitud
	solicitud.send();
	alert("Datos cargados correctamente");
	//Deshabilitación del boton
	document.getElementById("btn_cargar").value = "Enviando...";
    document.getElementById("btn_cargar").disabled = true;
    return true;
});
