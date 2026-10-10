<?php include 'includes/header.php'; ?>
<?php include 'database.php'; ?>

<h1 class="h3 mb-4">Pedidos</h1>

<div class="mb-3">
    <a href="generar_pedido.php" class="btn btn-success btn-sm">
        + Generar nuevo pedido
    </a>
</div>

<table class="table bg-white table-bordered">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Estado</th>
            <th>Acción</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql = "SELECT * FROM pedido ORDER BY idPedido DESC";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>PED-" . $row['idPedido'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "<td>" . $row['cliente'] . "</td>";
            echo "<td><span class='badge bg-warning text-dark'>" . $row['estado'] . "</span></td>";
            echo "<td>
                    <a href='preparar.php?id=" . $row['idPedido'] . "' class='btn btn-sm btn-primary'>Preparar</a>
                    <a href='consulta.php?id=" . $row['idPedido'] . "' class='btn btn-sm btn-outline-secondary'>Consultar</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php include 'includes/footer.php'; ?>