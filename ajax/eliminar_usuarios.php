<?php
// Establecer la conexión a la base de datos
include('../config.php');
// Obtener el ID del rol a eliminar
$idUsuario = $_GET["id"];

// Preparar la consulta SQL para eliminar el rol
$sql = "DELETE FROM usuario WHERE id_usuario = :id";
$consulta = $pdo->prepare($sql);
$consulta->bindParam(":id", $idUsuario);

// Ejecutar la consulta SQL y verificar si se eliminó el usuario correctamente
try {
    $consulta->execute();
    if ($consulta->rowCount() == 1) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "No se encontró ningun usuario con el ID especificado";
    }
} catch (PDOException $e) {
    echo "Error al eliminar el usuario: " . $e->getMessage();
}