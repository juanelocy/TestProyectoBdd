<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ventas</title>
    <link rel="stylesheet" href="../css/stylo.css">
</head>

<body>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <header>
            <h1>Gestión de Ventas</h1>
        </header>
        <main>
            <section>

                <h2>Registrar Venta</h2>
                <form id="addVentaForm">

                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required>
                    <label for="idProducto">ID del Producto:</label>
                    <input type="number" id="idProducto" name="idProducto" required>
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" required>
                    <label for="montoTotal">Monto Total:</label>
                    <input type="number" step="0.01" id="montoTotal" name="montoTotal" required>
                    <label for="idComerciante">ID del Comerciante:</label>
                    <input type="number" id="idComerciante" name="idComerciante" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Venta</h2>
                <form id="searchVentaForm">
                    <label for="searchIDProducto">ID del Producto:</label>
                    <input type="number" id="searchIDProducto" name="searchIDProducto">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Venta</h2>
                <form id="deleteVentaForm">
                    <label for="ventaID">ID de la Venta:</label>
                    <input type="number" id="ventaID" name="ventaID" required>
                    <br>
                    <br>
                    <button class="btn eliminar" type="submit">ELIMINAR</button>
                </form>
            </section>
        </main>
        <br>
        <br>
        <div class="button-container">
            <li><a href="inventario.php"><button class="btn volver">VOLVER</button></a></li>
            <br>
            <li><a href="inicio.php"><button class="btn volver">INICIO</button></a></li>

        </div>
    </div>
    <script src="js/ventas.js">
        document.getElementById('addVentaForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para registrar venta
            alert('Venta registrada');
        });

        document.getElementById('searchVentaForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar venta
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteVentaForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar venta
            alert('Venta eliminada');
        });
    </script>
</body>

</html>