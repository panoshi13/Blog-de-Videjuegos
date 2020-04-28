<?php require_once 'helpers.php'; ?>
<!--BARRA LATERAL-->
<aside id="sidebar">
    <div id="buscador" class="bloque">
        <h3>Buscar</h3>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <?php if (isset($_SESSION['verificado'])) : ?>
        <div id="usuario-logueado" class='bloque'>
            <h3><?php echo "Bienvenido, " . $_SESSION['verificado']['nombre'] . " " . $_SESSION['verificado']['apellidos'] ?></h3>
            <!--Botones-->
            <a href="crear-entrada.php" class="boton boton-verde">Crear entradas</a>
            <a href="crear-categoria.php" class="boton">Crear categorias</a>
            <a href="modificar-datos.php" class="boton boton-naranja">Mis datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['verificado'])) : ?>

        <div id="login" class="bloque">
            <?php if (isset($_SESSION['error-login'])) : ?>
                <div class='alerta alerta-error'>
                    <?php echo $_SESSION['error-login'] ?>
                </div>
            <?php endif; ?>


            <h3>Identificate</h3>
            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="password">

                <input type="submit" value="Entrar">
            </form>
        </div>

        <div id="register" class="bloque">
            <h3>Registrate</h3>

            <?php if (isset($_SESSION['completado'])) : ?>
                <?php echo "<div class='alerta'>" . $_SESSION['completado'] . "</div>"; ?>
            <?php elseif (isset($_SESSION['errores']['falla'])) : ?>
                <?php echo "<div class='alerta alerta-error'>" . $_SESSION['errores']['falla'] . "</div>"; ?>
            <?php endif; ?>

            <form action="registro.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

                <label for="password">Contraseña</label>
                <input type="password" name="password">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                <input type="submit" value="Registrar">
            </form>
            <?php borrarError(); ?>
        </div>
    <?php endif; ?>
</aside>