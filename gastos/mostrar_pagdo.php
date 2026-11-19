<?php
    require_once("conexion.php");

    $id= $_GET['id'];

    $sqlupdate = "UPDATE gastoS SET pagado = 1 WHERE id = ?";

    $stmt = $conexion->prepare($sqlupdate);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: Registro.php?estado=exitoActualizar");
    } else {
        header("Location: Registro.php?estado=errorActualizar");
    }
    exit;
?>