# 3
Realice las modificaciones necesarias para que el script del punto anterior reciba los datos mediante el método GET. ¿Qué diferencia nota? ¿Cuándo es conveniente usar cada método? Consejo: Utilice las herramientas de desarrollador de su Navegador (Pestaña Red) para observar las diferencias entre las diferentes peticiones.

La principal diferencia en los metodos GET y POST es la forma en que los datos son enviados al servidor. Con el metodo GET los datos son enviados mediante la URL, por lo cual los datos enviados son reconocidos facilmente por cualquier tercero que lea la URL. Mientras que con el metodo POST los datos enviados no se transportan en la url, por lo cual los datos no pueden ser observados.

Es recomendable utilizar el metodo GET cuando los datos no son confidenciales, ya que pueden ser observados por cualquiera.

