<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro Mascota</title>
</head>

<body>

<?php include 'menus/menu1.php' ?>


    <div class="container w-75 mt-5 rounded shadow" style="background-color: #EFF5F8;">
        <h5 class="fw-bold text-align-top text-center pt-2">REGISTRO MASCOTA</h5>
        <div class="text-center mb-3">
            <img src="img/mascota.png" alt="" width="100" height="100">
        </div>




        <form action="insert_mascotas.php" method="post" id="form_mascotas" class="row g-3">
            <div class="col-md-6">
                <label for="nombreM" class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" id="nombreM" name="nombreM" required>
            </div>
            <div class="col-md-6">
                <label for="raza" class="form-label fw-bold">Raza:</label>
                <input type="text" class="form-control" id="raza" name="raza" required>
            </div>
            <div class="col-md-6">
                <label for="color" class="form-label fw-bold">Color:</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <div class="col-md-6">
                <label for="nacimiento" class="form-label fw-bold">Nacimiento:</label>
                <input type="date" class="form-control" id="nacimiento" name="nacimiento" required>
            </div>
            <div class="col-md-6">
                <label for="peso" class="form-label fw-bold">Peso:</label>
                <input type="number" class="form-control" id="peso" name="peso" step="0.01" required>
            </div>

            <div class="col-md-6">
                <label for="alura" class="form-label fw-bold">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" step="0.01" required>
            </div>
            <div class="col-md-6">
                <label for="sexo" class="form-label fw-bold">Sexo:</label>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Macho" checked>
                    <label class="form-check-label" for="sexo" required>
                        Macho
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Hembra">
                    <label class="form-check-label" for="sexo" required>
                        Hembra
                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <label for="client" class="form-label fw-bold">Seleccione el cliente:</label>
                <select id="client" class="form-select" name="client" required>
                    <option value="" selected>Selecione:</option>
                    <?php

                    // Definir la información de la conexión
                    $host = 'localhost';
                    $dbname = 'veterinariarm';
                    $user = 'root';
                    $password = '';

                    $conexion = mysqli_connect($host, $user, $password, $dbname);

                    $consulta = "SELECT * FROM cliente";
                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                    ?>

                    <?php foreach ($ejecutar as $opciones) : ?>

                        <option value="<?php echo $opciones['id_cliente'] ?>"><?php echo $opciones['nombre'] ?></option>

                    <?php endforeach ?>
                </select>




                </select>
            </div>


            <div class="d-grid gap-2 mt-1 py-4 d-md-flex justify-content-md-end">
                <a href="resultadoMas.php" class="shadow btn btn-warning rounded fw-bold ">DATOS</a>
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