<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventarios</title>
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
        <header>
            <h1>Gestión de Inventarios</h1>
        </header>
        <main>
            <section>

                <h2>Agregar Inventario</h2>
                <form id="addInventarioForm">

                    <label for="idProducto">ID del Producto:</label>
                    <input type="number" id="idProducto" name="idProducto" required>
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" required>
                    <label for="fechaRegistro">Fecha de Registro:</label>
                    <input type="date" id="fechaRegistro" name="fechaRegistro" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Inventario</h2>
                <form id="searchInventarioForm">
                    <label for="searchIDProducto">ID del Producto:</label>
                    <input type="number" id="searchIDProducto" name="searchIDProducto">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Inventario</h2>
                <form id="deleteInventarioForm">
                    <label for="inventarioID">ID del Inventario:</label>
                    <input type="number" id="inventarioID" name="inventarioID" required>
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
    <script src="js/inventarios.js">
        document.getElementById('addInventarioForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar inventario
            alert('Inventario agregado');
        });

        document.getElementById('searchInventarioForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar inventario
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteInventarioForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar inventario
            alert('Inventario eliminado');
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