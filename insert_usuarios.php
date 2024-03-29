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

    if (preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $_POST["user"]) &&
        preg_match("/^[0-9a-zA-Z]+$/", $_POST["pass"]) &&
        preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}+$/", $_POST["email"]) &&
        preg_match("/^[0-9]{8}$/", $_POST["tel"]) &&
        preg_match("/^[10]+$/", $_POST["tipo"])
    ) {

        $usuario = $_POST['user'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $telefono = $_POST['tel'];
        $status = $_POST['tipo'];
        $roles = $_POST['rol'];


        // Preparar la consulta SQL para insertar los datos en la tabla cliente
        $sql = "INSERT INTO usuario (usuario, password, email, telefono, status, id_roles)
        VALUES ('$usuario', '$password', '$email', '$telefono', '$status', '$roles')";


        $consulta = "SELECT * FROM usuario";
    } else {
        echo "<script>alert('Error, no se permiten caracteres especiales.'); window.history.back();</script>";
    }


    // Ejecutar la consulta SQL
    if ($pdo->query($sql) === TRUE) {
        echo "<script>alert('Los datos se insertaron correctamente'); window.location='usuarios.php'; </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $pdo->error;
    }

    // Cerrar la conexión a la base de datos
    $pdo->close();
}

?>