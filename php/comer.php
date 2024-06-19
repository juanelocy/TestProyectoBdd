<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Comerciantes</title>
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
        <header>
            <h1>Gestión de Comerciantes</h1>
        </header>
        <main>
            <section>

                <h2>Agregar Comerciante</h2>
                <form id="addComercianteForm">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="datosContacto">Datos de Contacto:</label>
                    <textarea id="datosContacto" name="datosContacto" required></textarea>
                    <label for="tipoProductos">Tipo de Productos:</label>
                    <input type="text" id="tipoProductos" name="tipoProductos" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR COMERCIANTE</button>
                </form>
            </section>
            <section>
                <h2>Buscar Comerciante</h2>
                <form id="searchComercianteForm">
                    <label for="searchNombre">Nombre:</label>
                    <input type="text" id="searchNombre" name="searchNombre">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR COMERCIANTE</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Comerciante</h2>
                <form id="deleteComercianteForm">
                    <label for="comercianteID">ID del Comerciante:</label>
                    <input type="number" id="comercianteID" name="comercianteID" required>
                    <br>
                    <br>
                    <button class="btn eliminar" type="submit">ELIMINAR COMERCIANTE</button>
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
    <script src="js/comerciantes.js">
        document.getElementById('addComercianteForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar un comerciante
        });

        document.getElementById('searchComercianteForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar un comerciante
        });

        document.getElementById('deleteComercianteForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar un comerciante
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