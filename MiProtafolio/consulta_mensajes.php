<?php
    function consultaMensajes()
    {
        require_once ("conexion.php");

        $selectMsj="SELECT * FROM mensajes";

        try{
            $rsmsj=mysqli_query($conexion,$selectMsj);
            mysqli_close($conexion);
            return $rsmsj;

        }catch(Exception $e){
            
            die("Algo paso al consultar la base de datos".$e ->getMessage());


        }

    }
?>