<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tareas de Mantenimiento</title>
    <link rel="stylesheet" href="../css/stylo.css">
</head>

<body>
    <div class="container">
        <br>
        <br>
        <br>
        <header>
            <h1>Gestión de Tareas de Mantenimiento</h1>
        </header>
        <main>
            <section>
                <h2>Registrar Tarea de Mantenimiento</h2>
                <form id="addTareaMantenimientoForm">
                    <label for="descripcionTarea">Descripción:</label>
                    <textarea id="descripcionTarea" name="descripcionTarea" rows="4" required></textarea>
                    <label for="fechaProgramada">Fecha Programada:</label>
                    <input type="date" id="fechaProgramada" name="fechaProgramada" required>
                    <label for="fechaRealizacion">Fecha de Realización:</label>
                    <input type="date" id="fechaRealizacion" name="fechaRealizacion">
                    <label for="idMantenimiento">ID del Mantenimiento:</label>
                    <input type="number" id="idMantenimiento" name="idMantenimiento" required>
                    <br>
                    <br>
                    <button class="btn agregar" type="submit">REGISTRAR</button>
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
    <script src="js/tareas_mantenimiento.js">
        document.getElementById('addTareaMantenimientoForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Lógica para agregar tarea de mantenimiento
            alert('Tarea de mantenimiento registrada');
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