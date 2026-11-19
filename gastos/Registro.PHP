<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Gastos</title>
</head>
<body>
        <h2>Contacto</h2>
            <form id="formgasto" action="guardar_gasto.php" method="post">
                <div class="campo">
                    <label for="nombre">Concepto</label>
                    <input 
                        type="text" 
                        id="concepto" 
                        name="concepto" 
                        placeholder="Concepto"
                    >
                </div>
                <div class="campo">
                    <label for="monto">
                        monto
                    </label>
                    <input type="text" id="monto" name="monto" placeholder="Monto">
                    <small id="error-email"></small>
                </div>
                <div class="campo">
                    <label for="mensaje">
                        Categoria
                    </label>
                    <input 
                        type="text" 
                        id="categoria" 
                        name="categoria" 
                        placeholder="Categoria"
                    >
                </div>
                 <button type="submit">
                    Enviar mensaje
                </button>
            </form> 
        </section>
        <section>
                <div class="tabla-contenedor">
                <table class="tabla-gastos">
                    <thead>
                        <tr>
                            <th scope="col">Concepto</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'consulta_gastos.php';
                            $rsMensaje=ConsultaGastos();
                            
                            while($arrmensaje=mysqli_fetch_array($rsMensaje)){

                                echo "<tr>
                                    <td>", $arrmensaje['concepto'], "</td>
                                    <td>", $arrmensaje['monto'], "</td>
                                    <td>",$arrmensaje['categoria'],"</td>
                                    <td>",$arrmensaje['pagado'],"</td>
                                    <td>", $arrmensaje['fecha'], "</td>

                                    <td class='acciones-mensaje'>
                                        <a class='accion' href='mostrar_pagdo.php?=id
                                        ' type='submit'>
                                            Marcar Pagado
                                        </a>
                                        </td>
                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <p class="mensaje-vacio" hidden>No hay mensajes recibidos.</p>
        </section>

    
</body>
</html>