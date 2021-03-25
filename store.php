<<<<<<< HEAD
<?php

include('conexion.php');

//-------------------------------
if(!empty($_POST['tarea'])){
    $tarea =$_POST['tarea'];
    $descripcion =$_POST['descripcion'];
    $urgente =$_POST['urgente'];
    $tipo =$_POST['tipo'];
    $prioridad =$_POST['prioridad'];
    
    $sql ="INSERT INTO tareas (tarea, descripcion, urgente, tipo, prioridad) VALUES ('$tarea','$descripcion','$urgente','$tipo','$prioridad')";

    $conn->exec($sql);

    header('Location: index.php');

}else {
    echo "No hay datos";
}
//echo var_dump($_POST)


=======
<?php

include('conexion.php');

//-------------------------------
if(!empty($_POST['tarea'])){
    $tarea =$_POST['tarea'];
    $descripcion =$_POST['descripcion'];
    $urgente =$_POST['urgente'];
    $tipo =$_POST['tipo'];
    $prioridad =$_POST['prioridad'];
    
    $sql ="INSERT INTO tareas (tarea, descripcion, urgente, tipo, prioridad) VALUES ('$tarea', '$descripcion', '$urgente', '$tipo', '$prioridad')";

    $conn->exec($sql);

    header('Location: index.php');

}else {
    echo "No hay datos";
}
//echo var_dump($_POST)


>>>>>>> af3ad0572599bfc5cdd8268e94fde3547ff96746
?>