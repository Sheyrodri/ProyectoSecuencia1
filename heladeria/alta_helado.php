<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Helado</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <h2>Alta de Helado</h2>
        <form action="insertar_helado.php" method="GET" class="w3-container w3-card-4">
            <label for="flavor">Sabor:</label>
            <input type="text" id="flavor" name="flavor" class="w3-input" required><br>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" class="w3-input"></textarea><br>
            <label for="price">Precio:</label>
            <input type="number" id="price" name="price" class="w3-input" step="0.01" min="0" required><br>
            <button type="submit" class="w3-button w3-blue">Agregar</button>
        </form>
    </div>
</body>
</html>