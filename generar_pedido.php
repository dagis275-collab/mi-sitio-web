<?php include 'includes/header.php'; ?>

<h2 class="h4 mb-3">Generar nuevo pedido</h2>

<form action="guardar_pedido.php" method="POST" class="bg-white p-4 border rounded">

    <label class="form-label">Cliente:</label>
    <input type="text" name="cliente" class="form-control" required>

    <label class="form-label mt-3">Fecha:</label>
    <input type="date" name="fecha" class="form-control" required>

    <label class="form-label mt-3">Estado inicial:</label>
    <select name="estado" class="form-select">
        <option value="Confirmado">Confirmado</option>
        <option value="En preparación">En preparación</option>
    </select>

    <button class="btn btn-success mt-4">Guardar pedido</button>
</form>

<?php include 'includes/footer.php'; ?>
