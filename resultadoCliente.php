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
<?php include('modal/clientes_modal.php'); ?>
<body>


<?php include 'menus/menu1.php' ?>

    <div class="container w-auto mt-5 rounded shadow" style="background-color: #EFF5F8;">
        <div class="mb-3 py-2 col-md-3 ">
            <input type="search"  id="busqueda-cliente" class="form-control" placeholder="Buscar Cliente" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <table class="table" id="tabla-clientes">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">DUI</th>
                    <th scope="col">Dirección </th>
                    <th scope="col">Email </th>
                    <th scope="col">Estatus </th>
                    <th scope="col">Acciones</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
        <div class="col-12 py-2 text-end">
            <a href="cliente.php" class="shadow btn btn-warning fw-bold rounded">REGRESAR</a>
        </div>

    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/cliente.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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