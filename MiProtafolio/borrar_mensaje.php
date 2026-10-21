<?php
    require_once("conexion.php");

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    
    $sqldelete = "DELETE FROM mensajes WHERE id=?";

    $stmt = $conexion->prepare($sqldelete);
    $stmt->bind_param("i",$id);

    if ($stmt->execute()) {
       header("Location: admin.php?estado=exitoBorrar");
    } else {
       header("Location: admin.php?estado=errorBorrar");
    }

    $stmt->close();
?>