<?php
include("db.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crude</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container p-4">
        
    <div class="row">
        <div class= "col-md-4">
            <div class = "card card-body">
                

                <form action="save_task.php" method = "POST">
                    <div class = "form-group">
                        <label for=""></label>
                        <input type="number" name="codigo" placeholder = "codigo" autofocus class = "form-control">
                    </div>
                    <div class = "form-group">
                        <input type="text" name="nombre" placeholder = "nombre" id="" class = "form-control">
                    </div>
                    <div class = "form-group">
                        <input type="text" name="apellido" placeholder = "apellido" id="" class = "form-control">

                    </div>
                    <div class = "form-group">
                    <input type="email" name="correo" placeholder = "correo" id="" class = "form-control">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="telefono" placeholder = "telefono" id="" class = "form-control">

                    </div>
                    <div>
                        <div class = "form-group">
                        <input type="radio" name="tipo_de_participacion" id="" value = "individual" >
                        
                            <label for="">individual</label>

                        </div>
                        <div class = "form-group">
                        <input type="radio" name="tipo_de_participacion" id="" vualue= "grupo" >
                        
                            <label for="">grupo</label>

                        </div>
                    </div>
                    <div class = "form-group">
                    <input type="text" name="preparatoria" placeholder = "preparatoria" id="">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="bachillerato" placeholder = "bachillerato" id="">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="materia" placeholder = "materia" id="">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="titulo" placeholder = "titulo" id="">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="competencia_a_desarrollar" placeholder = "competencia a desarrollar" id="" class = "form-control">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="justificacion" placeholder = "justificacion" id="" class = "form-control">

                    </div>
                    <div class = "form-group">
                    <input type="text" name="fundamentacion" placeholder = "fundamentacion" id="" class = "form-control">

                    </div>

                    <input type="submit" class= "btn btn-success btn-block" name="save_task" value = "Save Task">
                   

                    
                </form>
            </div>

        </div>

        <div class= "col-md-8">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>apellidos</th>
                        <th>email</th>
                        <th>telefono</th>
                        <th>tipoParticipacion</th>
                        <th>preparatoria</th>
                        <th>bachillerato</th>
                        <th>materia</th>
                        <th>titulo</th>
                        <th>competenciaADesarrollar</th>
                        <th>justificacion</th>
                        <th>fundamentacion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM usuarios";
                    $result_task = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_task)){ ?>
                    <tr>
                        <td><?php echo $row['codigo']?></td>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['apellidos']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['telefono']?></td>
                        <td><?php echo $row['tipoParticipacion']?></td>
                        <td><?php echo $row['preparatoria']?></td>
                        <td><?php echo $row['bachillerato']?></td>
                        <td><?php echo $row['materia']?></td>
                        <td><?php echo $row['titulo']?></td>
                        <td><?php echo $row['competenciaADesarrollar']?></td>
                        <td><?php echo $row['justificacion']?></td>
                        <td><?php echo $row['fundamentacion']?></td>
                        <td>
                            <a href="edit.php?=<?php echo $row['id']?>">edit</a>
                            <a href="delete.php?=<?php echo $row['id']?>">delete</a>

                        </td>

                    </tr>
                    <?php }?>
                </tbody>
            </table>

        </div>
    </div>
    </div>
</body>
</html>