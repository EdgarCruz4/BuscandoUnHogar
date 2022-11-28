

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscando Un Hogar</title>
    <link rel="stylesheet" type="text/css" href="css/nuevo.css">
    <link rel="stylesheet" href="css/navbar.css">
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
<li>
<a href="#">
Donaciones <img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a href="CatalogoGato.php">Gato</a></li>
<li><a href="CatalogoPerro.php">Perro</a></li>
</ul>
</li>
<li>
<a href="#">
Adoptar <img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a href="CatalogoGato.php">Gato</a></li>
<li><a href="CatalogoPerro.php">Perro</a></li>
</ul>
</li>
</ul>
</nav>
</header>

<div class="modal">
<div class="modal-content">
<?php
require('./backend/function.php'); //
$rows = queryAll('mascotas', 'id'); // returns all the rows of the db
while ($row = mysqli_fetch_object($rows)) { // draw each row returned
?>
<div class="content-left">
<p>Subir Imagen</p>
</div>
<div class="content-right">
<div class="content-header">
<div class="content">
<p id="modal-title">Editar integrante</p>
</div>
</div>
<div class="content-body">
<form action="">
<div class="form-content">
<div class="labels">
<label for="nombre">Nombre:</label>
<label for="edad">Edad:</label>
<label for="genero">Genero:</label>
<label for="tamano">Tamaño:</label>
<label for="descripcion">Descripcion:</label>
</div>
<div>
<input value="<?php echo $row->Nombre; ?>"  name="nombre" type="text">
<input value="<?php echo $row->Edad; ?>" name="edad" type="number" min="1" value="1">
<select  id="genero" name="genero">
<option sselected>Macho</option>
<option selected>Hembra</option>
</select>
<input value="<?php echo $row->Tamanio; ?>"name="tamano" type="text">
<input value="<?php echo $row->Descripcion; ?>" style="height: 30px; width: 200px;" name="descripcion" type="text">
</div>
</div>
<div class="btn">
<button type="reset" id="btn-reset">Cancelar</button>
<button type="submit" id="btn-submit" value="<?php echo($id); ?>" >Actualizar</button>
</div>
</form>
<?php
}
?>
</div>

</div>

</div>
</div>
</body>
</html>