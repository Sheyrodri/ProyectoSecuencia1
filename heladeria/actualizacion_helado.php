<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de Helado</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <h2>Actualización de Helado</h2>
        <form action="actualizar_helado.php" method="GET" class="w3-container">
            <label for="id">ID del Helado a Actualizar:</label>
            <input type="number" id="id" name="id" class="w3-input" required><br>
            <label for="flavor">Nuevo Sabor:</label>
            <input type="text" id="flavor" name="flavor" class="w3-input"><br>
            <label for="description">Nueva Descripción:</label><br>
            <textarea id="description" name="description" class="w3-input"></textarea><br>
            <label for="price">Nuevo Precio:</label>
            <input type="number" id="price" name="price" class="w3-input" step="0.01" min="0"><br>
            <button type="submit" class="w3-button w3-blue">Actualizar</button>
        </form>
    </div>
</body>
</html>
