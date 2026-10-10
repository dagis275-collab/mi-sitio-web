<?php include 'includes/header.php'; ?>
<?php include 'database.php'; ?>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM pedido WHERE idPedido = $id";
$result = $conn->query($sql);
$pedido = $result->fetch_assoc();

if (isset($_POST['cliente'])) {
    $cliente = $_POST['cliente'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];

    $sql = "UPDATE pedido SET cliente='$cliente', fecha='$fecha', estado='$estado'
            WHERE idPedido=$id";

    $conn->query($sql);
    header("Location: PEDIDO.php");
    exit();
}
?>

<h2 class="h4 mb-3">Editar pedido: PED-<?php echo $pedido['idPedido']; ?></h2>

<form method="POST" class="bg-white p-4 border rounded">

    <label class="form-label">Cliente:</label>
    <input type="text" name="cliente" class="form-control" value="<?php echo $pedido['cliente']; ?>" required>

    <label class="form-label mt-3">Fecha:</label>
    <input type="date" name="fecha" class="form-control" value="<?php echo $pedido['fecha']; ?>" required>

    <label class="form-label mt-3">Estado:</label>
    <select name="estado" class="form-select">
        <option value="Confirmado">Confirmado</option>
        <option value="En preparación">En preparación</option>
        <option value="Enviado">Enviado</option>
        <option value="Entregado">Entregado</option>
    </select>

    <button class="btn btn-info mt-4">Guardar cambios</button>
</form>

<?php include 'includes/footer.php'; ?>