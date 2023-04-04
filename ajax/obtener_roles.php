<?php

include('../config.php');
// Verificar que se ha recibido el ID del rol
if (!isset($_GET['id'])) {
    die('No se ha recibido el ID del rol');
}

$idRol = $_GET['id'];

// Preparar la consulta SQL para obtener los datos de la consulta
$consulta = $pdo->prepare('SELECT * FROM roles WHERE id_rol = :id');

// Asignar el valor del parámetro :id_mascota
$consulta->bindParam(':id', $idRol , PDO::PARAM_INT);

// Ejecutar la consulta
$consulta->execute();

// Obtener los resultados
$rol = $consulta->fetch(PDO::FETCH_ASSOC);

// Devolver los datos de la mascota como JSON
echo json_encode($rol);