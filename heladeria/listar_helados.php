<?php
include 'db.php';

// Obtener los helados de la base de datos
$helados = $db->getAllHelados();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Helados</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <div class="w3-container">
        <h2>Listado de Helados</h2>
        <table class="w3-table w3-bordered">
            <thead>
                <tr class="w3-blue">
                    <th>ID</th>
                    <th>Sabor</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($helados) && is_array($helados)): ?>
                    <?php foreach ($helados as $helado): ?>
                        <tr>
                            <td><?php echo $helado['id']; ?></td>
                            <td><?php echo $helado['flavor']; ?></td>
                            <td><?php echo $helado['description']; ?></td>
                            <td><?php echo $helado['price']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No hay helados disponibles</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
