CREATE DATABASE IF NOT EXISTS wms_sinergia CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE wms_sinergia;

CREATE TABLE rol (
 idRol INT AUTO_INCREMENT PRIMARY KEY,
 nombreRol VARCHAR(80) NOT NULL,
 descripcion VARCHAR(255)
);

CREATE TABLE usuario (
 idUsuario INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(80) NOT NULL,
 apellido VARCHAR(80),
 correo VARCHAR(120) UNIQUE NOT NULL,
 contrasena VARCHAR(255) NOT NULL,
 rol INT NOT NULL,
 estado ENUM('Activo','Inactivo') DEFAULT 'Activo',
 FOREIGN KEY (rol) REFERENCES rol(idRol)
);

CREATE TABLE almacen (
 idAlmacen INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(120) NOT NULL,
 direccion VARCHAR(255),
 tipo VARCHAR(80)
);

CREATE TABLE ubicacion (
 idUbicacion INT AUTO_INCREMENT PRIMARY KEY,
 zona VARCHAR(50), pasillo VARCHAR(50), estante VARCHAR(50), nivel VARCHAR(50),
 idAlmacen INT NOT NULL,
 FOREIGN KEY (idAlmacen) REFERENCES almacen(idAlmacen)
);

CREATE TABLE producto (
 idProducto INT AUTO_INCREMENT PRIMARY KEY,
 nombre VARCHAR(120) NOT NULL,
 categoria VARCHAR(100),
 codigo VARCHAR(80) UNIQUE NOT NULL,
 descripcion TEXT,
 unidadMedida VARCHAR(40),
 idUbicacion INT,
 FOREIGN KEY (idUbicacion) REFERENCES ubicacion(idUbicacion)
);

CREATE TABLE inventario (
 idInventario INT AUTO_INCREMENT PRIMARY KEY,
 idProducto INT UNIQUE NOT NULL,
 cantidadActual DECIMAL(12,2) DEFAULT 0,
 cantidadMinima DECIMAL(12,2) DEFAULT 0,
 cantidadMaxima DECIMAL(12,2) DEFAULT 0,
 FOREIGN KEY (idProducto) REFERENCES producto(idProducto)
);

CREATE TABLE movimiento (
 idMovimiento INT AUTO_INCREMENT PRIMARY KEY,
 idProducto INT NOT NULL,
 tipoMovimiento ENUM('entrada','salida','ajuste') NOT NULL,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
 cantidad DECIMAL(12,2) NOT NULL,
 usuarioResponsable INT,
 FOREIGN KEY (idProducto) REFERENCES producto(idProducto),
 FOREIGN KEY (usuarioResponsable) REFERENCES usuario(idUsuario)
);

CREATE TABLE recepcion (
 idRecepcion INT AUTO_INCREMENT PRIMARY KEY,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
 proveedor VARCHAR(150),
 usuarioResponsable INT,
 FOREIGN KEY (usuarioResponsable) REFERENCES usuario(idUsuario)
);

CREATE TABLE pedido (
 idPedido INT AUTO_INCREMENT PRIMARY KEY,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
 cliente VARCHAR(150),
 estado VARCHAR(50) DEFAULT 'En preparación'
);

CREATE TABLE reporte (
 idReporte INT AUTO_INCREMENT PRIMARY KEY,
 tipoReporte VARCHAR(100),
 fechaGeneracion DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE integracionERP (
 idIntegracion INT AUTO_INCREMENT PRIMARY KEY,
 tipoServicio VARCHAR(100),
 estadoConexion VARCHAR(50)
);

INSERT INTO rol(nombreRol,descripcion) VALUES
('Administrador','Acceso total al sistema'),
('Almacén','Operación de inventario'),
('Consulta','Acceso de lectura a reportes');

INSERT INTO usuario(nombre,apellido,correo,contrasena,rol,estado) VALUES
('Administrador','Sinergia','admin@sinergia.com','admin123',1,'Activo');
