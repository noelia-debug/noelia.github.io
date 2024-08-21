<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "matricula";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
	die("Error de conexión: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$identidad = $_POST["identidad"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$edad = $_POST["edad"];
	$fecha_nacimiento = $_POST["fecha_nacimiento"];
	$sexo = $_POST["sexo"];
	$telefono = $_POST["telefono"];
	$jornada = $_POST["jornada"];
	$seccion = $_POST["seccion"];
	$bachiller = $_POST["bachiller"];
	$jornada_ciclo = $_POST["jornada_ciclo"];
	$seccion_ciclo = $_POST["seccion_ciclo"];
	$cilo_comun = $_POST["cilo_comun"];
	$nombre_padre = $_POST["nombre_padre"];
	$apellido_padre = $_POST["apellido_padre"];
	$identidad_padre = $_POST["identidad_padre"];
	$telefono_padre = $_POST["telefono_padre"];
	$nombre_madre = $_POST["nombre_madre"];
	$apellido_madre = $_POST["apellido_madre"];
	$edad_madre = $_POST["edad_madre"];
	$identidad_madre = $_POST["identidad_madre"];
	$telefono_madre = $_POST["telefono_madre"];
	$mensaje_html = $_POST["mensaje_html"];










	$sql = "INSERT INTO registros (identidad, nombre, apellido, edad, fecha_nacimiento, sexo,telefono,jornada,seccion,bachiller,jornada_ciclo,seccion_ciclo
	,cilo_comun,nombre_padre,apellido_padre,identidad_padre,telefono_padre,nombre_madre,apellido_madre,edad_madre,identidad_madre,telefono_madre,mensaje_html)
  VALUES ('$identidad', '$nombre', '$apellido', '$edad', '$fecha_nacimiento', '$sexo', '$telefono', '$jornada', '$seccion', '$bachiller', '$jornada_ciclo', '$seccion_ciclo'
	, '$cilo_comun','$nombre_padre','$apellido_padre','$identidad_padre','$telefono_padre','$nombre_madre','$apellido_madre','$edad_madre','$identidad_madre','$telefono_madre','$mensaje_html')";
	if ($conn->query($sql) === TRUE) {
		echo "Datos insertados correctamente";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
