<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Arrendamientos</title>
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
        <br>
        <br>
        <br>
        <header>
            <h1>Gestión de Arrendamientos</h1>
        </header>
        <main>
            <section>

                <h2>Agregar Arrendamiento</h2>
                <form id="addArrendamientoForm">

                    <label for="idPuesto">ID del Puesto:</label>
                    <input type="number" id="idPuesto" name="idPuesto" required>
                    <label for="idComerciante">ID del Comerciante:</label>
                    <input type="number" id="idComerciante" name="idComerciante" required>
                    <label for="fechaInicio">Fecha de Inicio:</label>
                    <input type="date" id="fechaInicio" name="fechaInicio" required>
                    <label for="fechaFin">Fecha de Fin:</label>
                    <input type="date" id="fechaFin" name="fechaFin" required>
                    <label for="monto">Monto:</label>
                    <input type="number" step="0.01" id="monto" name="monto" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Arrendamiento</h2>
                <form id="searchArrendamientoForm">
                    <label for="searchIDPuesto">ID del Puesto:</label>
                    <input type="number" id="searchIDPuesto" name="searchIDPuesto">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Arrendamiento</h2>
                <form id="deleteArrendamientoForm">
                    <label for="arrendamientoID">ID del Arrendamiento:</label>
                    <input type="number" id="arrendamientoID" name="arrendamientoID" required>
                    <br>
                    <br>
                    <button class="btn eliminar" type="submit">ELIMINAR</button>
                </form>
            </section>
        </main>
        <br>
        <br>
        <div class="button-container">
            <li><a href="gestion.php"><button class="btn volver">VOLVER</button></a></li>
            <br>
            <li><a href="inicio.php"><button class="btn volver">INICIO</button></a></li>

        </div>
    </div>
    <script src="js/arrendamientos.js">
        document.getElementById('addArrendamientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar arrendamiento
            alert('Arrendamiento agregado');
        });

        document.getElementById('searchArrendamientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar arrendamiento
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteArrendamientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar arrendamiento
            alert('Arrendamiento eliminado');
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