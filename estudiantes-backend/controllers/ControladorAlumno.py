from flask import Blueprint 

controladorAlumnoBP= Blueprint('controladorAlumno', __name__)

# Ruta de inicio
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola Mundo Flask"

# Ruta para insertar

@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])

def guardar():
    return 'se guardo el alumno'

#ruta para consultar todo
@controladorAlumnoBP.route('/consultaTodo')

def consulta():
    return 'se consulto todo'

#ruta para actualizar 
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])

def actualizar():
    return 'se actualizaron los datos del alumno'


#ruta para eliminar 
@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])

def eliminar():
    return 'se elimino al alumno'