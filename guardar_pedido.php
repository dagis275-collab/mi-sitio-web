<?php
include "database.php"; // conexión a la BD
$cliente = $_POST['cliente'];
$fecha = $_POST['fecha'];
$estado = $_POST['estado'];
$sql = "INSERT INTO pedido (fecha, cliente, estado)
        VALUES ('$fecha', '$cliente', '$estado')";
if ($conn->query($sql) === TRUE) {
    echo "Pedido guardado correctamente";
    header("Location: PEDIDOS.php"); // regresar a la lista
    exit();
} else {
    echo "Error al guardar: " . $conn->error;
}
?>

