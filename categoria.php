<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <?php $categoria = listarCategoriaPag($db, $_GET['id']) ?>
    <?php if ($categoria) : ?>
        <?php $cate = mysqli_fetch_assoc($categoria) ?>
        <?php if ($cate) : ?>
            <h1><?= $cate['nombre'] ?></h1>
        <?php endif; ?>

        <article class="entrada">
            <?php $entradas = conseguirEntrada($db, $_GET['id']) ?>
            <?php if (!empty($entradas)) : ?>
                <?php while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
                    <a href="entrada.php?id=<?= $entrada['id'] ?>">
                        <h2><?= $entrada['titulo'] ?></h2>
                    </a>
                    <p> <?= substr($entrada['descripcion'], 0, 180) . "..." ?></p>
                    <!--funcion substr para mostrar la cantidad de palabras-->
                <?php endwhile; ?>
            <?php else : ?>
                <div class="alerta">No hay Entradas </div>
            <?php endif; ?>

        </article>
    <?php else : ?>
        <div class="alerta">No existe La categoria</div>
    <?php endif; ?>
</div>
<!--Fin principal-->
<?php require_once 'includes/pie.php'; ?>