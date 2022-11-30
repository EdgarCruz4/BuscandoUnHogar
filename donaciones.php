<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('Refresh: 0; URL = index.php');
}
else {
$donacion = '';
if (isset($_POST["donacion"]))
$donacion = $_POST["donacion"];

require_once("backend/function.php");
if(isset($_POST['tipo']) && !isset($_POST['btn-update'])) {
    $sql = insert('donaciones', $_POST);
    if ($sql) {
        echo ('
        <script>
        alert("Donacion registrada correctamente.");
        history.go(-2);
        </script>
        ');
    }
    else {
        echo ('
        <script>
        alert("Ocurrio un error al realizar su registro.\nPor favor vuelva a intertarlo.");
        history.go(-2);
        </script>
        ');
    }
}
if (isset($_POST['btn-update'])) {
    $id = $_POST['btn-update'];
    unset($_POST['btn-update']);
    $sql = update('donaciones', $_POST, "id='" . $id . "'");
    if ($sql) {
        echo ('
        <script>
        alert("Registro actualizado.");
        history.go(-2);
        </script>
        ');
    }
}
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
    $id = "";
    $nombre = "";
    $cantidad = "";
    $fecha = "";
    if (isset($_POST["btn-edit"]))
    {
        require_once("backend/function.php");
        $row = query("donaciones", 'id', $_POST['btn-edit']);
        $id = $row->id;
        $nombre = $row->Nombre;
        $cantidad = $row->Cantidad;
        $fecha = $row->Fecha;
    }
?>
<div class="content-header">
<p id="modal-title">Donaciones Económicas</p>
</div>
<form action="donaciones.php" method="POST">
<div class="form-content">
 
<table class="table">
<tr>
<td class="label"><label for="nombre">Nombre:</label></td>  
<td><input name="nombre" value="<?php echo $nombre; ?>" required></td> 
</tr>
<tr>
<td class="label"><label for="cantidad">Cantidad:</label></td> 
<td><input name="cantidad" type="number" value="<?php echo $cantidad; ?>" required></td> 
</tr>
<tr>
<td class="label"><label for="fecha">Fecha:</label></td>
<td><input name="fecha" type="datetime-local" value="<?php echo $fecha; ?>" required></td> 
</tr>
</table>
</div>
<div class="btn">
<input type="hidden" name="tipo" value="economico">
<?php
if (isset($_POST['btn-edit'])) {
?>
<button type="submit" class="btn-action" id="btn-update" name="btn-update" value="<?php echo($id); ?>">Actualizar</button>
<?php } else {?>
<button type="submit" class="btn-action" id="btn-submit">Registrar</button>
<?php }?>
<button type="button" class="btn-action" id="btn-cancel" onclick="window.history.back();">Cancelar</button>
</div>
</form>
<?php }
else {
    $nombre = "";
    $especie = "";
    $cantidad = "";
    if (isset($_POST["btn-edit"]))
    {
        require_once("backend/function.php");
        $row = query("donaciones", 'id', $_POST['btn-edit']);
        $id = $row->id;
        $nombre = $row->Nombre;
        $especie = $row->Especie;
        $cantidad = $row->Cantidad;
    }
?>
<div class="content-header">
<p id="modal-title">Donaciones en Especie</p>
</div>
<form action="donaciones.php" method="POST">
<div class="form-content">
 
<table class="table">
<tr>
<td class="label"><label for="nombre">Nombre:</label></td>  
<td><input name="nombre" value="<?php echo($nombre); ?>"  required></td> 
</tr>
<tr>
<td class="label"><label for="especie">Especie:</label></td> 
<td><input name="especie" value="<?php echo($especie); ?>" required></td> 
</tr>
<tr>
<td class="label"><label for="cantidad">Cantidad:</label></td> 
<td><input name="cantidad" value="<?php echo($cantidad); ?>" required></td> 
</tr>
</table>
</div>
<div class="btn">
<input type="hidden" name="tipo" value="especie">
<?php
if (isset($_POST['btn-edit'])) {
?>
<button type="submit" class="btn-action" id="btn-update" name="btn-update" value="<?php echo($id); ?>">Actualizar</button>
<?php } else {?>
<button type="submit" class="btn-action" id="btn-submit">Registrar</button>
<?php }?>
<button type="button" class="btn-action" id="btn-cancel" onclick="window.history.back();">Cancelar</button>
</div>
</form>
<?php
}
?>
</div>
<div class="footer"><img width="300" src="./Imagenes/footer_donaciones.png" alt=""></div>
</div>
</body>
</html>

<?php
}
?>