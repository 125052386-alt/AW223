<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mi Portafolio</title>
    <!-- <script src="codigojs/cambios.js" defer></script> -->
</head>
<body>
    <!-- shift+alt+a sirve para comentar de manera rapida -->
    <header>
       <h1>Mi portafolio</h1> 
       <p id="texto-viejo">Bienvenido a mi sitio web personal</p>
      <!--  <button type="button" id="cambio-mensaje">Cambiar Mensaje</button> -->
    </header>
    <nav>
        <a href="#inicio">Inicio</a>
        <a href="#sb">Sobre Mi</a>
        <a href="#Habilidades">Habilidades</a>
        <a href="#Proyectos">Proyectos</a>
        <a href="#contacto">Contacto</a>
        <a href="admin.php">Admin</a>
    </nav>
    <main>
        <section id="inicio" class="seccion-inicio">
            <div class="seccion-contenido">
                <h2>Hola, soy Karen Hernández</h2>
                <p>Soy Estudiante de ITIID en la escuela upq y ahora estóy aprendioendo desarrollo de aplicaciones Web</p>
                <a href=""class="boton">Ver mis proyectos</a>
            </div>
        </section>
        <!-- sobre mi -->
        <section Id=sb>
            <h2>Sobre Mi</h2>
            <div class="sobre-mi-contenido"> 
                <img src="img.jpg" alt="Foto de Karen Hernández">
                <div>
                    <p>Esta soy yo</p>
                    <p>En esta practica estoy aprendiendo HTML y CSS</p>
                </div>

            </div>
        </section>
       <!--  Seccion de mis habilidades -->
        <section id="Habilidades">
            <h2>Mis Habilidades</h2>
            <div>
                <ul id="habilidades" class="lista-habilidades">
                    <li>JAVA</li>
                    <li>PSINT</li>
                    <li>C++</li>
                    <li>Packet Tracer</li>
                    <li>MySQL</li>
                    <li>SCRATCH</li>
                    <li>PHP</li>
                </ul>
            </div>
<!--             <div class="controles-habilidades">
                <button type="button" id="cambiar-color">Cambiar color</button>
                <button type="button" id="cambiar-tipografia">Cambiar tipografía</button>
            </div> -->
        </section>
        <!--Seccion de habilidades-->
        <section id="Proyectos">
            <h2>Proyectos</h2>
            <div class="contenedor-proyectos">
                <article class="proyectos">
                    <H3>SISTEMA DE RECICLAJE DE RESIDUOS</H3>
                    <p>Sistema que monitorea y guarda los puntos en donde se pueden tiras los residuos para poder ser reciclados</p>
                    <a href="">Ver Proyectos</a>
                </article>
                <article class="proyectos">
                    <H3>SISTEMA DE RECICLAJE</H3>
                    <p>Sistemas que cuidan los productos reciclados</p>
                    <a href="">Ver Proyectos</a>
                </article>
            </div>
        </section>
        <section id="contacto">
            <h2>Contacto</h2>
            <form id="formcontacto" action="guardar_mensaje.php" method="post">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input 
                        type="text" 
                        id="nombre" 
                        name="nombre" 
                        placeholder="Escribe tu nombre"
                        required
                    >
                    <!-- <small id="error-nombre"></small> -->
                </div>
                <div class="campo">
                    <label for="email">
                        Correo electrónico
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="ejemplo@correo.com"
                        required
                    >
                   <!--  <small id="error-email"></small> -->
                </div>
                <div class="campo">
                    <label for="mensaje">
                        Mensaje
                    </label>
                    <textarea
                        id="mensaje" 
                        name="mensaje" 
                        rows="5" 
                        placeholder="Escribe un mensaje"
                        required
                    ></textarea>
                   <!--  <small id="mensajeE"></small> -->
                </div>
                 <button type="submit">
                    Enviar mensaje
                </button>
            </form> 
        </section>
    </main>
    <footer>
        <p>2026 Mi portafolio Web</p>
        <p>Practica de programación web</p>
        <p>© Todos los derechos reservados</p>
    </footer>
    <script src="codigojs/AlertInsert.js"></script>
   
</body>
</html>