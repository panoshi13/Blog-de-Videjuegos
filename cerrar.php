<?php 
    session_start();

    if (isset($_SESSION['verificado'])) {
        session_destroy();
    }

    header("Location: index.php");
?>