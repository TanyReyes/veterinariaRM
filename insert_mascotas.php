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

    if (preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/", $_POST["nombreM"]) &&
        preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/", $_POST["raza"]) &&
        preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $_POST["color"]) &&
        preg_match("/[\d{2})\/(\d{2})\/(\d{4}]+$/", $_POST["nacimiento"]) &&
        preg_match("/^[\d{1,3}(\.\d{1,2})?]+$/", $_POST["peso"]) &&
        preg_match("/^[\d{1,3}(\.\d{1,2})?]+$/", $_POST["altura"]) &&
        preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/", $_POST["sexo"])) {

        $nombreM = $_POST['nombreM'];
        $raza = $_POST['raza'];
        $color = $_POST['color'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $sexo = $_POST['sexo'];
        $fechaN = $_POST['nacimiento'];
        $cliente = $_POST['client'];

        // Preparar la consulta SQL para insertar los datos en la tabla cliente
        $sql = "INSERT INTO mascotas (nombre, raza, color, peso, altura, sexo, fecha_nacimiento, id_cliente) 
        VALUES ('$nombreM', '$raza','$color', '$peso', '$altura','$sexo','$fechaN','$cliente')";

        $consulta = "SELECT * FROM mascotas";

    } else {
        echo "<script>alert('Error, no se permiten caracteres especiales.'); window.history.back();</script>";
    }

    // Ejecutar la consulta SQL
    if ($pdo->query($sql) === TRUE) {
        echo "<script>alert('Los datos se insertaron correctamente'); window.location = 'mascota.php'; </script>";

    } else {
        echo "Error: " . $sql . "<br>" . $pdo->error;
    }

    // Cerrar la conexión a la base de datos
    $pdo->close();
}
?>