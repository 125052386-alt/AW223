<?php
    require_once("conexion.php");

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sqlinsert="INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?,?,?)";

    $stmt=$conexion->prepare($sqlinsert);
    $stmt->bind_param("sss",$nombre,$email,$mensaje);

    if($stmt->execute()) {
        echo "Mensaje guardado";
    } else {
        echo "Error al guardar el mensaje: ";
    }      

?>