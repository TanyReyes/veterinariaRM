<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mx-auto" method="post" id="form-usuarios">

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


            </div>
            <div class="modal-footer">
                <a href="userResult.php" class="shadow btn btn-warning rounded fw-bold ">Cancelar</a>
                <button type="submit" class="shadow btn btn-success rounded fw-bold">Guardar</button>

            </div>
            </form>

        </div>
    </div>
</div>