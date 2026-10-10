<?php
include "database.php";

$id = $_GET['id'];

$sql = "DELETE FROM pedido WHERE idPedido = $id";
$conn->query($sql);

header("Location: PEDIDO.php");
exit();
?>