<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Mantenimiento</title>
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

            <h1>Gestión de Mantenimiento</h1>
        </header>
        <main>
            <section>

                <h2>Registrar Mantenimiento</h2>
                <form id="addMantenimientoForm">
                    <label for="fechaMantenimiento">Fecha:</label>
                    <input type="date" id="fechaMantenimiento" name="fechaMantenimiento" required>
                    <label for="descripcionMantenimiento">Descripción:</label>
                    <textarea id="descripcionMantenimiento" name="descripcionMantenimiento" rows="4"
                        required></textarea>
                    <label for="estadoMantenimiento">Estado:</label>
                    <input type="text" id="estadoMantenimiento" name="estadoMantenimiento" required>
                    <label for="idPuesto">ID del Puesto:</label>
                    <input type="number" id="idPuesto" name="idPuesto" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Mantenimiento</h2>
                <form id="searchMantenimientoForm">
                    <label for="searchIDPuesto">ID del Puesto:</label>
                    <input type="number" id="searchIDPuesto" name="searchIDPuesto">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Mantenimiento</h2>
                <form id="deleteMantenimientoForm">
                    <label for="mantenimientoID">ID del Mantenimiento:</label>
                    <input type="number" id="mantenimientoID" name="mantenimientoID" required>
                    <br>
                    <br>
                    <button class="btn eliminar" type="submit">ELIMINAR</button>
                </form>
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
    <script src="js/mantenimiento.js">
        document.getElementById('addMantenimientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar mantenimiento
            alert('Mantenimiento registrado');
        });

        document.getElementById('searchMantenimientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar mantenimiento
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteMantenimientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar mantenimiento
            alert('Mantenimiento eliminado');
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