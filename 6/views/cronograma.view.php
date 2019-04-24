<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
</head>

<body>


    <h2>Cronograma de turnos</h2>
    <nav class="main-nav">
        <a href="/6/controllers/turno.php"> Pedir turno</a>
    </nav>
    <table border="2">
        <thead>
            <tr>
                <th colspan="1" rowspan="1" scope="col">Fecha del Turno</th>
                <th colspan="1" rowspan="1" scope="col">Hora del turno</th>
                <th colspan="1" rowspan="1" scope="col">Nombre del paciente</th>
                <th colspan="1" rowspan="1" scope="col">Teléfono</th>
                <th colspan="1" rowspan="1" scope="col">Email</th>
                <th colspan="1" rowspan="1" scope="col">Detalles</th>
            </tr>
        </thead>
        <tbody>
            <?php 
        for($i=1;$i<sizeof($miVector);$i++){
         $buscarClase = $miVector[$i];   
        ?>
                <tr>
                    <td>
                        <?php echo $buscarClase->getFecha()?>
                    </td>
                    <td>
                        <?php echo $buscarClase->getHorario()?>
                    </td>
                    <td>
                        <?php echo $buscarClase->getNombre()?>
                    </td>
                    <td>
                        <?php echo $buscarClase->getTelefono()?>
                    </td>
                    <td>
                        <?php echo $buscarClase->getMail()?>
                    </td>
                    <td><a href="/6/controllers/ficha.php">*</a></td>
                    <?php   
        }

     ?>
        </tbody>
    </table>


</body>


</html>
