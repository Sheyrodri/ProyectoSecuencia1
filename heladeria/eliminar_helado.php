<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $db->deleteHelado($id);
    
    // Redireccionar a la página de listado
    header("Location: listar_helados.php");
    exit();
} else {
    echo "Falta el ID del helado a eliminar.";
}
?>
