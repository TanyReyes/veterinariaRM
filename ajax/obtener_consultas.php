<?php

include('../config.php');
// Verificar que se ha recibido el ID de la mascota
if (!isset($_GET['id'])) {
    die('No se ha recibido el ID de la consulta');
}

$idConsulta = $_GET['id'];

// Preparar la consulta SQL para obtener los datos de la consulta
$consulta = $pdo->prepare('SELECT * FROM consultas WHERE id_consulta = :id');

// Asignar el valor del parámetro :id_mascota
$consulta->bindParam(':id', $idConsulta, PDO::PARAM_INT);

// Ejecutar la consulta
$consulta->execute();

// Obtener los resultados
$consultas = $consulta->fetch(PDO::FETCH_ASSOC);

// Devolver los datos de la mascota como JSON
echo json_encode($consultas);