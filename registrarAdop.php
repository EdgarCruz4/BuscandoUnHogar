<?php
require('config.php');

	$nombre= $_POST['nombre'];     
    $ap=$_POST['AP'];
    $am=$_POST['AM'];
    $cn = $_POST['CN'];
    $col = $_POST['col'];     
    $almu=$_POST['ALMU'];
    $es=$_POST['ES'];
    $tele = $_POST['tele'];     
    $ingre=$_POST['ingre'];
    $moti=$_POST['moti'];
    $espa = $_POST['espa'];  
    
	$register="INSERT INTO adopciones(NombreAdop,ApellidoPAdop,ApellidoMAdop,CalleNumero,Colonia,AlcaldiaMunicipio,Estado,Telefono,Ingresos,MotivoAdop,M2) VALUES('$nombre','$ap','$am', '$cn', '$col', '$almu', '$es', '$tele', '$ingre', '$moti', '$espa')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
	if($result== TRUE){

			echo '<script type= "text/javascript">alert("Los datos se guardaron satisfactoriamente ;)")</script>';
			header('location:index.html');			
	}else{

		echo "Ooppss! No se pudieron agregar los datos" . $db_link->error;
	}

mysqli_close($db_link);
?>