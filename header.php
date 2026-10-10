<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$pagina = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WMS_Innovate_Electronics</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
<div class="container-fluid">
<a class="navbar-brand fw-bold" href="index.php">WMS_Innovate_Electronics</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">☰</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav me-auto">
<li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
<li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
<li class="nav-item"><a class="nav-link" href="inventario.php">Inventario</a></li>
<li class="nav-item"><a class="nav-link" href="movimientos.php">Movimientos</a></li>
<li class="nav-item"><a class="nav-link" href="almacenes.php">Almacenes</a></li>
<li class="nav-item"><a class="nav-link" href="recepciones.php">Recepciones</a></li>
<li class="nav-item"><a class="nav-link" href="pedidos.php">Pedidos</a></li>
<li class="nav-item"><a class="nav-link" href="reportes.php">Reportes</a></li>
<li class="nav-item"><a class="nav-link" href="integracion_erp.php">ERP</a></li>
</ul>
<span class="navbar-text me-3">Gestión de almacén</span>
<a class="btn btn-light btn-sm" href="login.php">Acceso</a>
</div></div>
</nav>
<main class="container py-4">
