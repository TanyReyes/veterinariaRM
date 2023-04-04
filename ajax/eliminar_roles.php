<?php
// Establecer la conexión a la base de datos
include('../config.php');
// Obtener el ID del rol a eliminar
$idRol = $_GET["id"];

// Preparar la consulta SQL para eliminar el rol
$sql = "DELETE FROM roles WHERE id_rol = :id";
$consulta = $pdo->prepare($sql);
$consulta->bindParam(":id", $idRol);

// Ejecutar la consulta SQL y verificar si se eliminó el correctamente
try {
    $consulta->execute();
    if ($consulta->rowCount() == 1) {
        echo "Rol eliminado correctamente";
    } else {
        echo "No se encontró ningun rol con el ID especificado";
    }
} catch (PDOException $e) {
    echo "Error al eliminar el rol: " . $e->getMessage();
}