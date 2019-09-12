<?php
    include ("conection.php");
    $conn;
    $id = $_REQUEST['id']; //had to make a request because to could delete i had to use the a tag with a href
    $conn;
    //$_POST is a local variable to point directly to the getted data from form by NAME  
    $sql_eliminar = "DELETE FROM userss WHERE id = '$id' ";//the delete query
 
    if ($conn->query($sql_eliminar) === TRUE){
            echo "<script>alert('Eliminado!')</script>";
            echo "<script>window.location='index.php'</script>";
        }
        else{
        echo "Error: " . $sql_eliminar . "<br>" . $conn->error;
    }

    $conn->close();
    
?>