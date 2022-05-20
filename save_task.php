<?php
include("db.php");
    if(isset($_POST['save_task'])){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $tipo_de_participacion = $_POST['tipo_de_participacion'];
        $preparatoria = $_POST['preparatoria'];
        $bachillerato = $_POST['bachillerato'];
        $materia = $_POST['materia'];
        $titulo = $_POST['titulo'];
        $competencia_a_desarrollar = $_POST['competencia_a_desarrollar'];
        $justificacion = $_POST['justificacion'];
        $fundamentacion = $_POST['fundamentacion'];
        
        echo $codigo;
        echo $nombre;
        echo $apellido;
        echo $correo;
        echo $telefono;
        var_dump( $tipo_de_participacion);
        echo $preparatoria;
        echo $bachillerato;
        echo $materia;
        echo $titulo;
        echo $competencia_a_desarrollar;
        echo $justificacion;
        echo $fundamentacion;

        $query = "INSERT INTO usuarios(codigo, nombre, apellidos, email, telefono, tipoParticipacion, 
        preparatoria, bachillerato, materia, titulo, competenciaADesarrollar, justificacion, fundamentacion) 
        VALUES('$codigo',
            '$nombre',
            '$apellido',
            '$correo',
            '$telefono',
            '$tipo_de_participacion',
            '$preparatoria',
            '$bachillerato',
            '$materia',
            '$titulo',
            '$competencia_a_desarrollar',
            '$justificacion',
            '$fundamentacion'
        )";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die("query fail");
        }
        header("Location: index.php");

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola</h1>
</body>
</html>