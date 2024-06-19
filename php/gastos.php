<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Gastos</title>
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
        <header>
            <h1>Gestión de Gastos</h1>
        </header>
        <main>
            <section>

                <h2>Registrar Gasto</h2>
                <form id="addGastoForm">
                    <label for="fechaGasto">Fecha:</label>
                    <input type="date" id="fechaGasto" name="fechaGasto" required>
                    <label for="descripcionGasto">Descripción:</label>
                    <textarea id="descripcionGasto" name="descripcionGasto" rows="4" required></textarea>
                    <label for="montoGasto">Monto:</label>
                    <input type="number" step="0.01" id="montoGasto" name="montoGasto" required>
                    <label for="tipoGasto">Tipo:</label>
                    <input type="text" id="tipoGasto" name="tipoGasto" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Gasto</h2>
                <form id="searchGastoForm">
                    <label for="searchTipoGasto">Tipo de Gasto:</label>
                    <input type="text" id="searchTipoGasto" name="searchTipoGasto">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Gasto</h2>
                <form id="deleteGastoForm">
                    <label for="gastoID">ID del Gasto:</label>
                    <input type="number" id="gastoID" name="gastoID" required>
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
    <script src="js/gastos.js">
        document.getElementById('addGastoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar gasto
            alert('Gasto registrado');
        });

        document.getElementById('searchGastoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar gasto
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteGastoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar gasto
            alert('Gasto eliminado');
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