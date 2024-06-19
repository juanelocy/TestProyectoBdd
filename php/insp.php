<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inspecciones</title>
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
        <header>

            <h1>Gestión de Inspecciones</h1>
        </header>
        <main>
            <section>
                <h2>Registrar Inspección</h2>
                <form id="addInspeccionForm">
                    <label for="fechaInspeccion">Fecha:</label>
                    <input type="date" id="fechaInspeccion" name="fechaInspeccion" required>
                    <label for="idPuestoInspeccion">ID del Puesto:</label>
                    <input type="number" id="idPuestoInspeccion" name="idPuestoInspeccion" required>
                    <label for="resultadoInspeccion">Resultado:</label>
                    <input type="text" id="resultadoInspeccion" name="resultadoInspeccion" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Inspección</h2>
                <form id="searchInspeccionForm">
                    <label for="searchIDPuestoInspeccion">ID del Puesto:</label>
                    <input type="number" id="searchIDPuestoInspeccion" name="searchIDPuestoInspeccion">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
        </main>
        <br>
        <br>
        <div class="button-container">
            <li><a href="mantenimiento.php"><button class="btn volver">VOLVER</button></a></li>
            <br>
            <li><a href="inicio.php"><button class="btn volver">INICIO</button></a></li>
        </div>
    </div>
    <script src="js/inspecciones.js">
        document.getElementById('addInspeccionForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar inspección
            alert('Inspección registrada');
        });

        document.getElementById('searchInspeccionForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar inspección
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
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