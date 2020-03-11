<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php' ?>
<?php require_once 'includes/lateral.php' ?>

<div id="principal" class="bloque">
    <h3>Registrate</h3>

    <?php if (isset($_SESSION['completado'])) : ?>
        <?php echo "<div class='alerta'>" . $_SESSION['completado'] . "</div>"; ?>
    <?php elseif (isset($_SESSION['errores']['falla'])) : ?>
        <?php echo "<div class='alerta alerta-error'>" . $_SESSION['errores']['falla'] . "</div>"; ?>
    <?php endif; ?>

    <form action="usuario-modificado.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?= $_SESSION['verificado']['nombre']; ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
        
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?= $_SESSION['verificado']['apellidos']; ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?= $_SESSION['verificado']['email']; ?>">
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

        <input type="submit" value="Registrar">
    </form>
    <?php borrarError(); ?>
</div>

<?php require_once 'includes/pie.php' ?>