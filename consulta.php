<?php include 'includes/header.php'; ?>
<?php include 'database.php'; ?>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM pedido WHERE idPedido = $id";
$result = $conn->query($sql);
$pedido = $result->fetch_assoc();
?>

<h2 class="h4 mb-3">Consulta del pedido: PED-<?php echo $pedido['idPedido']; ?></h2>

<ul class="list-group">
    <li class="list-group-item"><strong>Fecha:</strong> <?php echo $pedido['fecha']; ?></li>
    <li class="list-group-item"><strong>Cliente:</strong> <?php echo $pedido['cliente']; ?></li>
    <li class="list-group-item"><strong>Estado:</strong> <?php echo $pedido['estado']; ?></li>
</ul>

<?php include 'includes/footer.php'; ?>