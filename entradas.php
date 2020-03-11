<?php require_once 'includes/cabecera.php'; ?>
    <?php require_once 'includes/lateral.php'; ?>
    <!--CAJA PRINCIPAL-->
    <div id="principal">
        <h1>Todas las entradas</h1>
        <article class="entrada">
            <?php $entradas = conseguirEntradas($db , false) ?>
            <?php while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
                <a href="entrada.php?id=<?=$entrada['id']?>">
                <h2><?= $entrada['titulo'] ?></h2>
                </a>
                <span class="fecha"><?= $entrada['nombre']." | ".$entrada['fecha'] ?></span>
                <p> <?= substr($entrada['descripcion'],0,180)."..." ?></p><!--funcion substr para mostrar la cantidad de palabras-->
            <?php endwhile; ?>
        </article>
    </div>
    <!--Fin principal-->
    <?php require_once 'includes/pie.php'; ?>