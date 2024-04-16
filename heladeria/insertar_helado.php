<?php
include 'db.php';

if(isset($_GET['flavor']) && isset($_GET['description']) && isset($_GET['price'])) {
    $flavor = $_GET['flavor'];
    $description = $_GET['description'];
    $price = $_GET['price'];

    $db->insertHelado($flavor, $description, $price);
    
    // Redireccionar a la página de listado
    header("Location: listar_helados.php");
    exit();
} else {
    echo "Faltan parámetros para realizar la inserción.";
}
?>
