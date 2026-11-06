import Estudiante from "./components/Estudiante";
import './App.css';
export default function App(){
    const estudiantes=[
      {id:1, nombre:"Karen",carrera:"TIID"},
      {id:2, nombre:"Kevin",carrera:"Redes"},
      {id:3, nombre:"Agus",carrera:"ISC"},
    ];
  return(
    //Aqui se renderiza el codigo html
    <main className="contenedor">
      <h1>Listado de Estudiantes</h1>
      <form>
      <input type="text" placeholder="Escribe Nombre"/>
      <input type="text" placeholder="Escribe Carrera"/>
      <button type="button">Agregar</button>
      </form>
      <h2>Estudiantes Registrados</h2>
      <ul>
        {estudiantes.map((estudiante) => (
          <Estudiante
          key={estudiante.id}
          estudiante={estudiante}
          />
        ))
      }
      </ul> 
      <p>Total de Estudiantes: {estudiantes.length}</p>

    </main>
  )
}