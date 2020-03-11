<?php 
    if (isset($_POST)) {
        require_once 'includes/conexion.php';
        //guardamos los datos a la variable
        $categoria = isset($_POST['categoria']) ? mysqli_real_escape_string($db, $_POST['categoria']) : false;

        //array de errores
        $errores = array();
        //Validacion de datos
        if (!empty($categoria) && !is_numeric($categoria) && !preg_match("/[0-9]/",$categoria)) {
            //si esta completado..
            $categoria_estado = true;
        }else{
            $categoria_estado = false;
            $errores['categoria'] = "Los caracteres son unicamente letras";
        }

        //comprobar si no hay errores
        if(count($errores) == 0){
        //sentencia sql para ingresar a la base de datos
            
        $sql = "INSERT INTO categorias VALUES (NULL, '$categoria')";
        $execute = mysqli_query($db,$sql);
        }

        header("Location: index.php");
    }

    
?>