

function cambiomensaje()
{
    const nuevotexto=document.getElementById("texto-viejo");
    nuevotexto.innerHTML="<p>Hola! Bienvenido a mi portafolio ahora con JAVA SCRIPT</p>"
}

const botonCM=document.getElementById("cambio-mensaje");
botonCM.addEventListener("click",cambiomensaje);

function cambiocss()
{
    const css=document.querySelectorAll(".lista-habilidades li")
    css.forEach(item => {
        item.style.backgroundColor = "#8f3b99";
        item.style.border = "1px solid #8e49ab";
        item.style.color = "#efebeb";   
    });
}
const botoncolor=document.getElementById("cambiar-color")
botoncolor.addEventListener("click",cambiocss)
function cambiocssT()
{
    const css=document.querySelectorAll(".lista-habilidades li")
    css.forEach(item => {
        item.style.fontfamily="'Courier New, Courier, monospace'";
        item.style.fontWeight = "500";
        item.style.textTransform = "uppercase";
        item.style.letterSpacing = "1px";  
    });
}
const botontipografia=document.getElementById("cambiar-tipografia")
botontipografia.addEventListener("click",cambiocssT)







const formulario = document.getElementById("formcontacto");

if (formulario) {
    formulario.addEventListener("submit", function (e) {
        e.preventDefault();

        const nombre = document.getElementById("nombre");
        const email = document.getElementById("email");
        const errorNombre = document.getElementById("error-nombre");
        const errorEmail = document.getElementById("error-email");
        const mensaje = document.getElementById("mensajeE");

        if (!nombre || !email || !errorNombre || !errorEmail || !mensaje) {
            return;
        }

        errorNombre.textContent = "";
        errorEmail.textContent = "";
        mensaje.textContent = "";

        let hayError = false;

        if (nombre.value.trim() === "") {
            errorNombre.textContent = "Escribe un nombre.";
            hayError = true;
        }

        if (email.value.trim() === "") {
            errorEmail.textContent = "Escribe un correo electrónico.";
            hayError = true;
        }

        if (!hayError) {
            mensaje.textContent = "Mensaje enviado con exito.";
            formulario.reset();
        }
    });
}