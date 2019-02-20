<?php

    class Conexion{

        private $conexion;

        function __construct($host,$user,$pass,$namedb){
            $this->conexion = new mysqli ($host, $user, $pass, $namedb);
        }

        function getComentarios($pagina){
            $sql = "SELECT * FROM comentarios WHERE pagina = ? ORDER BY fecha ASC";
            $stmt = $this->conexion->prepare($sql);

            $stmt->bind_param("s", $pagina);
            $stmt->execute();
            $resultado = $stmt->get_result();

            $arrayComentarios = [];

            while($fila = $resultado->fetch_assoc()){
                $arrayComentarios[$fila["id"]] = $fila;
            }
            $stmt->close();

            return $arrayComentarios;
        }

        function guardarComentario($nombre, $comentario, $pagina){
            
            $sql = "INSERT INTO comentarios (nombre, comentario, pagina) VALUES (?, ?, ?)";

            $stmt = $this->conexion->prepare($sql);
            $stmt->bind_param("sss", $nombre, $comentario, $pagina);
            $stmt->execute();
            $stmt->close();
        }

        function cerrarConexion(){
            $this->conexion->close();
        }
    }

?>