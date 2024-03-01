<div class="container text-center">
    <button class="btn btn-primary" onclick="ordenarPorPrecio()">Ordenar por Precio unitario</button>
    <button class="btn btn-primary" onclick="ordenarPorNombre()">Ordenar por Nombre de la acción</button>
</div>

<br>

<table class="table" id="miTabla">
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

<script>
    let flagPrecio = false;
    let flagNombre = false;

    function ordenarPorPrecio() {
        flagPrecio = !flagPrecio;
        const tabla = document.getElementById("miTabla");
        const tbody = tabla.querySelector("tbody");
        const filas = Array.from(tbody.querySelectorAll("tr"));

        filas.sort((a, b) => {
            const valorA = parseFloat(a.cells[2].textContent.trim());
            const valorB = parseFloat(b.cells[2].textContent.trim());
            return flagPrecio ? valorA - valorB : valorB - valorA;
        });

        filas.forEach(fila => tbody.appendChild(fila));
    }

    function ordenarPorNombre() {
        flagNombre = !flagNombre;
        const tabla = document.getElementById("miTabla");
        const tbody = tabla.querySelector("tbody");
        const filas = Array.from(tbody.querySelectorAll("tr"));

        filas.sort((a, b) => {
            const textoA = a.cells[0].textContent.trim().toLowerCase();
            const textoB = b.cells[0].textContent.trim().toLowerCase();
            return flagNombre ? textoA.localeCompare(textoB) : textoB.localeCompare(textoA);
        });

        filas.forEach(fila => tbody.appendChild(fila));
    }
</script>
