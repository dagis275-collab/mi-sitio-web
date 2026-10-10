<?php include 'includes/header.php'; ?>
<section class="hero mb-4">
<h1>Sistema Web de Gestión de Almacén (WMS)</h1>
<p class="lead">Plataforma para controlar productos, existencias, movimientos, pedidos, recepciones y ubicaciones de almacén.</p>
<a href="inventario.php" class="btn btn-light">Consultar inventario</a>
</section>
<div class="row g-4 mb-4">
<?php
$metrics=[['Productos','248'],['Existencias','1,860'],['Movimientos hoy','37'],['Pedidos pendientes','12']];
foreach($metrics as $m): ?>
<div class="col-md-3"><div class="card p-4"><small><?=$m[0]?></small><div class="metric"><?=$m[1]?></div><span class="text-success">● Operación normal</span></div></div>
<?php endforeach; ?>
</div>
<h2 class="h4 mb-3">Módulos principales</h2>
<div class="row g-3">
<?php
$mods=[
['Productos','Catálogo y datos de artículos','productos.php'],
['Inventario','Existencias mínimas y máximas','inventario.php'],
['Movimientos','Entradas, salidas y ajustes','movimientos.php'],
['Almacenes','Zonas, pasillos y ubicaciones','almacenes.php'],
['Recepciones','Validación y recepción de mercancía','recepciones.php'],
['Pedidos','Preparación y confirmación de salidas','pedidos.php'],
['Reportes','Indicadores y consultas','reportes.php'],
['Integración ERP','Sincronización de información','integracion_erp.php']];
foreach($mods as $m): ?>
<div class="col-md-3"><a class="text-decoration-none text-dark" href="<?=$m[2]?>"><div class="card module-card p-4 h-100"><h3 class="h5"><?=$m[0]?></h3><p class="mb-0 text-muted"><?=$m[1]?></p></div></a></div>
<?php endforeach; ?>
</div>
<div class="row g-4 mt-2">
<div class="col-md-7"><div class="card p-4"><h2 class="h5">Flujo general</h2><div class="timeline"><p><b>1. Recepción</b> → validar productos.</p><p><b>2. Ubicación</b> → almacenar mercancía.</p><p><b>3. Inventario</b> → controlar existencias.</p><p><b>4. Pedido</b> → preparar y confirmar salida.</p><p><b>5. Reporte</b> → analizar información.</p><p class="mb-0"><b>6. ERP</b> → sincronizar datos.</p></div></div></div>
<div class="col-md-5"><div class="card p-3"><div class="media-box">📦</div><p class="mt-3 mb-0">Recurso multimedia de apoyo: representación visual del proceso de almacén.</p></div></div>
</div>
<?php include 'includes/footer.php'; ?>