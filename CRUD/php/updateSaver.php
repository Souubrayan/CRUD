<?php 
include("conection.php");
//made a new .php file to save de update getting through the global var POST de datatable array values
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
//the update sentence
$sqli_update = $conn -> query("UPDATE userss SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id='$id' ");
if($sqli_update){
    echo "<script>
    location.href = 'index.php';
    </script>";
}else{//if not, then stay in update.php
    echo "<script>
    location.href = 'update.php?id='.$id.'
    </script>";
}

?>