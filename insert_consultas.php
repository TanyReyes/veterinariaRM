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

    if (preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $_POST["exa"]) &&
        preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $_POST["diag"]) &&
        preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/", $_POST["medi"]) &&
        preg_match("/[\d{2})\/(\d{2})\/(\d{4}]+$/", $_POST["cita"]) &&
        preg_match("/^[\d{1,3}(\.\d{1,2})?]+$/", $_POST["costo"])) {

    $mascota = $_POST['masco'];
    $cliente = $_POST['cli'];
    $examen = $_POST['exa'];
    $diagnos = $_POST['diag'];
    $medica = $_POST['medi'];
    $cita = $_POST['cita'];
    $total = $_POST['costo'];


    // Preparar la consulta SQL para insertar los datos en la tabla cliente
    $sql = "INSERT INTO consultas (id_mascota, id_cliente, examen_fisico, diagnostico, medicamentos, proxima_cita, costo) 
        VALUES ('$mascota', '$cliente','$examen', '$diagnos', '$medica','$cita','$total')";

    $consulta = "SELECT * FROM consultas";

} else {
    echo "<script>alert('Error, no se permiten caracteres especiales.'); window.history.back();</script>";
}
// Ejecutar la consulta SQL
if ($pdo->query($sql) === TRUE) {
    echo "<script>alert('Los datos se insertaron correctamente'); window.location = 'consultas.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $pdo->error;
}

// Cerrar la conexión a la base de datos
$pdo->close();
}
?>