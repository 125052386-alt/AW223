<?php
    function mostrarMensaje($id)
    {
        require_once("conexion.php");

        $sqlmensaje = "SELECT * FROM mensajes WHERE id=?";

        $stmt = $conexion->prepare($sqlmensaje);
       
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
   

        $arrmensaje = $resultado->fetch_assoc();
        
        $stmt->close();

        
        return $arrmensaje;
    }
?>