# 4 

Agregue al formulario un campo que permita adjuntar una imagen, y que la etiqueta del campo sea Diagnóstico. El campo debe validar que sea un tipo de imagen valido (.jpg o .png) y será optativo. La imagen debe almacenarse en un subdirectorio del proyecto y también debe mostrarse al usuario al mostrar el resumen del turno del ejercicio 2. ¿Qué sucede si 2 usuarios cargan imágenes con el mismo nombre de imagen? ¿Qué mecanismo implementar para evitar que un usuario sobrescriba una imagen con el mismo nombre?

Si dos usuarios envian imagenes con el mismo nombre, los archivos se sobre escriben ya que comparten el mismo directorio. Las soluciones posibles pueden ser:
        Crear una carpeta para cada turno. 
        Modificar el nombre del archivo por algun identificador, por lo cual cada imagen tendra un nombre unico.
