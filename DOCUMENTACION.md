# DISEÑO DEL SISTEMA WEB + MULTIMEDIA: WMS SINERGIA

## 1. Análisis de necesidades
El proyecto requiere una aplicación web dinámica porque debe manejar información que cambia constantemente: productos, inventarios, movimientos, recepciones, pedidos, usuarios y reportes. También necesita una base de datos para conservar la información y un servidor web para ejecutar PHP.

La solución propuesta es una aplicación web WMS (Warehouse Management System) con PHP + MySQL. HTML5 y CSS3 se utilizan para la interfaz y JavaScript para búsquedas e interacciones. La aplicación puede instalarse en XAMPP durante el desarrollo.

## 2. Objetivo
Diseñar una aplicación web para administrar las operaciones básicas de un almacén, permitiendo consultar productos y existencias, registrar movimientos, controlar ubicaciones, gestionar recepciones y pedidos, generar reportes y preparar la integración con un ERP.

## 3. Arquitectura propuesta
Arquitectura de tres capas:
- Presentación: HTML5, CSS3, Bootstrap y JavaScript.
- Aplicación: PHP, sesiones, validaciones y lógica de negocio.
- Datos: MySQL.

Flujo:
Usuario → Navegador → PHP → MySQL
                         ↕
                    API / ERP

## 4. Navegación
Inicio
├── Productos
├── Inventario
├── Movimientos
├── Almacenes
│   └── Ubicaciones
├── Recepciones
├── Pedidos
├── Reportes
├── Integración ERP
└── Acceso
    ├── Usuarios
    └── Roles y permisos

## 5. Interfaz
La pantalla inicial contiene indicadores de productos, existencias, movimientos y pedidos. El menú superior permite entrar a cada módulo. Las tablas facilitan la consulta y la búsqueda de información. Se utiliza diseño responsive para computadora, tableta y teléfono.

## 6. Correspondencia con UML
Usuario/Rol → acceso y permisos.
Producto → catálogo de artículos.
Inventario → existencias mínimas, actuales y máximas.
Movimiento → entradas, salidas y ajustes.
Almacén/Ubicación → organización física.
Recepción → ingreso de mercancía.
Pedido → preparación y salida.
Reporte → consulta y dashboard.
IntegraciónERP → intercambio y sincronización de información.

## 7. Carta de navegación
Inicio → Productos → Inventario → Movimientos → Reportes.
Inicio → Almacenes → Ubicaciones.
Inicio → Recepciones → Movimientos → Inventario.
Inicio → Pedidos → Movimientos → Inventario.
Inicio → Integración ERP → Inventario / Movimientos / Productos.
Inicio → Acceso → Usuarios / Roles.

## 8. Recursos multimedia
Se incluye un bloque visual de apoyo con representación de cajas/almacén mediante HTML y CSS. En una versión posterior se puede incorporar un video institucional o tutorial del proceso de recepción y salida.

## 9. Seguridad inicial
- Inicio de sesión.
- Roles y permisos.
- Uso de sesiones PHP.
- Conexión MySQL mediante PDO.
- En una implementación productiva, las contraseñas deben almacenarse con password_hash(), nunca en texto plano.
- Las operaciones de escritura deben utilizar consultas preparadas y validación del lado servidor.

## 10. Cuadro comparativo de CMS
| CMS | Descripción | Característica principal | Ventajas | Desventajas |
|---|---|---|---|---|
| WordPress | CMS orientado a sitios web y contenido | Gran ecosistema de plugins y temas | Fácil de instalar, muchos recursos, comunidad amplia | Puede requerir plugins para funciones empresariales específicas |
| Drupal | CMS flexible y orientado a proyectos complejos | Alta personalización y gestión de usuarios | Buen control de permisos, estructura flexible, escalable | Curva de aprendizaje mayor |
| Joomla | CMS para sitios y portales dinámicos | Equilibrio entre administración y flexibilidad | Gestión de usuarios, extensiones y administración relativamente sencilla | Menor disponibilidad de recursos que WordPress |

Para este proyecto se plantea PHP + MySQL de forma directa en lugar de depender de un CMS, porque el WMS requiere módulos y relaciones de datos específicas definidas en el UML. Un CMS podría evaluarse posteriormente si se requiere administrar contenido institucional.

## 11. Relación de clases UML
Usuario 1..* Rol
Rol 1..* Usuario
Almacén 1..* Ubicación
Producto 1..1 Inventario
Producto 1..* Movimiento
Inventario 1..* Movimiento
Recepción 1..* Movimiento
Pedido 1..* Movimiento
Reporte *..* Inventario/Movimiento/Producto
IntegraciónERP *..* Inventario/Movimiento/Producto

## 12. Conclusión
A partir del diagrama de clases se diseñó una aplicación web que concentra las operaciones principales de un almacén. La propuesta permite pasar del modelo UML a una arquitectura funcional con navegación, interfaz, base de datos y módulos definidos. El prototipo puede seguir creciendo con autenticación completa, CRUD de cada módulo, generación de PDF/Excel, gráficos y conexión real con un ERP.
