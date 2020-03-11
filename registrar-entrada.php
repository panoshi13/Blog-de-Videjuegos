<?php 
    require_once 'includes/conexion.php';

    //asignar las variables
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db,$_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db,$_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['verificado']['id'];

    $errores = array();

    //validacion
    if (!empty($titulo)) {
        $titulo_validado = true;
    }else{
        $titulo_validado = false;
        $errores['titulo'] = "Complete correctamente el titulo";
    }

    if (!empty($descripcion)) {
        $descripcion_validado = true;
    }else{
        $descripcion_validado = false;
        $errores['descripcion'] = "Complete correctamente la descripcion";
    }

    if (!empty($categoria)) {
        $categoria_validado = true;
    }else{
        $categoria_validado = false;
        $errores['categoria'] = "Seleccione una opcion";
    }
    
    //contar si hay errores
    if (count($errores)==0) {
        if (isset($_GET['editar'])) {
            $id_entrada=$_GET['editar'];
            $usuario_id=$_SESSION['verificado']['id'];
            $sql="UPDATE entradas SET titulo='$titulo',descripcion='$descripcion',categoria_id=$categoria
                    WHERE id=$id_entrada and usuario_id=$usuario_id";
            
        }else{
            $sql = "INSERT INTO entradas VALUES(null,$usuario, $categoria, '$titulo','$descripcion',CURDATE())";
        }
        
        $guardar = mysqli_query($db,$sql);
        header("Location: index.php");
    }else{
        $_SESSION['errores-entrada'] = $errores;
        header("Location: crear-entrada.php");
    }

    
    
?>