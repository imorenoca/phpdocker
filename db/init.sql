-- Crear base de datos
CREATE DATABASE IF NOT EXISTS test_db;

-- Usar la base de datos
USE test_db;

-- Crear tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL UNIQUE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar datos de ejemplo
INSERT INTO usuarios (nombre, correo) VALUES
('Juan Pérez', 'juan.perez@example.com'),
('María Gómez', 'maria.gomez@example.com'),
('Carlos Sánchez', 'carlos.sanchez@example.com');