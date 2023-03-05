<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    <style>
         .bg {
            background-image: url(img/login.png);
            background-position: center center;
            background-size: cover;

        }
    </style>
</head>

<body>

    <div class="container w-75 mt-5 rounded shadow"  style="background-color: #EFF5F8;">
        <div class="row align-items-stretch">
            <!--agregamos 2 columnas para contenido-->

            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                
            </div>

            <div class="col py-4 rounded-end">
                <!--aqui empezamos el contenido-->
                <div class="text-end ">
                    <img src="img/logo.png" width="50" alt="logo">
                </div>
                <h2 class="fw-bold text-center py-4">WELCOME</h2>

                <!--Login-->

                <form action="login.php" method="post" class="p-3">
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input">
                        <label for="connected" class="form-check-label">Recordar usuario</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>

                    <div class="my-3">
                        <span>¿No tienes una cuenta? <a href="#">Registrate</a></span> <br>
                        <span> <a href="#">Restablecer contraseña?</a></span>
                    </div>
                </form>
            </div>
        </div>

    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>