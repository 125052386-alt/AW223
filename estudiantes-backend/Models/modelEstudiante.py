from app import mysql

def selectAll():
    cursor=mysql.connection.cursor()
    cursor.execute("SELECT * FROM tb_alumnos WHERE state=1")
    consulta=cursor.fetchall()
    cursor.close()
    return consulta


#funcion para insertar 

def insertEstudiante(nombre, carrera):
    cursor=mysql.connection.cursor()
    cursor.execute("INSERT INTO tb_alumnos(nombre, carrera) VALUES(%s,%s)",(nombre, carrera))
    mysql.connection.commit()
    cursor.close()

# funcion para eliminar(softDelete)

def softDeleteEstudiante(id):
    cursor=mysql.connection.cursor()
    cursor.execute("UPDATE tb_alumnos SET state=0 WHERE id=%s",(id,))
    mysql.connection.commit()
    cursor.close()

#Funcion para actualizar 
def actualizarEstudiante(id, nombre, carrera):
    cursor=mysql.connection.cursor()
    cursor.execute("UPDATE tb_alumnos SET nombre=%s, carrera=%s WHERE id=%s", (nombre, carrera, id))
    mysql.connection.commit()
    cursor.close()

def selectUno(id):
    cursor=mysql.connection.cursor()
    cursor.execute("SELECT * FROM tb_alumnos WHERE id=%s",(id,))
    consulta = cursor.fetchone()
    cursor.close()
    return consulta



