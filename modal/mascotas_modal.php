<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mx-auto" method="post" id="form-mascotas">
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


            </div>
            <div class="modal-footer">
                <a href="resultadoMas.php" class="shadow btn btn-warning rounded fw-bold ">Cancelar</a>
                <button type="submit" class="shadow btn btn-success rounded fw-bold">Guardar</button>

            </div>
            </form>

        </div>
        </div>
</div>