const parametros1= new URLSearchParams(window.location.search);
const estado1=parametros1.get("estado");

if (estado1==="exitoBorrar")
{
    alert("Exito: Tu mensaje fue eliminado");

}else if(estado1==="errorBorrar")
{
    alert("Error: No se elimino tu mensaje intentalo nuevamente");
}
if (estado1!=null)
{
    window.history.replaceState({}, document.title, window.location.pathname);
}