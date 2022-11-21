<!DOCTYPE >
<html >
<head>
<meta charset="utf-8">
<title>Catálogo de gatos</title>
<link rel="stylesheet" type="text/css" href="css/navbar.css">
<link rel="stylesheet" type="text/css" href="estilo.css">
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
<a href="nuevo.php">
Nuevo Integrante
</a>
</li>
<li>
<a href="#">
Donaciones <img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a href="modal.php?donacion=economico">Economico</a></li>
<li><a href="modal.php?donacion=especie">Especie</a></li>
</ul>
</li>
<li>
<a href="#">
Adoptar <img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a href="encuesta.php?especie=gato">Gato</a></li>
<li><a href="encuesta.php?especie=perro">Perro</a></li>
</ul>
</li>
</ul>
</nav>
</header>
<div class="flex-container">





<?php
require('./backend/function.php'); //
$rows = queryAll('mascotas'); // returns all the rows of the db
while ($row = mysqli_fetch_object($rows)) { // draw each row returned
?>
        <div class="item"><img src="Imagenes/Metri.PNG"><b><p><?php echo $row->Nombre; ?></p><p><?php echo $row->Genero; ?></p></b><a href="InfoMascotas/infoMetri.html"><input type="button" class="BtnVerMas" value="Ver más"></a></div>
<?php
}
?>





</div>

</body>
</html>