<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('Refresh: 0; URL = index.php');
} else {
$catalogo = $_GET['catalogo'];
require_once("backend/function.php");
if (isset($_POST["btn-delete"])) {
    $sql = deleteByID("donaciones", $_POST["btn-delete"]);
    if (isset($sql)) echo('
    <script>
    alert("Registro borrado con exito!.");
    </script>
    ');
}
else if (isset($_POST['btn-admin-delele']))
{
    $sql = deleteByID("mascotas", $_POST['btn-admin-delele']);
    if (isset($sql)) {
        echo('
        <script>
        alert("Registro borrado con exito!.");
        </script>
        ');
        header('Refresh: 0; URL = index.php');
    }
}
?>
<!DOCTYPE >
<html style=" background-size: cover; background-image: url(Imagenes/fondo.jpg);  width: 100%;  height: 100%;}" >
<head>
<meta charset="utf-8">
<title>Catálogo de perros</title>
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="css/modal.css">
<link rel="stylesheet" type="text/css" href="css/catalogo.css">
</head>

<body>
<header class="navbar">
<div class="logo">
<div class="gato"></div>
<div class="perro"></div>
<h1>Buscando Un Hogar</h1>
</div>
<nav class="menu">
<ul>
<li><a href="nuevo.php">Nuevo Integrante</a></li> 
<li>
<a href="#">
Donaciones <img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a onclick="showEspecie()">Especie</a></li>
<li><a onclick="showEconomico()">Economico</a></li>
</ul>
</li>
<li><a href="encuesta.php">Adoptar</a></li> 
</ul>
</nav>
</header>

<!-- Modal de donaciones en economicas -->
<div onclick="closeModal()" id="donacion-economica" class="modal">
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
        <td class="actions">
        <div class="btn-actions">
        <form action="donaciones.php" method="POST">
        <input type="hidden" name="donacion" value="economico">
        <button class="btn-action" type="submit" name="btn-edit" value="<?php echo $row->id;?>">Editar</button>
        </form>
        <form action="catalogo.php" method="POST" onsubmit="return confirm('Confirmar?');">
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
</div>
<!-- Modal de donaciones en especie -->
<div onclick="closeModal()" id="donacion-especie" class="modal">
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
        <form action="catalogo.php" method="POST" onsubmit="return confirm('Confirmar?');">
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
</div>

<div class="cards-container">
<!-- Cards -->
<section class="cards">
<?php
require_once('./backend/function.php'); 
if ($catalogo == 'perros') {
    $rows = queryAll('mascotas', "WHERE especie='perro'");
}
else if ($catalogo == 'gatos') {
    $rows = queryAll('mascotas', "WHERE especie='gato'");
}

while ($row = mysqli_fetch_object($rows)) { // draw each row returned
?>
<div class="card">
<div class="card-header">
<img src="Imagenes/Metri.PNG">
</div>

<div class="card-body" >
<p><?php echo $row->Nombre; ?></p>
<p><?php echo $row->Genero; ?></p>
<div class="btns">
<form action="nuevo.php" method="POST">
<button type="submit" name="update-item" value="<?php echo($row->id);?>">Editar</button>
</form>
<form action="catalogo.php" method="POST" onsubmit="return confirm('Confirmar?');">
<button type="submit" name="btn-admin-delele" value="<?php echo($row->id);?>">Eliminar</button>
</form>
</div>


</div>
</div>
<?php
}
?>
</section>
</div>

<!-- Footer -->
<footer class="container" >
<span>Todos los derechos reservados ®2022, prohibidad su reproducción total o parcial sin autorización.</span>
</footer>

<script>
function closeModal() {
document.getElementById('donacion-especie').style.display = 'none';
document.getElementById('donacion-economica').style.display = 'none';
}

function showEspecie() {
document.getElementById('donacion-especie').style.display = 'block';
}

function showEconomico() {
document.getElementById('donacion-economica').style.display = 'block';
}

</script>
</body>
</html>
<?php 
}
?>