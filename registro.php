<?php  
    //COMPROBAR SI EXISTE
    if (isset($_POST)) {
        require_once 'includes/conexion.php';
    //inciar sesion
    if ($_SESSION) {
        session_start();
    }
        //GUARDAR LOS DATOS INGRESADOS A LA VARIABLE
        //IF CON OPERADOR TERNARIO
        $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre'])  : null;
        $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        
        //array de errores
        $errores = array();
        //VALIDACION
        if (!empty($nombre) && !is_numeric($nombre)) {
           $nombre_validado = true;
        }else{
            $nombre_validado = false;
            $errores['nombre'] = "No se pudo guardar el nombre";
        }

        if (!empty($apellidos) && !is_numeric($apellidos)) {
            $apellido_validado = true;
        }else{
            $apellido_validado = false;
            $errores['apellidos'] = "No se pudo guardar el apellido";
        }
        
        if (!empty($email) && filter_var($email , FILTER_VALIDATE_EMAIL)) {
            $email_validado = true;
        }else{
            $email_validado = false;
            $errores['email'] = "No se pudo guardar el email";
        }

        if (!empty($password)) {
            $password_validado = true;
        }else{
            $password_validado = false;
            $errores['password'] = "No se pudo guardar la contraseña";
        }

        //verificar si tiene errores
        $guardar_usuario = false;
        if (count($errores) == 0) {
            $guardar_usuario = true;

            //CIFRAR LA CONTRASEÑA
            $password_cifrado = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            
            //INSERTAR USUARIO EN LA TABLA USUARIOS A LA BD
            $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$email','$password_cifrado',CURDATE())";
            $guardado = mysqli_query($db,$sql);
            
            if ($guardado) {
                $_SESSION['completado']="Exito al registrar Usuario";
                
            }else{
                $_SESSION['errores']['falla']= "Error al registrar Ususario";
            }
        }else{
            $_SESSION['errores'] = $errores;
        }

        header('Location: index.php');
    }

?>