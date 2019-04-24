<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para pedir Turno</title>

</head>

<body>
    <h2>Complete el siguiente formulario</h2>
    <form action="controllers/index1.php" method="post" oninput="valor.value = Altura.valueAsNumber" enctype="multipart/form-data">
        <fieldset>
            <legend>Datos Personales</legend>
            <label for="Nombre">Nombre del paciente*</label>
            <input type="text" name="Nombre" required id="Nombre">
            <br>
            <label for="Mail">Email*</label>
            <input type="email" name="Mail" required id="Mail">
            <br>
            <label for="Tel">Teléfono*</label>
            <input type="tel" name="Tel" required pattern="[0-9]{4}-[0-9]{6}" id="tel">
            <br>
            <label for="Edad">Edad</label>
            <input type="number" name="Edad" min="0" max="120" id="Edad">
            <br>
            <label for="Calzado">Talla de calzado</label>
            <input type="number" name="Calzado" min="20" max="45" value="35" id="Calzado">
            <br>
            <label for="Altura">Altura</label>
            <input type="range" id="Altura" value="100" name="Altura" name="alt" min="100" max="220" step="1">
            <output for="Altura" name="valor">100</output>m
            <br>
            <label for="Nacimiento">Fecha de Nacimiento*</label>
            <input type="date" name="Nacimiento" required id="Nacimiento">
            <br>
            <label for="Color">Color de pelo</label>
            <input type="color" name="Color" id="Color">
            <br>

        </fieldset>
        <fieldset>
            <legend>Turno</legend>
            <label for="Fecha">Fecha del turno*</label>
            <input type="date" name="Fecha" required>
            <label for="Turno">Horario del turno</label>
            <input name="Turno" id="Turno" type="time" min="08:00:00" max="17:00:00" step="900" id="turno">
            <br>
            <label for="Diagnostico">Adjunte imagen del diagnostico</label>
            <input type="file" name="Diagnostico">

        </fieldset>
        <br>
        <input type="submit" name='enviar' value="Enviar">
        <input type="reset" value="Limpiar">
    </form>

</body>

</html>
