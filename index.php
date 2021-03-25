<!DOCTYPE html>
<?php
 include('conexion.php');
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
</head>
<body>
<h1>Intro PHP</h1>

<form method= "POST">
    <label for"tarea">Nombre de tarea</label><br>
    <input type="text" name="tarea">
    <br>
    <label for"descripcion">Descripción</label><br>
    <textarea name="descripcion" cols="38" rows="3"></textarea>
    <br>
    <label for"prioridad">Prioridad</label><br>
    <select name="prioridad">
        <option value="Alta">Alta</option>
        <option value="Media">Media</option>
        <option value="Baja">Baja</option>
    </select>
    <br>
    <input type="checkbox" name="urgente" value="1">
    <label for="urgente">Urgente</label>
    <br>

    <input type="radio" name="tipo" value="escuela">
    <label for"tipo">Escuela</label><br>

    <input type="radio" name="tipo" value="trabajo">
    <label for"tipo">Trabajo</label><br>
    <input type="submit" value="Enviar">

</form>  

</body>
</html>