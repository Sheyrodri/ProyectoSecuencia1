<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja de Helado</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <h2>Baja de Helado</h2>
        <form action="eliminar_helado.php" method="GET" class="w3-container">
            <label for="id">ID del Helado a Eliminar:</label>
            <input type="number" id="id" name="id" class="w3-input" required><br>
            <button type="submit" class="w3-button w3-red">Eliminar</button>
        </form>
    </div>
</body>
</html>
