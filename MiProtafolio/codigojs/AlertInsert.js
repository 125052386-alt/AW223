
const parametros= new URLSearchParams(window.location.search);
const estado=parametros.get("estado");

if (estado==="exito")
{
    alert("Exito; Tu mensaje fue enviado");

}else if(estado==="error")
{
    alert("Error: No se envio tu mensaje intentalo nuevamente");
}
if (estado!=null)
{
    window.history.replaceState({}, document.title, window.location.pathname);
}