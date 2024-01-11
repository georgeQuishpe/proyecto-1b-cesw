<table class="table table-striped-columns">
<thead>
            <tr>
                <th>Nombre de la acción</th>
                <th>Fecha de compra</th>
                <th>Precio de compra por acción</th>
                <th>Cantidad de acciones</th>
                <th>Costo total de compra</th>
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
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>