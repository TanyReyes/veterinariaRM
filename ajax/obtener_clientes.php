<?php


include('../config.php');
// Verificar que se ha recibido el ID de la mascota
if (!isset($_GET['id'])) {
    die('No se ha recibido el ID del cliente');
}

$idCliente = $_GET["id"];
// Preparar la consulta SQL para obtener los datos de la mascota
$consulta = $pdo->prepare('SELECT * FROM cliente WHERE id_cliente = :id');

// Asignar el valor del parámetro :id_cliente
$consulta->bindParam(':id', $idCliente, PDO::PARAM_INT);

// Ejecutar la consulta
$consulta->execute();

// Obtener los resultados
$cliente= $consulta->fetch(PDO::FETCH_ASSOC);

// Devolver los datos del cliente como JSON
echo json_encode($cliente);