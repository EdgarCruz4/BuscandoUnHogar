<?php
$donacion = $_POST["donacion"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/donaciones.css">
    <title>Donaciones</title>
</head>
<body>
<header class="navbar">
<div class="logo">
<div class="gato"></div>
<div class="perro"></div>
<h1>Buscando Un Hogar</h1>
</div>
</header>

<div class="modal">
<div class="modal-content">
<?php
if ($donacion == "economico")
{
?>
<div class="content-header">
<p id="modal-title">Donaciones Económicas</p>
</div>
<form action="">
<div class="form-content">
 
<table class="table">
<tr>
<td class="label"><label for="input_1">Nombre:</label></td>  
<td><input name="input_1"  required></td> 
</tr>
<tr>
<td class="label"><label for="input_2">Producto:</label></td> 
<td><input name="input_2" required></td> 
</tr>
<tr>
<td class="label"><label for="input_3">Fecha:</label></td> 
<td><input name="input_3" required></td> 
</tr>
</table>
</div>
<div class="btn">
<button type="submit" id="btn-submit">Registrar</button>
<button type="button" id="btn-cancel">Cancelar</button>
</div>
</form>
<?php }?>
</div>
<div class="footer"><img width="300" src="./Imagenes/footer_donaciones.png" alt=""></div>
</div>
</body>
</html>