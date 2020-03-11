<?php  
    //COMPROBAR SI EXISTE
    if (isset($_POST)) {
        require_once 'includes/conexion.php';
    //inciar sesion
    if (!isset($_SESSION)) {
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
        if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
           $nombre_validado = true;
        }else{
            $nombre_validado = false;
            $errores['nombre'] = "No se pudo guardar el nombre";
        }

        if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)) {
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

        //verificar si no tiene errores
        $guardar_usuario = false;
        if (count($errores) == 0) {
            $usuario = $_SESSION['verificado'];
            $guardar_usuario = true;

            //comprobar si el email ya existe
            $sql = "SELECT email FROM usuarios WHERE email='$email'";
            $isset_email=mysqli_query($db,$sql);
            $isset_user=mysqli_fetch_assoc($isset_email);
            
            if (empty($isset_user)) {
                //MODIFICAR USUARIO EN LA TABLA USUARIOS A LA BD
                $sql = "UPDATE usuarios SET ".
                    "nombre =  '$nombre' ,".
                    "apellidos = '$apellidos' ,".
                    "email = '$email' ".
                    "WHERE id= ".$usuario['id'];
                
                $guardado = mysqli_query($db,$sql);
                // $user = mysqli_fetch_assoc($ejecucion);
                if ($guardado) {
                    //actualizar los datos
                    $_SESSION['verificado']['nombre'] = $nombre;
                    $_SESSION['verificado']['apellidos'] = $apellidos;
                    $_SESSION['verificado']['email'] = $email;
                    $_SESSION['completado']="Exito al registrar Usuario";
                }else{
                    $_SESSION['errores']['falla']= "Error al registrar Ususario";
                }
            }else{
                $_SESSION['errores']['falla']= "El correo ya existe";
            }


        }else{
            $_SESSION['errores'] = $errores;

        }

        header('Location: modificar-datos.php');
    }
