<?php
require_once("backend/function.php");
if (isset($_POST["btn-delete"])) {
    $sql = deleteByID("donaciones", $_POST["btn-delete"]);
    if ($sql) echo('
    <script>
    alert("Registro borrado con exito!.");
    </script>
    ');
}
?>
<!DOCTYPE >
<html >
<head>
<meta charset="utf-8">
<title>Donaciónes</title>
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
</head>
<body>
<div id="donacion-economica" class="modal">
<div class="modal-content">
<div class="content-header">
<p id="modal-title">Donaciones Económicas</p>
</div>
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
<?php
    require_once("backend/function.php");
	$rows = queryAll("donaciones", "WHERE Tipo='economico'");
	while($row = mysqli_fetch_object($rows)) {
	?>
	<tr>
		<td><?php echo $row->Nombre;?></td>
		<td><?php echo $row->Cantidad;?></td>
		<td><?php echo $row->Fecha;?></td>
        <td>
        <div class="btn-actions">
        <form action="donaciones.php" method="POST">
        <input type="hidden" name="donacion" value="economico">
        <button class="btn-action" type="submit" name="btn-edit" value="<?php echo $row->id;?>">Editar</button>
        </form>
        <form action="modal.php" method="POST">
        <button class="btn-action" type="submit" name="btn-delete" value="<?php echo $row->id;?>">Eliminar</button>
        </form>
        </div>
        </td>
	</tr>
<?php } ?>
</tbody>
</table>
</div>
<form method="POST" action="donaciones.php">
<div class="btn">
<input type="hidden" name="donacion" value="economico">
<button type="submit" id="btn-add">Agregar</button>
</div>
</form>
</div>
<div class="footer"></div>
</div>



<div id="donacion-especie" class="modal">
<div class="modal-content">
<div class="content-header">
<p id="modal-title">Donaciones en Especie</p>
</div>
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
<?php
    require_once("backend/function.php");
	$rows = queryAll("donaciones", "WHERE Tipo='especie'");
	while($row = mysqli_fetch_object($rows)) {
	?>
	<tr>
		<td><?php echo $row->Nombre;?></td>
		<td><?php echo $row->Especie;?></td>
		<td><?php echo $row->Cantidad;?></td>
        <td class="actions">
        <div class="btn-actions">
        <form action="donaciones.php" method="POST">
        <input type="hidden" name="donacion" value="especie">
        <button class="btn-action" type="submit" name="btn-edit" value="<?php echo $row->id;?>">Editar</button>
        </form>
        <form action="modal.php" method="POST">
        <button class="btn-action" type="submit" name="btn-delete" value="<?php echo $row->id;?>">Eliminar</button>
        </form>
        </div>
        </td>
	</tr>
<?php } ?>
</tbody>
</table>
</div>
<form method="POST" action="donaciones.php">
<div class="btn">
<input type="hidden" name="donacion" value="especie">
<button type="submit" id="btn-add">Agregar</button>
</div>
</form>
</div>
<div class="footer"></div>
</div>
</body>
</html>
