<?php
    //incluir la conexion
    require_once 'includes/conexion.php';
    //Guardar los datos
    if ($_POST) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        //consultar el usuario con la base de datos registrada y comprobar si coinciden
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $query = mysqli_query($db,$sql);
        
        //asegurar que la sentencia es ejectutada y que devuelva una fila
        if ($query && mysqli_num_rows($query)==1){
            $usuario = mysqli_fetch_assoc($query);

            //comparar contraseñas
            $password_verificado = password_verify($password,$usuario['password']);
            if ($password_verificado){
                //utilizar una sesion para guardar los datos del usuario logueado
                $_SESSION['verificado'] = $usuario;
                if (isset($_SESSION['error-login'])) {
                    unset($_SESSION['error-login']);
                }

            }else{
                //si algo falla al enviar una sesion con el fallo
                $_SESSION['error-login']="Error al logearse";
            }
        }
        else {
            //mensaje de error
            $_SESSION['error-login']="Error al logearse";
        }
    
    }
    header("Location: index.php");
?>