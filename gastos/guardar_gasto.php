<?php
    require_once("conexion.php");

    $concepto = $_POST['concepto'];
    $monto = $_POST['monto'];
    $categoria = $_POST['categoria'];

    $sqlinsert="INSERT INTO gastos (concepto, monto, categoria) VALUES (?,?,?)";

    $stmt=$conexion->prepare($sqlinsert);
    $stmt->bind_param("sds",$concepto,$monto,$categoria);

    if($stmt->execute()) {
        echo "Mensaje guardado";
    } else {
        echo "Error al guardar el mensaje: ";
    }      

?>