<?php
    $origen = 'mysql:host=localhost;port=3306;dbname=estudiante';
    $nombreUsuario = 'root';
    $password = '';
    $opciones = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ  //El atributo me lo trae en objeto
    );
    try {
        $pdo = new PDO($origen,$nombreUsuario,$password,$opciones);
    } catch (PDOException $e) {
        echo ("<div class = 'alert alert-danger' role = 'alert'>Error: ".$e->getMessage()."</div>");
    }
?>