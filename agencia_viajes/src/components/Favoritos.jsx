

export function Favoritos({ totalFavoritos = 0 }) {
  return (
    <section className="fav">
      <div className="fav-div">
        <h1>Descubre tu próximo destino</h1>
        <p>Explora lugares increíbles y planea tus próximas vacaciones.</p>
      </div>


      <div className="contador">
        <div className="contador-info">
          <h2>Destinos favoritos</h2>
          <p>Tu próxima aventura comienza aquí.</p>
        </div>
        <span className="contador-fav">{totalFavoritos}</span>
      </div>
    </section>
  );
}