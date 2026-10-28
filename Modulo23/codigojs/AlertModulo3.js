const parametros= new URLSearchParams(window.location.search);
const estado=parametros.get("estado");

if (estado==="exitoActualizar")
{
    alert("Exito: Tu mensaje fue actualizado");

}else if(estado==="errorActualizar")
{
    alert("Error: No se actualizó tu mensaje intentalo nuevamente");
}
if (estado === "exitoActualizar" || estado === "errorActualizar") {
    window.history.replaceState({}, document.title, window.location.pathname);
}