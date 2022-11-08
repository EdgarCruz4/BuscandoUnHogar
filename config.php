<?php 
// Conexíon a la base de datos , parámetros correspondientes al sistema.
$host="localhost";
$username="root";   
$password="";
$database="buscandounhogar";
$db_link=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_link));
if (mysqli_connect_error()){
	echo "No se puede conectar , por favor vuelva a intentarlo";
	exit();
}
?>
