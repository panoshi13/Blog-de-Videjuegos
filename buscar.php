<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
<!--CAJA PRINCIPAL-->
<div id="principal">
    <?php if (!empty($_POST['buscar'])) : ?>
        <h1>Resultado de: <?= $_POST['buscar'] ?></h1>

        <?php $entradas = buscarEntrada($db, $_POST['buscar']) ?>
        <?php if (!empty($entradas)) : ?>
            <?php while ($entrada = mysqli_fetch_assoc($entradas)) : ?>
                <article class="entrada">
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
    <?php else: ?>
        <?php header("location: index.php");?>
    <?php endif; ?>
</div>
<!--Fin principal-->
<?php require_once 'includes/pie.php'; ?>