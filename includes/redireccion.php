<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    if (!isset($_SESSION['verificado'])) {
        header("Location: index.php");
    }

?>