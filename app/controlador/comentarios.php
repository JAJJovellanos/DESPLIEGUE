
<?php
    require_once("app/modelo/db/config.php");
    require_once("app/modelo/db/conexion.php");

    $conexion = new Conexion(Config::$host, Config::$user, Config::$pass, Config::$namedb);

    if(isset($_POST["nombre"])){
        $nombre = $_POST["nombre"];
        $comentario = $_POST["comentario"];
        $pagina = $_GET["ctl"];

        $conexion->guardarComentario($nombre, $comentario, $pagina);
        unset($_POST);
    }

    if(isset($_GET["ctl"])){

        $pagina = $_GET["ctl"];

        $comentarios = $conexion->getComentarios($pagina);

        require_once("app/vista/comentarios.inc");
        require_once("app/vista/formulario_comentario.inc");

    }

    $conexion->cerrarConexion();
?>
