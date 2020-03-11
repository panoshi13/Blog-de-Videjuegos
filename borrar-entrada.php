<?php 
    require_once 'includes/conexion.php';

    if (isset($_SESSION['verificado']) && isset($_GET['id'])) {
        $entrada_id = $_SESSION['verificado']['id'];
        $id = $_GET['id'];

        $sql = "DELETE FROM entradas WHERE usuario_id=$entrada_id AND id=$id";
        $execute=mysqli_query($db,$sql);
        

    }  
    Header("Location: index.php");
?>