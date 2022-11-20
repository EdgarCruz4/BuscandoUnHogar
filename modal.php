<?php
$title = "";
$donacion = $_GET["donacion"];
?>
<!DOCTYPE >
<html >
<head>
<meta charset="utf-8">
<title>Catálogo de perros</title>
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>

<body>
<div class="modal">
<div class="modal-content">
<?php
if ($donacion == "economico") {
    $title = "Donaciones Económicas";
?>
<div class="content-header">
<p id="modal-title"><?php echo $title; ?></p>
</div>
<form method="POST" action="donaciones.php">
<div class="form-content">
 
<table class="table">
<thead>
<tr>
<th>Nombre</th>
<th>Cantidad</th>
<th>Fecha</th>
<th>Accion</th>
</tr>
</thead>
<tbody>
<tr>
<td><span>Nombre</span></td>  
<td><span>Nombre</span></td> 
<td><span>Nombre</span></td> 
<td class="actions">
<button type="button" id="btn-edit">Editar</button>
<button type="button" id="btn-delete">Eliminar</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="btn">
<input type="hidden" name="donacion" value="economico">
<button type="submit" id="btn-add">Agregar</button>
</div>
</form>
<?php }
else {
    $title = "Donaciones en Especie";
?>
<div class="content-header">
<p id="modal-title"><?php echo $title; ?></p>
</div>
<form method="POST" action="donaciones.php">
<div class="form-content">
 
<table class="table">
<thead>
<tr>
<th>Nombre</th>
<th>Especie</th>
<th>Cantidad</th>
<th>Accion</th>
</tr>
</thead>
<tbody>
<tr>
<td><span>Nombre</span></td>  
<td><span>Especie</span></td> 
<td><span>Nombre</span></td> 
<td class="actions">
<button type="button" id="btn-edit">Editar</button>
<button type="button" id="btn-delete">Eliminar</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="btn">
<input type="hidden" name="donacion" value="especie">
<button type="submit" id="btn-add">Agregar</button>
</div>
</form>
<?php
}
?>
</div>
<div class="footer"></div>
</div>
</body>
</html>
