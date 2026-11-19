
export function Buscador({ 
  busqueda, 
  setBusqueda, 
  Favoritos, 
  setFavoritos 
}) {
  return (
    <section className="seccion-buscador">
      <h2 className="buscador-titulo">Explora destinos turísticos</h2>
      
      <input
        type="text"
        className="buscador-input"
        placeholder="Buscar destino turístico..."
        value={busqueda}
        onChange={(e) => setBusqueda(e.target.value)}
      />

      <button
        type="button"
        className={`btn-favoritos ${Favoritos ? 'activo' : ''}`}
        onClick={() => setFavoritos(!Favoritos)}
      >
        {Favoritos ? 'Mostrar todos' : 'Mostrar favoritos'}
      </button>
    </section>
  );
}