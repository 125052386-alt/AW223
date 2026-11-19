import { useState } from 'react';

export default function Tarjetas({imagen,tipo,destino,ubi,precio,descripcion, onFavorito}){
   const [mostrarDetalles, setMostrarDetalles] = useState(false);
    const [favorito, setFavorito] = useState(false);

    const manejarClicFavorito = () => {
        const nuevoEstado = !favorito;
        setFavorito(nuevoEstado);
        onFavorito(nuevoEstado ? 1 : -1); 
    };
   
    return(
        <article>
            <img src={imagen}></img>
            <span>
                <h6>{tipo}</h6>
            </span> 
            <div>
                
                <h2>{destino}</h2>
                <h5>📍{ubi}</h5>
                <h4>{precio}</h4>
            </div>
            {mostrarDetalles && (
                <div className="tarjeta-detalles">
                    <p>{descripcion}</p>
                </div>
            )}

        <div className="tarjeta-acciones">
          <button
            type="button"
            className={`btn-favorito ${favorito ? 'activo' : ''}`}
            onClick={manejarClicFavorito}
          >
            {favorito ? '❤️ Favorito' : '♡ Agregar favorito'}
          </button>

          <button
            type="button"
            className="btn-detalles"
            onClick={() => setMostrarDetalles(!mostrarDetalles)}
          >
            {mostrarDetalles ? 'Ocultar detalles' : 'Ver detalles'}
          </button>
        </div>




        </article> 
    );
}