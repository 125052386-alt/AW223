from flask import Flask

app=Flask(__name__)

# para identificar una ruta de bievenidad va a empezar con / es igual al index
@app.route('/')
def inicio():
    return "Hola Mundo Flask"

@app.route('/soyotraruta', method=[POST])
def otra():
    return "Adios Mundo Flask"

if __name__=='__main__':
    app.run(debug=True)