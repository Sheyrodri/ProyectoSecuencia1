<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heladeria</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            background-image: url('https://c4.wallpaperflare.com/wallpaper/485/724/987/bolas-comida-helados-postres-wallpaper-preview.jpg'); /* Cambia la URL por la imagen de fondo que desees */
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .title {
            font-size: 48px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .menu {
            width: 300px;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .menu ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .menu ul li {
            margin-bottom: 10px;
        }

        .menu ul li a {
            display: block;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">HELADERIA</div>
        <div class="menu">
            <ul class="w3-ul">
                <li><a href="listar_helados.php">Listado de Helados</a></li>
                <li><a href="alta_helado.php">Alta de Helado</a></li>
                <li><a href="baja_helado.php">Baja de Helado</a></li>
                <li><a href="actualizacion_helado.php">Actualización de Helado</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
