<main>
    <article>
        <div class='row'>
        <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="../controlador/nueva-membresia.php">
                <div class="mb-3">
                        <label class="form-label">Cedula: </label>
                        <input type="text" class="form-control" name="txtCedula" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nacimiento: </label>
                        <input type="date" class="form-control" name="txtNace" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado civil: </label>
                        <input type="text" class="form-control" name="txtEc" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Telefono: </label>
                        <input type="text" class="form-control" name="txtTel" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección : </label>
                        <input type="text" class="form-control" name="txtDir" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Barrio : </label>
                        <input type="text" class="form-control" name="txtBarrio" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Profesion : </label>
                        <input type="text" class="form-control" name="txtProf" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>

        </div>
    </article>
</main>