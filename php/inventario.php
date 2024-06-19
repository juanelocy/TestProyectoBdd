<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Mercado</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Administración de Mercado</h1>
            <div class="menu-icon" onclick="toggleMenu()">
                &#9776;
            </div>
            <nav id="dropdown-menu" class="dropdown-menu">
                <ul>
                    <li>
                        <a href="gestion.php">Gestión de Espacios y Puestos de Venta</a>
                        <ul class="submenu">
                            <li><a href="puesto.php">Ingreso de puestos</a></li>
                            <li><a href="comer.php">Ingreso de Comerciante</a></li>
                            <li><a href="arre.php">Ingreso de Arrendamiento</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Inventario y Gestión de Productos</a>
                        <ul class="submenu">
                            <li><a href="productos.php">Ingreso de Productos</a></li>
                            <li><a href="in.php">Ingreso de Inventario</a></li>
                            <li><a href="ventas.php">Ventas del dia</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="finanzas.php">Transacciones y Finanzas</a>
                        <ul class="submenu">
                            <li><a href="pagos.php">Pagos</a></li>
                            <li><a href="gastos.php">Gastos</a></li>
                            <li><a href="ingresos.php">Ingresos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="mantenimiento.php">Mantenimiento</a>
                        <ul class="submenu">
                            <li><a href="man.php">Mantenimiento de Puestos</a></li>
                            <li><a href="insp.php">Inspeccion Puestos</a></li>
                            <li><a href="tmante.php">Tarea de Mantenimiento</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Gestión de Espacios y Puestos de Venta</h2>
            <table>
                <thead>
                    <tr>
                        <th>#Comerciante</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Nombre de Producto</th>
                        <th>Precio del Producto</th>
                        <th>Vendidos</th>
                        <th>Stock</th>
                        <th>Fecha Último Inventario</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Filas de la tabla, se llenarán dinámicamente -->
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="8">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <div class="button-container">
                <button class="btn eliminar">ELIMINAR PUESTO</button>
                <button class="btn agregar">AGREGAR PUESTO</button>
                <li><a href="inicio.php"><button class="btn volver">VOLVER</button></a></li>
                
            </div>
        </main>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('dropdown-menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        }
    </script>
</body>
</html>
