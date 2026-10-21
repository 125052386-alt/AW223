<!-- En este apartado se deben actualizar los datos de cada usuario que mando un mensaje,
 por ejemplo si presiono el boton de actualizar de algun registro en especifico deben de aparecer los datos cargados de ese usuario,
 al intertan modificarlos me debe de permitir hacerlo y una vez que ya esten modificados debo de poder actualizarlos y el resultado se debe de ver 
 en la base de datos.
 Para esta funcion se debe de usuar un update y un select pasando los datos del fomulario segun el resgistro que elija -->

<?php
    require_once("conexion.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sqlupdate = "UPDATE mensajes SET nombre=?, correo=?, mensaje=? WHERE id=?";

    $stmt = $conexion->prepare($sqlupdate);
    $stmt->bind_param("sssi", $nombre, $email, $mensaje, $id);

    if ($stmt->execute()) {
        header("Location: admin.php?estado=exitoActualizar");
    } else {
        header("Location: admin.php?estado=errorActualizar");
    }
?>