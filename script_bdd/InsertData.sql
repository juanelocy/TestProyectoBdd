-- Insertar datos en la tabla administrador
INSERT INTO Adminis (nombre, apellido, correo, contraseña) VALUES
('Gregory', 'Chevez', 'kgchevez@espe.edu.ec','kgchevez'),
('Juan', 'Yasig', 'jcyasig@espe.edu.ec', 'jcyasig'),
('Melany', 'Moreira', 'mrmoreira@espe.edu.ec', 'mrmoreira');

-- Insertar datos en la tabla Puestos
INSERT INTO Puestos (Ubicación, Estado, Tamaño, Precio_Alquiler) VALUES
('Zona A1', 'disponible', '10x10', 100.00),
('Zona A2', 'ocupado', '10x15', 150.00),
('Zona B1', 'en mantenimiento', '12x12', 120.00),
('Zona B2', 'disponible', '15x15', 200.00),
('Zona C1', 'ocupado', '8x8', 80.00);

-- Insertar datos en la tabla Comerciantes
INSERT INTO Comerciantes (Nombre, Datos_Contacto, Tipo_Productos) VALUES
('Comerciante A', '1234567890', 'Frutas'),
('Comerciante B', '2345678901', 'Verduras'),
('Comerciante C', '3456789012', 'Carnes'),
('Comerciante D', '4567890123', 'Pescado'),
('Comerciante E', '5678901234', 'Lácteos');

-- Insertar datos en la tabla Arrendamientos
INSERT INTO Arrendamientos (ID_Puesto, ID_Comerciante, Fecha_Inicio, Fecha_Fin, Monto) VALUES
(2, 1, '2024-01-01', '2024-06-30', 900.00),
(5, 2, '2024-02-01', '2024-07-31', 480.00),
(1, 3, '2024-03-01', '2024-08-31', 600.00),
(3, 4, '2024-04-01', '2024-09-30', 720.00),
(4, 5, '2024-05-01', '2024-10-31', 1000.00);

-- Insertar datos en la tabla Productos
INSERT INTO Productos (Nombre, Categoría, Precio, Stock, Fecha_Entrada, Fecha_Caducidad, ID_Comerciante) VALUES
('Manzanas', 'Frutas', 2.50, 100, '2024-06-01', '2024-07-01', 1),
('Lechugas', 'Verduras', 1.50, 200, '2024-06-05', '2024-07-15', 2),
('Carne de Res', 'Carnes', 8.00, 50, '2024-06-10', '2024-06-25', 3),
('Pescado', 'Pescado', 10.00, 30, '2024-06-12', '2024-06-20', 4),
('Queso', 'Lácteos', 5.00, 75, '2024-06-15', '2024-07-15', 5);

-- Insertar datos en la tabla Inventarios
INSERT INTO Inventarios (ID_Producto, Cantidad, Fecha_Registro) VALUES
(1, 100, '2024-06-01'),
(2, 200, '2024-06-05'),
(3, 50, '2024-06-10'),
(4, 30, '2024-06-12'),
(5, 75, '2024-06-15');

-- Insertar datos en la tabla Ventas
INSERT INTO Ventas (Fecha, ID_Producto, Cantidad, Monto_Total, ID_Comerciante) VALUES
('2024-06-01', 1, 10, 25.00, 1),
('2024-06-02', 2, 15, 22.50, 2),
('2024-06-03', 3, 5, 40.00, 3),
('2024-06-04', 4, 3, 30.00, 4),
('2024-06-05', 5, 8, 40.00, 5);

-- Insertar datos en la tabla Pagos
INSERT INTO Pagos (ID_Arrendamiento, Fecha, Monto, Método_Pago) VALUES
(1, '2024-06-01', 150.00, 'Tarjeta de Crédito'),
(2, '2024-06-05', 80.00, 'Efectivo'),
(3, '2024-06-10', 100.00, 'Transferencia Bancaria'),
(4, '2024-06-15', 120.00, 'Tarjeta de Débito'),
(5, '2024-06-20', 200.00, 'PayPal');

-- Insertar datos en la tabla Gastos
INSERT INTO Gastos (Fecha, Descripción, Monto, Tipo) VALUES
('2024-06-01', 'Reparación de luces', 50.00, 'mantenimiento'),
('2024-06-05', 'Limpieza general', 30.00, 'operativo'),
('2024-06-10', 'Publicidad', 100.00, 'operativo'),
('2024-06-15', 'Reparación de techo', 200.00, 'mantenimiento'),
('2024-06-20', 'Seguridad adicional', 150.00, 'operativo');

-- Insertar datos en la tabla Ingresos
INSERT INTO Ingresos (Fecha, Descripción, Monto, Fuente) VALUES
('2024-06-01', 'Venta de productos', 500.00, 'ventas'),
('2024-06-05', 'Pago de arrendamiento', 150.00, 'arrendamientos'),
('2024-06-10', 'Venta de productos', 400.00, 'ventas'),
('2024-06-15', 'Pago de arrendamiento', 100.00, 'arrendamientos'),
('2024-06-20', 'Venta de productos', 600.00, 'ventas');

-- Insertar datos en la tabla Inspecciones
INSERT INTO Inspecciones (Fecha, ID_Puesto, Resultado) VALUES
('2024-06-01', 1, 'satisfactorio'),
('2024-06-05', 2, 'necesita reparación'),
('2024-06-10', 3, 'satisfactorio'),
('2024-06-15', 4, 'necesita limpieza'),
('2024-06-20', 5, 'satisfactorio');

-- Insertar datos en la tabla Mantenimiento con las relaciones
INSERT INTO Mantenimiento (Fecha, Descripción, Estado, ID_Puesto) VALUES
('2024-06-01', 'Reparación de luces', 'completado', 1),
('2024-06-05', 'Reparación de techo', 'en progreso', 2),
('2024-06-10', 'Pintura de paredes', 'programado', 3),
('2024-06-15', 'Reparación de puertas', 'completado', 4),
('2024-06-20', 'Mantenimiento de baños', 'en progreso', 5);

-- Insertar datos en la tabla TareasMantenimiento
INSERT INTO tareas_mantenimiento (Descripción, Fecha_Programada, Fecha_Realizacion, ID_Mantenimiento) VALUES
('Cambiar focos', '2024-06-01', '2024-06-02', 1),
('Reparar goteras', '2024-06-05', NULL, 2),
('Pintar muros', '2024-06-10', '2024-06-11', 3),
('Arreglar cerraduras', '2024-06-15', '2024-06-16', 4),
('Limpiar drenajes', '2024-06-20', NULL, 5);