<?php
// Definir la información de la conexión
$host = 'localhost';
$dbname = 'veterinariarm';
$user = 'root';
$password = '';

// Crear una instancia de la clase PDO
try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}

// Datos de conexión a la base de datos
$host = 'localhost';
$dbname = 'veterinariarm';
$user = 'root';
$password = '';

// Crear conexión a la base de datos
$pdo = new mysqli($host, $user, $password, $dbname);

// Verificar si hay errores de conexión
if ($pdo->connect_error) {
    die("La conexión falló: " . $pdo->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $_POST["nombre"]) &&
        preg_match("/^[0-9]{8}$/", $_POST["tel"]) &&
        preg_match("/^\d{8}-\d+$/", $_POST["dui"]) &&
        preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s, ]+$/", $_POST["direccion"]) &&
        preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}+$/", $_POST["email"]) &&
        preg_match("/^[01]+$/", $_POST["tipo"])) {


    $nombre = $_POST['nombre'];
    $telefono = $_POST['tel'];
    $dui = $_POST['dui'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $estatus = $_POST['tipo'];


    // Preparar la consulta SQL para insertar los datos en la tabla cliente
    $sql = "INSERT INTO cliente (nombre, telefono, dui, direccion, email, estatus) VALUES ('$nombre', '$telefono', '$dui', '$direccion', '$email', '$estatus')";

    $consulta = "SELECT * FROM cliente";
} else {
    echo "<script>alert('Error, no se permiten caracteres especiales.'); window.history.back();</script>";
}
    // Ejecutar la consulta SQL
    if ($pdo->query($sql) === TRUE) {
        echo "<script>alert('Los datos se insertaron correctamente'); window.location = 'cliente.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $pdo->error;
    }

    // Cerrar la conexión a la base de datos
    $pdo->close();
}
?>