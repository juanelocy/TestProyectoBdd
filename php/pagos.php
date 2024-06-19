<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Pagos</title>
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
        <header>
            <h1>Gestión de Pagos</h1>
        </header>
        <main>
            <section>

                <h2>Registrar Pago</h2>
                <form id="addPagoForm">
                    <label for="idArrendamiento">ID del Arrendamiento:</label>
                    <input type="number" id="idArrendamiento" name="idArrendamiento" required>
                    <label for="fechaPago">Fecha de Pago:</label>
                    <input type="date" id="fechaPago" name="fechaPago" required>
                    <label for="montoPago">Monto:</label>
                    <input type="number" step="0.01" id="montoPago" name="montoPago" required>
                    <label for="metodoPago">Método de Pago:</label>
                    <input type="text" id="metodoPago" name="metodoPago" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Pago</h2>
                <form id="searchPagoForm">
                    <label for="searchIDArrendamiento">ID del Arrendamiento:</label>
                    <input type="number" id="searchIDArrendamiento" name="searchIDArrendamiento">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Pago</h2>
                <form id="deletePagoForm">
                    <label for="pagoID">ID del Pago:</label>
                    <input type="number" id="pagoID" name="pagoID" required>
                    <br>
                    <br>
                    <button class="btn eliminar" type="submit">ELIMINAR</button>
                </form>
            </section>
        </main>
        <br>
        <br>
        <div class="button-container">
            <li><a href="finanzas.php"><button class="btn volver">VOLVER</button></a></li>
            <br>
            <li><a href="inicio.php"><button class="btn volver">INICIO</button></a></li>

        </div>
    </div>
    <script src="js/pagos.js">
        document.getElementById('addPagoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar pago
            alert('Pago registrado');
        });

        document.getElementById('searchPagoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar pago
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deletePagoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar pago
            alert('Pago eliminado');
        });
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