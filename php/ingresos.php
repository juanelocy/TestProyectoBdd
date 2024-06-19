<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ingresos</title>
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
            <h1>Gestión de Ingresos</h1>
        </header>
        <main>
            <section>

                <h2>Registrar Ingreso</h2>
                <form id="addIngresoForm">
                    <label for="fechaIngreso">Fecha:</label>
                    <input type="date" id="fechaIngreso" name="fechaIngreso" required>
                    <label for="descripcionIngreso">Descripción:</label>
                    <textarea id="descripcionIngreso" name="descripcionIngreso" rows="4" required></textarea>
                    <label for="montoIngreso">Monto:</label>
                    <input type="number" step="0.01" id="montoIngreso" name="montoIngreso" required>
                    <label for="fuenteIngreso">Fuente:</label>
                    <input type="text" id="fuenteIngreso" name="fuenteIngreso" required>
                    <br>
                    <br>
                    <button class="btn volver" type="submit">AGREGAR</button>
                </form>
            </section>
            <section>
                <h2>Buscar Ingreso</h2>
                <form id="searchIngresoForm">
                    <label for="searchFuenteIngreso">Fuente:</label>
                    <input type="text" id="searchFuenteIngreso" name="searchFuenteIngreso">
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">BUSCAR</button>
                </form>
                <div id="searchResults"></div>
            </section>
            <section>
                <h2>Eliminar Ingreso</h2>
                <form id="deleteIngresoForm">
                    <label for="ingresoID">ID del Ingreso:</label>
                    <input type="number" id="ingresoID" name="ingresoID" required>
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
    <script src="js/ingresos.js">
        document.getElementById('addIngresoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar ingreso
            alert('Ingreso registrado');
        });

        document.getElementById('searchIngresoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para buscar ingreso
            document.getElementById('searchResults').innerHTML = 'Resultados de la búsqueda';
        });

        document.getElementById('deleteIngresoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para eliminar ingreso
            alert('Ingreso eliminado');
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