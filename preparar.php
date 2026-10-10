<?php include 'includes/header.php'; ?>
<?php include 'database.php'; ?>

<?php
$id = $_GET['id'];

if (isset($_POST['nuevo_estado'])) {
    $nuevo_estado = $_POST['nuevo_estado'];
    $sql = "UPDATE pedido SET estado='$nuevo_estado' WHERE idPedido=$id";
    $conn->query($sql);
    header("Location: PEDIDOS.php");
    exit();
}

$sql = "SELECT * FROM pedido WHERE idPedido = $id";
$result = $conn->query($sql);
$pedido = $result->fetch_assoc();
?>

<h2 class="h4 mb-3">Preparación del pedido: PED-<?php echo $pedido['idPedido']; ?></h2>

<form method="POST">
    <label class="form-label">Cambiar estado:</label>
    <select name="nuevo_estado" class="form-select">
        <option value="En preparación">En preparación</option>
        <option value="Confirmado">Confirmado</option>
        <option value="Enviado">Enviado</option>
        <option value="Entregado">Entregado</option>
    </select>

    <button class="btn btn-primary mt-3">Actualizar estado</button>
</form>

<?php include 'includes/footer.php'; ?>

