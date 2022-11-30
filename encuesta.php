<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('Refresh: 0; URL = index.php');
} else {
    require_once('backend/function.php');
    if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'] . ' ' . $_POST['ap'] . ' ' . $_POST['am'];
        $_POST['nombre'] = $nombre;
        unset($_POST['ap']);
        unset($_POST['am']);
        $sql = insert('adopciones', $_POST);
        $msg = 'Adopcion registrada.';
        if (!isset($sql)) {
            $msg = 'Ocurrio un error al hacer su registro.\nPor favor vuelva a intentar de nuevo.';
        }
        echo('
            alert("'. $msg . '");
            ');
        die(0);
    }
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
</header>
<div class="modal">
<div class="modal-content">
<div class="content-header">
<p id="modal-title">Encuesta</p>
</div>
<div class="content-body">
<form action="" method="POST">
<div class="form-content">
<table>
<tr>
        <td><label for="nombre">Nombre(S):</label></td>  
        <td><input name="nombre" pattern="[A-Za-z]*" minlength="1" autofocus></td> 
</tr>
<tr>
        <td><label for="ap">Apellido Paterno:</label></td> 
        <td><input name="ap" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>
        <td><label for="am">Apellido Materno:</label></td> 
        <td><input name="am" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>
        <td><label for="calle">Calle y No.:</label></td> 
        <td><input name="calle" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>
        <td><label for="colonia">Colonia:</label></td> 
        <td><input name="colonia" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>      
        <td><label for="municipio">Alcaldia/Municipio:</label></td> 
        <td><input name="municipio" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>       
        <td><label for="estado">Estado:</label></td> 
        <td><input name="estado" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>        
        <td><label for="telefono">Teléfono:</label></td> 
        <td><input name="telefono" pattern="[0-9]*" minlength="10"></td> 
</tr>
<tr>      
        <td><label for="ingresos">Ingresos:</label></td> 
        <td><input name="ingresos" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>    
        <td><label for="motivo">Motivo de la adopción:</label></td> 
        <td><input name="motivo" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
<tr>       
        <td><label for="espacio">Espacio para la mascota:</label></td> 
        <td><input name="espacio" pattern="[A-Za-z]*" minlength="1"></td> 
</tr>
</div>
</table> 
</div>
<div class="btn">
<button type="button" onclick="window.history.back();" id="btn-cancel">Cancelar</button>
<button type="button" id="btn-submit">Enviar</button>
</div>
</form>
</div>
</div>
<script>

let inputs = document.querySelectorAll('input');
inputs.forEach(input => {
    input.addEventListener('focus', () => {
    input.style.border = "none";
});
});

document.getElementById('btn-submit').addEventListener('click', (e) => {
    inputs = document.querySelectorAll('input');
    let i = 0;
    let isEmpty = false;
    var formData = new FormData();
    inputs.forEach(input => {
        i++;
        if (input.value.trim().length != 0) {
            formData.append(input.name, input.value.trim());
        } else {
            input.style.border = "1px solid #FF0000";
            input.setAttribute('isvalid', 'false');
            isEmpty = true;
        }
        if (i == inputs.length && !isEmpty) {
            fetch('encuesta.php', { method: 'POST', body: formData })
            .then(function (response) {
                if (!response.ok) {
                    alert('error');
                }
                else return response.text();})
            .then(function (body) {
                const tag = document.createElement("script");
                const script = document.createTextNode(body);
                tag.appendChild(script);
                document.body.appendChild(tag);
                setTimeout(document.body.removeChild(tag), 1000);
             });
        }
    });
});

// fetch('encuesta.php').then(function(response) {
//     return response.text().then(function(text) {
//         alert(text);
//     });
// });
</script>
</body>
</html>
<?php
}
?>