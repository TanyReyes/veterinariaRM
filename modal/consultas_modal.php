<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mx-auto" method="post" id="form_consultas">
                    <div class="col-md-6">
                        <label for="masco" class="form-label fw-bold">Seleccione mascota:</label>
                        <select id="masco" class="form-select" name="masco" required>
                            <option value="" selected>Selecione:</option>
                            <?php

                            // Definir la información de la conexión
                            $host = 'localhost';
                            $dbname = 'veterinariarm';
                            $user = 'root';
                            $password = '';

                            $conexion = mysqli_connect($host, $user, $password, $dbname);

                            $consulta = "SELECT * FROM mascotas";
                            $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                            ?>

                            <?php foreach ($ejecutar as $opciones) : ?>

                                <option value="<?php echo $opciones['id_mascotas'] ?>"><?php echo $opciones['nombre'] ?></option>

                            <?php endforeach ?>
                        </select>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="cli" class="form-label fw-bold">Seleccione cliente:</label>
                        <select id="cli" class="form-select" name="cli" required>
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
                    <div class="col-md-6">
                        <label for="exa" class="form-label fw-bold">Examen fisico:</label>
                        <textarea class="form-control" name="exa" id="exa" required></textarea>
                    </div>

                    <div class="col-md-6">
                        <label for="diag" class="form-label fw-bold">Diagnostico:</label>
                        <textarea class="form-control" name="diag" id="diag" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="medi" class="form-label fw-bold">Medicamentos:</label>
                        <textarea class="form-control" name="medi" id="medi" required></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="cita" class="form-label fw-bold">Proxima cita:</label>
                        <input type="date" class="form-control" id="cita" name="cita" required>
                    </div>
                    <div class="col-md-6">
                        <label for="costo" class="form-label fw-bold">Total a pagar:</label>
                        <input type="number" class="form-control" id="costo" name="costo" step="0.01" required>
                    </div>


            </div>
            <div class="modal-footer">
                <a href="resultadoConsulta.php" class="shadow btn btn-warning rounded fw-bold ">Cancelar</a>
                <button type="submit" class="shadow btn btn-success rounded fw-bold">Guardar</button>

            </div>
            </form>

        </div>
    </div>
</div>