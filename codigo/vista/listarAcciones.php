<div class="container mt-4">
    <div class="col-md-6">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="columna">Ordenar por:</label>
        </div>
        <select class="custom-select" id="columna" onchange="ordenarTabla()">
          <option value="nombre">Nombre de la acción</option>
          <option value="precio">Precio unitario</option>
        </select>
      </div>
    </div>
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
    function ordenarTabla() {
        const columna = document.getElementById("columna").value;
        const tabla = document.getElementById("miTabla");
        const tbody = tabla.querySelector("tbody");
        const filas = Array.from(tbody.querySelectorAll("tr"));

        filas.sort((a, b) => {
            let valorA, valorB;

            switch(columna) {
                case "nombre":
                    valorA = a.cells[0].textContent.trim().toLowerCase();
                    valorB = b.cells[0].textContent.trim().toLowerCase();
                    return valorA.localeCompare(valorB);
                case "precio":
                    valorA = parseFloat(a.cells[2].textContent.trim());
                    valorB = parseFloat(b.cells[2].textContent.trim());
                    return valorA - valorB;
                default:
                    return 0;
            }
        });

        filas.forEach(fila => tbody.appendChild(fila));
    }
</script>

