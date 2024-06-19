<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Puestos</title>
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
            <h1>Gestión de Puestos</h1>
        </header>
        <main>
            <section>
                <h2>Agregar Puesto</h2>
                <form id="addPuestoForm">

                    <label for="ubicacion">Ubicación:</label>
                    <input type="text" id="ubicacion" name="ubicacion" required>
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" required>
                    <label for="tamano">Tamaño:</label>
                    <input type="text" id="tamano" name="tamano" required>
                    <label for="precioAlquiler">Precio de Alquiler:</label>
                    <input type="number" step="0.01" id="precioAlquiler" name="precioAlquiler" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR PUESTO</button>
                </form>
            </section>
            <br>
            <section>
                <h2>Buscar Puesto</h2>
                <form id="searchPuestoForm">
                    <label for="searchUbicacion">Ubicación:</label>
                    <input type="text" id="searchUbicacion" name="searchUbicacion">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR PUESTO</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <br>
            <section>
                <h2>Eliminar Puesto</h2>
                <form id="deletePuestoForm">
                    <label for="puestoID">ID del Puesto:</label>
                    <input type="number" id="puestoID" name="puestoID" required>
                    <br>
                    <br>
                    <button class="btn eliminar" type="submit">ELIMINAR PUESTO</button>
                </form>
            </section>
        </main>
        <br>
        <br>
        <div class="button-container">
            <li><a href="gestion.php"><button class="btn volver">VOLVER</button></a></li>
            <br>
            <br>
            <li><a href="inicio.php"><button class="btn volver">INICIO</button></a></li>

        </div>
    </div>
    <script>

        document.getElementById('addPuestoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar un puesto
        });

        document.getElementById('searchPuestoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar un puesto
        });

        document.getElementById('deletePuestoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar un puesto
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

</html>