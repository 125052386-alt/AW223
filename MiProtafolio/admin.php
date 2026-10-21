
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Zona Administración | Mi Portafolio</title>
</head>
<body class="pagina-admin">
    <header>
        <h1>Zona Administración</h1>
        <p>Mensajes Recibidos</p>
    </header>

    <nav aria-label="Navegación de administración">
        <a href="Index.php" aria-label="Regresar al portafolio" title="Regresar al portafolio">
            <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-6v-7h-4v7H4a1 1 0 0 1-1-1z"/></svg>
        </a>
    </nav>

    <main>
        <section aria-labelledby="titulo-mensajes">
            <h2 id="titulo-mensajes">Mensajes Recibidos</h2>
            <div class="tabla-contenedor">
                <table class="tabla-mensajes">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require 'consulta_mensajes.php';
                            $rsMensaje=consultaMensajes();
                            
                            while($arrmensaje=mysqli_fetch_array($rsMensaje)){

                                echo "<tr>
                                    <td>", $arrmensaje['nombre'], "</td>
                                    <td>", $arrmensaje['correo'], "</td>
                                    <td class='mensaje-celda'>",$arrmensaje['mensaje'],"</td>
                                    <td>", $arrmensaje['timeStaps'], "</td>
                                    <td>
                                        <div class='acciones-mensaje'>
                                        <a class='accion' href='editar.php?id=".$arrmensaje['id']." ' aria-label='Editar mensaje de ", htmlspecialchars($arrmensaje['nombre'], ENT_QUOTES, 'UTF-8'), "' title='Editar'>
                                            <svg aria-hidden='true' viewBox='0 0 24 24' width='18' height='18' fill='none' stroke='currentColor' stroke-width='2'><path d='M12 20h9'/><path d='M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z'/></svg>
                                        </a>
                                       <a class='accion-borrar' href='borrar_mensaje.php?id=".$arrmensaje['id']."' onclick='return confirm(\"Estas seguro de borrar este mensaje\");' aria-label='Borrar mensaje de ", htmlspecialchars($arrmensaje['nombre'], ENT_QUOTES, 'UTF-8'), "' title='Borrar'>
                                            <svg aria-hidden='true' viewBox='0 0 24 24' width='18' height='18' fill='none' stroke='currentColor' stroke-width='2'><path d='M3 6h18M8 6V4h8v2m3 0-1 14H6L5 6m4 4v6m6-6v6'/></svg>
                                       </a>
                                        </div>
                                    </td>
                                </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <p class="mensaje-vacio" hidden>No hay mensajes recibidos.</p>
        </section>
    </main>

    <footer>
        <p>© 2026 Mi Portafolio</p>
        <p>Práctica de Programación Web</p>
    </footer>
    <script src="codigojs/AlertUpdate.js"></script>
    <script src="codigojs/AlertBorrar.js"></script>
</body>
</html>
