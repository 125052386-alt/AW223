<?php
$mensajes = [
    [
        'id' => 1,
        'nombre' => 'Karen',
        'email' => 'karen@example.com',
        'mensaje' => 'Hola, me interesa tu portafolio.',
    ],
    [
        'id' => 2,
        'nombre' => 'Tony',
        'email' => 'tony@example.com',
        'mensaje' => 'Quisiera más información sobre tus proyectos.',
    ],
    [
        'id' => 3,
        'nombre' => 'Kevin',
        'email' => 'kevin@example.com',
        'mensaje' => 'No me interesa saber sobre tus proyectos.',
    ],
];

function mostrar($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}
?>
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
        <a href="Index.html" aria-label="Regresar al portafolio" title="Regresar al portafolio">
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
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mensajes as $mensaje) { ?>
                            <tr>
                                <td><?= $mensaje['id'] ?></td>
                                <td><?= mostrar($mensaje['nombre']) ?></td>
                                <td><?= mostrar($mensaje['email']) ?></td>
                                <td class="mensaje-celda"><?= mostrar($mensaje['mensaje']) ?></td>
                                <td>
                                    <div class="acciones-mensaje">
                                        <a class="accion" href="editar.php" aria-label="Editar mensaje de <?= mostrar($mensaje['nombre']) ?>" title="Editar">
                                            <svg aria-hidden="true" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z"/></svg>
                                        </a>
                                        <button class="accion-borrar" type="button" aria-label="Borrar mensaje de <?= mostrar($mensaje['nombre']) ?>" title="Borrar">
                                            <svg aria-hidden="true" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M8 6V4h8v2m3 0-1 14H6L5 6m4 4v6m6-6v6"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
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

</body>
</html>
