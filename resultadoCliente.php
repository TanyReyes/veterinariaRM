<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resultado Cliente</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ADDDFA;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="principal.php">
                <img src="img/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top ">
                Veterinaria RM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="principal.php">Inicio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  " href="mascota.php">Mascotas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold active" href="cliente.php">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultas.php">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roles.php">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">Usuarios</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Salir</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    // Definir la informaci??n de la conexi??n
    $host = 'localhost';
    $dbname = 'veterinaria';
    $user = 'root';
    $password = '';

    // Crear una instancia de la clase PDO
    try {
        $conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    } catch (PDOException $e) {
        die('Error de conexi??n: ' . $e->getMessage());
    }

    // Datos de conexi??n a la base de datos
    $host = 'localhost';
    $dbname = 'veterinaria';
    $user = 'root';
    $password = '';

    // Crear conexi??n a la base de datos
    $pdo = new mysqli($host, $user, $password, $dbname);

    // Verificar si hay errores de conexi??n
    if ($pdo->connect_error) {
        die("La conexi??n fall??: " . $pdo->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nombre = $_POST['nombre'];
        $telefono = $_POST['tel'];
        $dui = $_POST['dui'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $estatus = $_POST['tipo'];



        // Preparar la consulta SQL para insertar los datos en la tabla cliente
        $sql = "INSERT INTO cliente (nombre, telefono, dui, direccion, email, estatus) VALUES ('$nombre', '$telefono', '$dui', '$direccion', '$email', '$estatus')";

        $consulta = "SELECT * FROM cliente";

        // Ejecutar la consulta SQL
        if ($pdo->query($sql) === TRUE) {
            echo "<script>alert(Los datos se insertaron correctamente.)</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $pdo->error;
        }

        // Cerrar la conexi??n a la base de datos
        $pdo->close();
    }
    ?>


    <div class="container w-auto mt-5 rounded shadow" style="background-color: #EFF5F8;">
        <table class="table ">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">DUI</th>
                    <th scope="col">Direcci??n </th>
                    <th scope="col">Email </th>
                    <th scope="col">Estatus </th>
                </tr>
            </thead>
            <tbody>

                <?php
                $consulta = "SELECT * FROM cliente";
                $sql = $conexion->prepare($consulta);
                $sql->execute();
                //COnversion de informacion
                $registros = $sql->fetchAll(PDO::FETCH_OBJ);

                foreach ($registros as $clientes) {
                ?>

                    <tr>
                        <td><?= $clientes->id_cliente ?></td>
                        <td><?= $clientes->nombre ?></td>
                        <td><?= $clientes->telefono ?></td>
                        <td><?= $clientes->dui ?></td>
                        <td><?= $clientes->direccion ?></td>
                        <td><?= $clientes->email ?></td>
                        <td><?= $clientes->estatus ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="col-12 py-2 text-end">
            <a href="cliente.php" class="shadow btn btn-warning fw-bold rounded">REGRESAR</a>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>