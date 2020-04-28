<?php 
    function mostrarError($errores, $campo){
        $alerta = '';
        if (isset($errores[$campo])) {
            $alerta = "<div class='alerta alerta-error'>".$errores[$campo]."</div>";
        }
        return $alerta;
    }

    function borrarError(){
        $retorno = false;
        unset($_SESSION['errores']);
        unset($_SESSION['completado']);
        unset($_SESSION['errores-entrada']);
        return $retorno;
    }

    function listarCategoria($conexion){
        //hago la consulta sql
        $sql = "SELECT * FROM categorias ORDER BY id ASC";
        $categorias = mysqli_query($conexion,$sql);
        //comprobar la consulta
        $nombres = array();
        if ($categorias && (mysqli_num_rows($categorias)>=1)) {
            $nombres = $categorias;
        }

        return $nombres;
    }

    function listarCategoriaPag($conexion, $id){
        //hago la consulta sql
        $sql = "SELECT nombre FROM categorias WHERE id = $id";
        $categorias = mysqli_query($conexion,$sql);
        //comprobar la consulta
        $nombres = array();
        if ($categorias && (mysqli_num_rows($categorias)>=1)) {
            $nombres = $categorias;
        }

        return $nombres;
    }

    function conseguirEntradas($conexion, $list = null){
        $sql = "SELECT e.*, c.nombre FROM entradas e INNER JOIN categorias c
        ON e.categoria_id = c.id
        ORDER BY e.id DESC ";

        if ($list) {
            $sql .= "LIMIT 4";
        }
        $entradas = mysqli_query($conexion,$sql);

        $nombres = array();
        if($entradas && (mysqli_num_rows($entradas)>=1)){
            $nombres = $entradas;
        }

        return $nombres;
    }

    function conseguirEntrada($conexion, $categoria_id){
        $sql = "SELECT e.*, c.nombre FROM entradas e INNER JOIN categorias c
        ON c.id = e.categoria_id
        WHERE e.categoria_id=$categoria_id";
        /*
        if ($list) {
            $sql .= "LIMIT 4";
        }*/
        $entradas = mysqli_query($conexion,$sql);
        $nombres = array();
        if($entradas && (mysqli_num_rows($entradas)>=1)){
            $nombres = $entradas;
        }

        return $nombres;
    }

    function buscarEntrada($conexion, $buscar){
        $sql = "SELECT e.*, c.nombre FROM entradas e INNER JOIN categorias c
        ON c.id = e.categoria_id
        WHERE titulo LIKE '%$buscar%'";
        /*
        if ($list) {
            $sql .= "LIMIT 4";
        }*/
        $entradas = mysqli_query($conexion,$sql);
        $nombres = array();
        if($entradas && (mysqli_num_rows($entradas)>=1)){
            $nombres = $entradas;
        }

        return $nombres;
    }

    function conseguirEntradaIndi($conexion, $id){
        $sql = "SELECT e.*, c.nombre as 'categoria', CONCAT(u.nombre,' ',u.apellidos) AS usuarios FROM entradas e 
        INNER JOIN categorias c ON c.id = e.categoria_id
        INNER JOIN usuarios u ON e.usuario_id = u.id
        WHERE e.id=$id";
        /*
        if ($list) {
            $sql .= "LIMIT 4";
        }*/
        $entradas = mysqli_query($conexion,$sql);
        $nombres = array();
        if($entradas && (mysqli_num_rows($entradas)>=1)){
            $nombres = $entradas;
        }

        return $nombres;
    }

?>