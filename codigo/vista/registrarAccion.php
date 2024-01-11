    <form method="post" action="controlador/ControladorAccion.php" class="mx-auto my-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="fechaCompra" class="form-label">Fecha de compra</label>
            <input type="date" class="form-control" id="fechaCompra" name="fechaCompra" required>
        </div>

        <div class="mb-3">
            <label for="precioUnitario" class="form-label">Precio unitario de acción</label>
            <input type="text" class="form-control" id="precioUnitario" name="precioUnitario" oninput="validarNumero(this)" required>
        </div>
        
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad"  name="cantidad" oninput="validarNumero(this)" required>
        </div>
        <button type="submit" name="accion" value="registrarAccion" class="btn btn-primary">Registrar</button>
    </form>