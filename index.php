<?php
session_start();
if (isset($_SESSION['valid'])) {
    header('Refresh: 0; URL = catalogo.php?catalogo=gatos');
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Buscando Un Hogar</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
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
<?php
$msg = '';
if (!empty($_POST['username']) && !empty($_POST['password'])) {

    include_once('./backend/function.php');
    $user = query('admins', 'username', $_POST['username']);
    $pass = query('admins', 'password', $_POST['password']);
    if (isset($user) && isset($pass)) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $user;
        $_SESSION['tipoadmin'] = $user-> tipoadmin;
        unset($pass);
        unset($_POST['password']);
        header('Refresh: 0; URL = index.php');
    } else {
        $msg = 'Usuario y/o contraseña incorrectos.';
        echo('
        <script>
        alert("' . $msg . '");
        </script>
        ');
    }
}
?>
<div class="modal">
<div class="modal-content">
<div class="content-header">
<div class="content">
<p id="modal-title">Inicio de sesión</p>
<div class="footprint">
<div class="user-icon"></div>
</div>
</div>
</div>
<div class="content-body">
<form action = "index.php" method = "post">
<div class="form-content">
<div>
<div class="input-user"><label for="username">Usuario:</label></div>
<br>
<div class="input-pass"><label for="password">Contraseña:</label></div>
</div>
<div>
<input name="username" type="text" placeholder="">
<br>
<input name="password" type="password" placeholder="">
</div>
</div>
<div class="btn">
<button type="submit" id="btn-submit">Entrar</button>
</div>
</form>
</div>
</div>
<div class="footer"><img width="180" src="./Imagenes/login_mascotas.png" alt=""></div>
</div>
</body>
</html>

<?php
}
?>