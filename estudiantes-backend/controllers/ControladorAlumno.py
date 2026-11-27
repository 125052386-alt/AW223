from flask import Blueprint, request, jsonify
from Models.modelEstudiante import *

controladorAlumnoBP= Blueprint('controladorAlumno', __name__)

# Ruta de inicio
@controladorAlumnoBP.route('/')
def inicio():
    return "Hola Mundo Flask"

# Ruta para insertar

@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    nombreReq=request.form.get('txtNombre','').strip()
    carreraReq=request.form.get('txtCarrera','').strip()

    try:
        insertEstudiante(nombreReq, carreraReq)
        return jsonify({"Completado" : "Estudiante Guardado"}),200
    except Exception as e:
        return jsonify({"Error": str(e)}),500
        

#ruta para consultar todo
@controladorAlumnoBP.route('/consultaTodo', methods=['GET'])

def consulta():
    try:
        alumnos=selectAll()
        return jsonify(alumnos),200
    except Exception as e:
        print(f"Error:{e}")
        return jsonify({"Error": str(e)}),500
    

#ruta para actualizar 
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])

def actualizar():
    id=request.form.get('id','').strip()
    nombreReq=request.form.get('txtNombre','').strip()
    carreraReq=request.form.get('txtCarrera','').strip()

    try:
        actualizarEstudiante(id, nombreReq, carreraReq)
        return jsonify({"Completado" : "Estudiante Actualizado"}),200
    except Exception as e:
        return jsonify({"Error": str(e)}),500


#ruta para eliminar 
@controladorAlumnoBP.route('/eliminarAlumno', methods=['PUT'])

def eliminar():

    id=request.form.get('id','').strip()

    try:
        softDeleteEstudiante(id)
        return jsonify({"Completado" : "Estudiante Borrado"}),200
    except Exception as e:
        return jsonify({"Error": str(e)}),500

#ruta para consultar uno por medio de id
@controladorAlumnoBP.route('/consultaUno', methods=['GET'])

def consultaUno():
    id=request.args.get('id','').strip()
    try:
        alumno=selectUno(id)
        return jsonify(alumno),200
    except Exception as e:
        print(f"Error:{e}")
        return jsonify({"Error": str(e)}),500