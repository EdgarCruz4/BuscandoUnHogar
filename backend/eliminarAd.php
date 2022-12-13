<?php
    include 'config.php';
    $conexion= mysqli_connect($host,$username,$password,$dbname);
    $id = $_POST['id'];

    $query = "DELETE FROM `adopciones` WHERE `id` = '$id'";

    $result = mysqli_query($conexion,$query);

    if(isset($result)){
        header("location:../listaAdopciones.php");
    }
    else{
        header("location:../listaAdopciones.php");
    }
?>