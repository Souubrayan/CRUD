<?php 
include("conection.php");
$conn;
$id = $_REQUEST['id'];

/*$mostrar = $conn -> query("SELECT * from userss WHERE id ='$id'");*/
$sqli_select = "SELECT * from userss WHERE id ='$id'";
$resultset = mysqli_query($conn,$sqli_select);
if($mostrar = mysqli_fetch_assoc($resultset)){
    echo "<script> window.location = index.php</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>CRUD</title>
  <style>
    body {
      background-color: whitesmoke;
    }

    #text {
      text-align: center;
      margin: 20px 0 50px 0;
    }

    .container {
      width: 40%;
      margin-bottom: 200px;
    }

    .btns {
      margin: 0px;
    }

    #btnconsulta {
      margin-left: 10px;
    }

    a {
      text-decoration: none;
      color: white;
    }

    .texto {
      text-align: center;
      background-color: blue;
      padding: 10px 0 10px 0;
      color: white;
      font-size: 36pt;
    }

    th,
    td {
      text-align: center;
    }

    a {
      color: black;
      border: 1px solid;
      padding: 10px;
      background-color: lightgrey;
    }
  </style>
</head>
<!--i had to bring the form here to put requested values on its fields and update then-->
<body>
  <div class="container">
    <h2 id="text">Insertando datos con PHP</h2>
    <form method="POST" action="updateSaver.php">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" placeholder="ingrese nombre" name="nombre" required
          value="<?php echo $mostrar['nombre'] ?>">
      </div>
      <div class="form-group">
        <label for="pwd">Apellido:</label>
        <input type="text" class="form-control" placeholder="ingrese apellido" name="apellido" required
          value="<?php echo $mostrar['apellido'] ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Ingrese correo" name="email" required
          value="<?php echo $mostrar['email'] ?>">
      </div>
      <button type="button" class="btn btn-info" onclick="home();">Home</button>
      <button type="submit" class="btn btn-primary">Actualizar datos</button>
    </form>
  </div>
</body>
<script>
  //this function is for the home button to go back to index.php
  function home() {
    location.href = "index.php";
  }
</script>

</html>