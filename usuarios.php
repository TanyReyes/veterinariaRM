<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Usuarios</title>
</head>

<body>


<?php include 'menus/menu1.php' ?>

    <div class="container w-50 mt-5 rounded shadow" style="background-color: #EFF5F8;">
        <h5 class="fw-bold text-align-top text-center pt-2">REGISTRO USUARIO</h5>
        <div class="text-center mb-3">
            <img src="img/user.png" alt="" width="100" height="100">
        </div>

        <form action="insert_usuarios.php" method="post" id="form_usuarios" class="row g-3">
            <div class="col-md-6">
                <label for="user" class="form-label fw-bold">Username:</label>
                <input type="text" class="form-control" id="user" name="user" required>
            </div>
            <div class="col-md-6">
                <label for="pass" class="form-label fw-bold">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label fw-bold">Teléfono:</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-6">
                <label for="tipo" class="form-label fw-bold">Estatus:</label>
                <select id="tipo" class="form-select" name="tipo" required>
                    <option value="" selected>Selecione:</option>
                    <option value="1">Activo</option>
                    <option value="0">No activo </option>
                </select>
            </div>


            <div class="col-md-6">
                <label for="rol" class="form-label fw-bold">Roles:</label>
                <select id="rol" class="form-select" name="rol" required>
                    <option value="" selected>Selecione:</option>

                    <?php

                    // Definir la información de la conexión
                    $host = 'localhost';
                    $dbname = 'veterinariarm';
                    $user = 'root';
                    $password = '';

                    $conexion = mysqli_connect($host, $user, $password, $dbname);

                    $consulta = "SELECT * FROM roles";
                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                    ?>

                    <?php foreach ($ejecutar as $opciones) : ?>

                        <option value="<?php echo $opciones['id_rol'] ?>"><?php echo $opciones['nombre'] ?></option>

                    <?php endforeach ?>
                </select>

            </div>

            <div class="d-grid gap-2 mt-1 py-4 d-md-flex justify-content-md-end">
                <a href="userResult.php" class="shadow btn btn-warning rounded fw-bold ">DATOS</a>
                <button type="submit" class="shadow btn btn-success rounded fw-bold">REGISTRAR</button>
            </div>
        </form>





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