<!--
Desarrollador: Ismael Ruge Gonzalez
Programa de Formación: Desarrollo Web con PHP
Nombre de la Evidencia: ACTIVIDAD DE APRENDIZAJE 2

Este código HTML y PHP muestra una tabla con información de personas, incluyendo su nombre,
dirección, teléfono, fecha de cumpleaños, color favorito y su significado. El programa utiliza
un array llamado $Color que contiene nombres de colores. Luego, se recorre este array para
encontrar el color 'Amarillo', 'Verde' y 'Rojo' respectivamente en tres bloques de código PHP.
Si el color se encuentra, se imprime el significado correspondiente. Si no se encuentra,
imprime 'No se encuentra el Significado'. El resultado se presenta en una tabla HTML con
bordes y contenido centrado.-->


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actividad de aprendizaje 2</title>
    </head>
    <body>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            h1{
                text-align: center;
                text-transform: uppercase;
            }
        </style>

        <?php $Color = array('Blanco', 'Amarillo', 'Azul', 'Rojo', 'Gris', 'Negro'); ?>

        <h1>Actividad de aprendizaje 2</h1>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Fecha de Cumpleaños</th>
                    <th>Color Favorito</th>
                    <th>Significado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>Cra 45 # 45 - 56</td>
                    <td>3456789</td>
                    <td>23/12/1997</td>
                    <td>Amarillo</td>
                    <td>
                        <?php
                            $encontrado = false;
                            foreach ($Color as $cl) {
                                if ($cl == 'Amarillo') {
                                    echo 'Riqueza y alegría';
                                    $encontrado = true;
                                    break;
                                }
                            }

                            if (!$encontrado) {
                                echo 'No se encuentra el Significado';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Pablo Manrique</td>
                    <td>Clle 23 # 12 - 19 Sur</td>
                    <td>3214567</td>
                    <td>12/10/1980</td>
                    <td>Verde</td>
                    <td>
                        <?php
                            $encontrado = false;
                            foreach ($Color as $cl) {
                                if ($cl == 'Verde') {
                                    echo 'Naturaleza, Tranquilidad y Calma';
                                    $encontrado = true;
                                    break;
                                }
                            }

                            if (!$encontrado) {
                                echo 'No se encuentra el Significado';
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nancy Peña</td>
                    <td>Av 34 # 16 - 12</td>
                    <td>2135423</td>
                    <td>07/06/2000</td>
                    <td>Rojo</td>
                    <td>
                        <?php
                            $encontrado = false;
                            foreach ($Color as $cl) {
                                if ($cl == 'Rojo') {
                                    echo 'Pasión y Amor';
                                    $encontrado = true;
                                    break;
                                }
                            }

                            if (!$encontrado) {
                                echo 'No se encuentra el Significado';
                            }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
