-- Eliminar tablas si existen
DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'Adminis') THEN
        DROP TABLE IF EXISTS Adminis CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'puestos') THEN
        DROP TABLE IF EXISTS puestos CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'comerciantes') THEN
        DROP TABLE IF EXISTS comerciantes CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'arrendamientos') THEN
        DROP TABLE IF EXISTS arrendamientos CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'productos') THEN
        DROP TABLE IF EXISTS productos CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'inventarios') THEN
        DROP TABLE IF EXISTS inventarios CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'ventas') THEN
        DROP TABLE IF EXISTS ventas CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'pagos') THEN
        DROP TABLE IF EXISTS pagos CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'gastos') THEN
        DROP TABLE IF EXISTS gastos CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'ingresos') THEN
        DROP TABLE IF EXISTS ingresos CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'mantenimiento') THEN
        DROP TABLE IF EXISTS mantenimiento CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'inspecciones') THEN
        DROP TABLE IF EXISTS inspecciones CASCADE;
    END IF;
END $$;

DO $$ BEGIN
    IF EXISTS (SELECT 1 FROM pg_tables WHERE tablename = 'tareas_mantenimiento') THEN
        DROP TABLE IF EXISTS tareas_mantenimiento CASCADE;
    END IF;
END $$;

-- Tabla Inicio Sesion Adminitrador
CREATE TABLE Adminis (
    ID_Admin SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(20),
    correo VARCHAR(50),
    contraseña VARCHAR(50)
);

-- Tabla Puestos
CREATE TABLE Puestos (
    ID_Puesto SERIAL PRIMARY KEY,
    Ubicación VARCHAR(100),
    Estado VARCHAR(20),
    Tamaño VARCHAR(50),
    Precio_Alquiler DECIMAL(10, 2)
);

-- Tabla Comerciantes
CREATE TABLE Comerciantes (
    ID_Comerciante SERIAL PRIMARY KEY,
    Nombre VARCHAR(100),
    Datos_Contacto TEXT,
    Tipo_Productos VARCHAR(100)
);

-- Tabla Arrendamientos
CREATE TABLE Arrendamientos (
    ID_Arrendamiento SERIAL PRIMARY KEY,
    ID_Puesto INT REFERENCES Puestos(ID_Puesto),
    ID_Comerciante INT REFERENCES Comerciantes(ID_Comerciante),
    Fecha_Inicio DATE,
    Fecha_Fin DATE,
    Monto DECIMAL(10, 2)
);

-- Funcionalidad 2: Inventario y Gestión de Productos

-- Tabla Productos
CREATE TABLE Productos (
    ID_Producto SERIAL PRIMARY KEY,
    Nombre VARCHAR(100),
    Categoría VARCHAR(50),
    Precio DECIMAL(10, 2),
    Stock INT,
    Fecha_Entrada DATE,
    Fecha_Caducidad DATE,
    ID_Comerciante INT REFERENCES Comerciantes(ID_Comerciante)
);

-- Tabla Inventarios
CREATE TABLE Inventarios (
    ID_Inventario SERIAL PRIMARY KEY,
    ID_Producto INT REFERENCES Productos(ID_Producto),
    Cantidad INT,
    Fecha_Registro DATE
);

-- Tabla Ventas
CREATE TABLE Ventas (
    ID_Venta SERIAL PRIMARY KEY,
    Fecha DATE,
    ID_Producto INT REFERENCES Productos(ID_Producto),
    Cantidad INT,
    Monto_Total DECIMAL(10, 2),
    ID_Comerciante INT REFERENCES Comerciantes(ID_Comerciante)
);

-- Funcionalidad 3: Transacciones y Finanzas

-- Tabla Pagos
CREATE TABLE Pagos (
    ID_Pago SERIAL PRIMARY KEY,
    ID_Arrendamiento INT REFERENCES Arrendamientos(ID_Arrendamiento),
    Fecha DATE,
    Monto DECIMAL(10, 2),
    Método_Pago VARCHAR(50)
);

-- Tabla Gastos
CREATE TABLE Gastos (
    ID_Gasto SERIAL PRIMARY KEY,
    Fecha DATE,
    Descripción TEXT,
    Monto DECIMAL(10, 2),
    Tipo VARCHAR(50)
);

-- Tabla Ingresos
CREATE TABLE Ingresos (
    ID_Ingreso SERIAL PRIMARY KEY,
    Fecha DATE,
    Descripción TEXT,
    Monto DECIMAL(10, 2),
    Fuente VARCHAR(50)
);

-- Funcionalidad 4: Mantenimiento y Seguridad

-- Tabla Mantenimiento
CREATE TABLE Mantenimiento (
    ID_Mantenimiento SERIAL PRIMARY KEY,
    Fecha DATE,
    Descripción TEXT,
    Estado VARCHAR(20),
    ID_Puesto INT REFERENCES Puestos(ID_Puesto)
);

-- Tabla Inspecciones
CREATE TABLE Inspecciones (
    ID_Inspeccion SERIAL PRIMARY KEY,
    Fecha DATE,
    ID_Puesto INT REFERENCES Puestos(ID_Puesto),
    Resultado VARCHAR(50)
);

-- Tabla TareasMantenimiento
CREATE TABLE tareas_mantenimiento (
    ID_Tarea SERIAL PRIMARY KEY,
    Descripción TEXT,
    Fecha_Programada DATE,
    Fecha_Realizacion DATE,
    ID_Mantenimiento INT REFERENCES Mantenimiento(ID_Mantenimiento)
);