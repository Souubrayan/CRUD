<?php 
    include ("conection.php");
    $conn;
    
    //$_POST is a local variable to point directly to the getted data from form by NAME
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    //the insert query
    $sql_insertar = "INSERT INTO userss VALUES ('id','$nombre', '$apellido', '$email')";
    //if the data get inserted, print an alert and the opposite for else
    if ($conn->query($sql_insertar) === TRUE) {
       echo "<script>alert('Dato agregado correctamente!')</script>";
       echo "<script>window.location='index.php'</script>";
    } else {
        echo "Error: " . $sql_insertar . "<br>" . $conn->error;
    }    
    $conn->close();
?>