import { useState } from 'react'
import './App.css'
import Tarjetas from './components/Tarjetas.jsx'
import paris from './assets/paris.jpg'
import loscabos from './assets/loscabos.jpg'
import nuevayork from './assets/nuevayork.jpg'
import Encabezado from './components/Encabezado.jsx'
import { Favoritos } from './components/Favoritos.jsx'
import { Buscador } from './components/Buscador.jsx'


const datos = [
  { id: 1, imagen: paris, tipo: 'Ciudad', destino: 'Paris', ubi: 'Francia', precio: 'Desde $19,000 MXN', descripcion:'Vuelos Redondos y Hoteles 5 estrellas' },
  { id: 2, imagen: nuevayork, tipo: 'Ciudad', destino: 'Nueva York', ubi: 'EEUU', precio: 'Desde $5,500 MXN',descripcion:'Vuelos Redondos y Hoteles 5 estrellas' },
  { id: 3, imagen: loscabos, tipo: 'Playa', destino: 'Los Cabos', ubi: 'Mexico', precio: 'Desde $16,800 MXN',descripcion:'Vuelos Redondos y Hoteles 5 estrellas' }
]

function App() {
  const [count, setCount] = useState(0)
  const [busqueda, setBusqueda] = useState('');
  const [soloFavs, setSoloFavs] = useState(false);
  const [totalFavs, setTotalFavs] = useState(0);

  const filtrados = datos.filter((item) =>
    item.destino.toLowerCase().includes(busqueda.toLowerCase()) ||
    item.ubi.toLowerCase().includes(busqueda.toLowerCase())
  );
  return (
    <main className='contenedor'> 
    <div>
      <Encabezado></Encabezado>
    </div>
    <div className='favoritos-div'>
     <Favoritos totalFavoritos={totalFavs}></Favoritos> 
    </div> 
    <div>
     <Buscador
     busqueda={busqueda}
      setBusqueda={setBusqueda}
      soloFavoritos={soloFavs}
      setSoloFavoritos={setSoloFavs}
     >
      
      </Buscador> 
    </div>
      <div className='tarjetas'>
        {filtrados.map((item) => (
          <Tarjetas
            key={item.id}
            {...item}
            onFavorito={(valor) => setTotalFavs(totalFavs + valor)}
          />
        ))}

      </div>

    </main>
  )
    


}

export default App;
