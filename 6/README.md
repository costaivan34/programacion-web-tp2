# 6
Agregar persistencia al sistema de turnos. Todos los datos del formulario deben almacenarse
mediante algún mecanismo para poder ser recuperados posteriormente. Crear una nueva vista que le
permita a un empleado administrativo visualizar todos los turnos en una tabla. La tabla debe incluir los
siguientes campos:

* Fecha del turno
* Hora del turno
* Nombre del paciente
* Teléfono
* Email
* Link a la ficha del turno (la ficha se implementa en el siguiente punto)

Esta página y la del formulario del punto 2 deben contar con una barra de navegación que permita
ir a una u otra pantalla. Además, al procesar el formulario en el lado servidor, el sistema asigne un número de turno (que no debe repetirse).Para generar el sistema de persistencia, se aconseja estudiar algún mecanismo de serialización de datos.¿Cómo relaciona la imagen del turno con los datos del turno? Comente alternativas que evaluó y opción elegida.