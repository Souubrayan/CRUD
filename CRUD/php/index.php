<?php 
include ("conection.php");
$conn;
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

<body>
    <div class="container">
        <h2 id="text">Insertando datos con PHP</h2>
        <form method="POST" action="save.php">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" placeholder="ingrese nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="pwd">Apellido:</label>
                <input type="text" class="form-control" placeholder="ingrese apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Ingrese correo" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <br>
    <br>
    <br>

    <div class="tabla">
        <h2 class="texto">Datos de tabla</h2>
        <table class="table table-hover" style="width: 1080px; margin-left: 15%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th style="width: 250px; text-align: center;">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
           //the select sentence to show the data registry values
           $sql_select = "SELECT * from userss";
           $resultset = mysqli_query($conn,$sql_select);
           //this while with all of this tr td inside loops over every row in the database creating the td by itself
           while ( $mostrar = mysqli_fetch_array($resultset)){
           ?><!--the loop to add every row of the data base or inserted data-->
                <tr>
                    <td><?php echo $mostrar['id'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['apellido'] ?></td>
                    <td><?php echo $mostrar['email'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $mostrar['id'] ?>"">Editar</a> 
                        <a href=" delete.php?id=<?php echo $mostrar['id'] ?>">Eliminar</a>
                    </td>


                </tr>
                <?php 
        }
         ?>

                <?php

         ?>
            </tbody>
        </table>
    </div>
</body>

</html>