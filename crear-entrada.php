<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php' ?>
<?php require_once 'includes/lateral.php' ?>

<div id="principal">
    <h1>Crear entrada</h1>
    <p>Añade nuevas entradas al blog para que los usuarios pueden visualizarlas
    </p> <br>
    <form action="registrar-entrada.php" method="post">
        <label for="titulo">Titulo de videojuego:</label>
        <input type="text" name="titulo">
        <?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'titulo') : ''; ?>

        <label for="descripcion">Descripcion:</label>
        <textarea name="descripcion" id="" cols="30" rows="10"></textarea> <br>
        <?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'descripcion') : ''; ?>

        <label for="categoria">Categoria:</label>
        <select name="categoria" id="">categoria
            <option value="">Seleccione una categoria</option>
            <?php $categorias = listarCategoria($db); ?>
            <?php while($categoria = mysqli_fetch_assoc($categorias)): ?>
            <option value=<?=$categoria['id']?> ><?=$categoria['nombre']?></option>
            <?php endwhile;?>
        </select>
        <?php echo isset($_SESSION['errores-entrada']) ? mostrarError($_SESSION['errores-entrada'], 'categoria') : ''; ?>
        <input type="submit" value="Guardar">
    </form>
    <?php borrarError();?>
</div>

<?php require_once 'includes/pie.php' ?>