<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <header>
            <h1>Gestión de Productos</h1>
        </header>
        <main>
            <section>
                <h2>Agregar Producto</h2>
                <form id="addProductoForm">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="categoria">Categoría:</label>
                    <input type="text" id="categoria" name="categoria" required>
                    <label for="precio">Precio:</label>
                    <input type="number" step="0.01" id="precio" name="precio" required>
                    <label for="stock">Stock:</label>
                    <input type="number" id="stock" name="stock" required>
                    <label for="fechaEntrada">Fecha de Entrada:</label>
                    <input type="date" id="fechaEntrada" name="fechaEntrada" required>
                    <label for="fechaCaducidad">Fecha de Caducidad:</label>
                    <input type="date" id="fechaCaducidad" name="fechaCaducidad">
                    <label for="idComerciante">ID del Comerciante:</label>
                    <input type="number" id="idComerciante" name="idComerciante" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Producto</h2>
                <form id="searchProductoForm">
                    <label for="searchNombre">Nombre:</label>
                    <input type="text" id="searchNombre" name="searchNombre">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Producto</h2>
                <form id="deleteProductoForm">
                    <label for="productoID">ID del Producto:</label>
                    <input type="number" id="productoID" name="productoID" required>
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
    <script src="js/productos.js">
        document.getElementById('addProductoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar producto
            alert('Producto agregado');
        });

        document.getElementById('searchProductoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar producto
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteProductoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar producto
            alert('Producto eliminado');
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