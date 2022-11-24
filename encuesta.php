<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('Refresh: 0; URL = index.php');
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscando Un Hogar</title>
    <link rel="stylesheet" type="text/css" href="css/encuesta.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
<header class="navbar">
<div class="logo">
<div class="gato"></div>
<div class="perro"></div>
<h1>Buscando Un Hogar</h1>
</div>
<!-- <nav class="menu">
<ul>
<li>
<a href="#">
<span>Donaciones </span><img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a href="CatalogoGato.php">Gato</a></li>
<li><a href="CatalogoPerro.php">Perro</a></li>
</ul>
</li>
<li>
<a href="#">
<span>Adoptar</span><img class="flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC" />
</a>
<ul>
<li><a href="CatalogoGato.php">Gato</a></li>
<li><a href="CatalogoPerro.php">Perro</a></li>
</ul>
</li>
</ul>
</nav> -->
</header>
<div class="modal">
<div class="modal-content">
<div class="content-header">
<p id="modal-title">Encuesta</p>
</div>
<div class="content-body">
<form action="">
<div class="form-content">
<table>
<tr>
      <td width="204"><label for="nombre">Nombre(S):</label></td>  
       <td width="204"><input id="nombre" name="nombre"  required></td> 
</tr>
<tr>
        <td width="204"><label for="AP">Apellido Paterno:</label></td> 
        <td width="204"><input id="AP" name="AP" required></td> 
</tr>
<tr>
       <td width="204"> <label for="AM">Apellido Materno:</label></td> 
        <td width="204"> <input id="AM" name="AM"   required></td> 
</tr>
<tr>
        <td width="204"><label for="CN">Calle y No.:</label></td> 
        <td width="204"> <input id="CN" name="CN"  required></td> 
</tr>
<tr>
        <td width="204"><label for="col">Colonia:</label></td> 
        <td width="204"> <input id="col" name="col"  required></td> 
</tr>
<tr>      
        <td width="204"> <label for="ALMU">Alcaldia/Municipio:</label></td> 
        <td width="204"> <input id="ALMU" name="ALMU"  required></td> 
</tr>
<tr>       
        <td width="204"> <label for="ES">Estado:</label></td> 
        <td width="204"><input id="ES" name="ES"  required></td> 
</tr>
<tr>        
        <td width="204"><label for="tele">Teléfono:</label></td> 
        <td width="204"><input id="tele" name="tele"  required></td> 
</tr>
<tr>      
        <td width="204"><label for="ingre">Ingresos:</label></td> 
        <td width="204"><input id="ingre" name="ingre" required></td> 
</tr>
<tr>    
        <td width="204"><label for="moti">Motivo de la adopción:</label></td> 
        <td width="204"><input id="moti" name="moti" required></td> 
</tr>
<tr>       
        <td width="204"><label for="espa">Espacio para la mascota:</label></td> 
        <td width="204"><input id="espa" name="espa"  required></td> 
</tr>
</div>
</table> 
</div>
<div class="btn">
<button type="button" id="btn-cancel">Cancelar</button>
<button type="submit" id="btn-submit">Enviar</button>
</div>
</form>
</div>
</div>
</body>
</html>
<?php
}
?>