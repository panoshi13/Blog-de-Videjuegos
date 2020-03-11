<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <?php $titulos = conseguirEntradaIndi($db, $_GET['id']) ?>
    <?php if ($titulos) : ?>
        <?php $titu = mysqli_fetch_assoc($titulos) ?>
        <?php if ($titu) : ?>
            <h1><?= $titu['titulo'] ?></h1>
        <?php endif; ?>


        <a href="categoria.php?id=<?= $titu['categoria_id'] ?>" ?>
            <h2 class="fecha"><?= $titu['categoria'] ?></h2>
        </a><br>
        <h4 class="fecha"><?= $titu['fecha'] . " | " .$titu['usuarios'] ?></h4>
        <p> <?= $titu['descripcion'] ?></p>

        <?php if (isset($_SESSION['verificado']) && $_SESSION['verificado']['id'] == $titu['usuario_id']) : ?>
            <a href="editar-entrada.php?id=<?=$titu['id']?>" class="boton boton-verde">Editar entrada</a>
            <a href="borrar-entrada.php?id=<?=$titu['id']?>" class="boton">Eliminar entrada</a>
        <?php endif; ?>

    <?php else : ?>
        <div class="alerta">No existe La categoria</div>
    <?php endif; ?>

</div>
<!--Fin principal-->
<?php require_once 'includes/pie.php'; ?>