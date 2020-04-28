<?php require_once 'conexion.php'; ?>
<?php require_once 'helpers.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videjuegos</title>
    <link rel="stylesheet" text="text/css" href="./assets/css/style.css">
</head>

<body>
    <!--CABECERA-->
    <header id="cabecera">
        <!--LOGO-->
        <div id="logo">
            <a href="index.php">Blog de Videojuegos</a>
        </div>
        <!--MENU-->
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <?php $categorias = listarCategoria($db); ?>
                <?php while ($categoria = mysqli_fetch_assoc($categorias)) : ?>
                   <?php echo "<li><a href='categoria.php?id=".$categoria['id']."'>".$categoria['nombre']."</a></li>" ?> 
                <?php endwhile; ?>
                <li><a href="index.php">Sobre mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">