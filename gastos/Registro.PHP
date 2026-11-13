<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
</head>
<body>
        <h2>Contacto</h2>
            <form id="formgasto" action="guardar_gasto.php" method="post">
                <div class="campo">
                    <label for="nombre">Concepto</label>
                    <input 
                        type="text" 
                        id="concepto" 
                        name="concepto" 
                        placeholder="Concepto"
                    >
                </div>
                <div class="campo">
                    <label for="monto">
                        monto
                    </label>
                    <input type="text" id="monto" name="monto" placeholder="Monto">
                    <small id="error-email"></small>
                </div>
                <div class="campo">
                    <label for="mensaje">
                        Categoria
                    </label>
                    <input 
                        type="text" 
                        id="categoria" 
                        name="categoria" 
                        placeholder="Categoria"
                    >
                </div>
                 <button type="submit">
                    Enviar mensaje
                </button>
            </form> 
        </section>

    
</body>
</html>