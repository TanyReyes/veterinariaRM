<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mx-auto" method="post" id="form-clientes">
                    <div class="col-md-12">
                        <label for="nombre" class="form-label fw-bold">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tel" class="form-label fw-bold">Teléfono:</label>
                        <input type="text" class="form-control" id="tel" name="tel" required>
                    </div>
                    <div class="col-md-6">
                        <label for="dui" class="form-label fw-bold">DUI:</label>
                        <input type="text" class="form-control" id="dui" name="dui" required>
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label fw-bold">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-bold">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="col-md-6">
                        <label for="tipo" class="form-label fw-bold">Estatus:</label>
                        <select id="tipo" class="form-select" name="tipo"  required>
                            <option value="" selected>Selecione:</option>
                            <option value="1">Activo</option>
                            <option value="0">No activo </option>
                        </select >
                    </div>


            </div>
            <div class="modal-footer">
                <a href="resultadoCliente.php" class="shadow btn btn-warning rounded fw-bold ">Cancelar</a>
                <button type="submit" class="shadow btn btn-success rounded fw-bold">Guardar</button>

            </div>
            </form>

        </div>
    </div>
</div>