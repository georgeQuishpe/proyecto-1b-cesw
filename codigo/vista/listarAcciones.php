<table class="table">
    <thead>
            <tr>
                <th class="bg-primary text-white" scope="col">Nombre de la acción</th>
                <th class="bg-primary text-white" scope="col">Fecha de compra</th>
                <th class="bg-primary text-white" scope="col">Precio unitario</th>
                <th class="bg-primary text-white" scope="col">Cantidad de acciones</th>
                <th class="bg-primary text-white" scope="col">Costo total de compra</th>
                <th class="bg-primary text-white" scope="col">Cambio</th>
                <th class="bg-primary text-white" scope="col">Ganancia / Pérdida</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach (ControladorAccion::obtenerInstancia()->obtenerTodas() as $accion): ?>
            <tr>
                <td><?= $accion['nombre'] ?></td>
                <td><?= $accion['fechaCompra'] ?></td>
                <td><?= $accion['precioUnitario'] ?></td>
                <td><?= $accion['cantidad'] ?></td>
                <td><?= $accion['costoTotal'] ?></td>
                <td><?= $accion['cambio'] ?>%</td>
                <td><?= $accion['gananciaPerdida'] ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>