PROYECTO: Sistema Web de Gestión de Almacén (WMS) - Sinergia

Tecnologías:
- HTML5, CSS3 y JavaScript para interfaz.
- PHP 8+ para servidor y lógica.
- MySQL 8+ para base de datos.
- Bootstrap vía CDN para componentes visuales.

Estructura:
index.php              Inicio / dashboard
login.php              Acceso de usuarios
logout.php             Cierre de sesión
usuarios.php           Gestión de usuarios
roles.php              Gestión de roles
productos.php          Catálogo de productos
inventario.php         Existencias
movimientos.php        Entradas, salidas y ajustes
almacenes.php          Almacenes y ubicaciones
recepciones.php        Recepciones
pedidos.php             Pedidos y salidas
reportes.php           Reportes y dashboard
integracion_erp.php    Integración ERP
config/database.php    Conexión MySQL
includes/header.php    Encabezado y navegación
includes/footer.php    Pie de página
assets/style.css       Hoja de estilos
assets/app.js          Scripts
database/schema.sql     Base de datos inicial

INSTALACIÓN:
1. Copiar la carpeta a htdocs de XAMPP (o equivalente).
2. Crear una base de datos MySQL llamada wms_sinergia.
3. Ejecutar database/schema.sql.
4. Revisar usuario, contraseña y servidor en config/database.php.
5. Abrir http://localhost/WMS_Sinergia/

USUARIO DEMO:
admin@sinergia.com
Contraseña: admin123

NOTA:
Este prototipo está diseñado como base académica para la actividad. Las operaciones de alta/edición/borrado pueden ampliarse con formularios y consultas preparadas de PHP/MySQL.
