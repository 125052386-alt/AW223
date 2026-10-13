<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Editar</title>
</head>
<body>
    <header>
        <h1>Zona Administración</h1>
        <p>Formulario para editar</p>
    </header>

    <nav aria-label="Navegación de administración">
        <a href="admin.php" aria-label="Regresar al admin" title="Regresar al admin">
            <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l.73-.73"/></svg>
        </a>
        <a href="Index.html" aria-label="Regresar al portafolio" title="Regresar al portafolio">
            <svg aria-hidden="true" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-6v-7h-4v7H4a1 1 0 0 1-1-1z"/></svg>
        </a>
    </nav>
    <main>
            <section id="contacto">
            <h2>Editar Mensaje</h2>
            <form id="formcontacto">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input 
                        id="nombre" 
                        name="nombre" 
                        placeholder="Escribe tu nombre"
                    >
                    <small id="error-nombre"></small>
                </div>
                <div class="campo">
                    <label for="email">
                        Correo electrónico
                    </label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com">
                    <small id="error-email"></small>
                </div>
                <div class="campo">
                    <label for="mensaje">
                        Mensaje
                    </label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        rows="5" 
                        placeholder="Escribe tu mensaje">
                    </textarea>
                    <small id="mensajeE"></small>
                </div>
                 <button type="submit">
                   Actualizar mensaje
                </button>
            </form> 
        </section>
    </main>
    <footer>
        <p>2026 Mi portafolio Web</p>
        <p>Practica de programación web</p>
        <p>© Todos los derechos reservados</p>
    </footer>
</body>
</html>