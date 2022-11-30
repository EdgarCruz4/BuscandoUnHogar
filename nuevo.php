<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header('Refresh: 0; URL = index.php');
}
else {
    require_once('backend/function.php');
    $id = '';
    $nombre = '';
    $especie = '';
    $edad = '';
    $genero = '';
    $tamano = '';
    $descripcion = '';
    $foto = null;

    if (count($_FILES) > 0) {
        if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $imgData = file_get_contents($_FILES['foto']['tmp_name']);
            $imgType = $_FILES['foto']['type'];
            $_POST['Foto'] = addslashes($imgData);
        }
    }

    if (isset($_POST['update-item'])) {
        $id = $_POST['update-item'];
        $row = query('mascotas', 'id', $id);
        if ($row) {
            $nombre = $row->Nombre;
            $especie = $row->Especie;
            $edad = $row->Edad;
            $genero = $row->Genero;
            $tamano = $row->Tamano;
            $descripcion = $row->Descripcion;
            $foto = $row->Foto;
        }
    } elseif (isset($_POST['btn-update'])) {
        $id = $_POST['btn-update'];
        unset($_POST['btn-update']);
        $sql = update('mascotas', $_POST, "id='" . $id . "'");
        $message = '';
        if (isset($sql)) {
            $message = 'Registro actualizado';
        } else {
            $message = 'Ocurrio un error al actualizar el registro.\nPor favor intenta de nuevo.';
        }
        echo('
            <script>
            alert("'. $message .'");
            </script>
            ');
            header('Refresh: 0; URL = index.php');
    } elseif (isset($_POST['btn-submit'])) {
        unset($_POST['btn-submit']);
        $sql = insert('mascotas', $_POST);
        $message = '';
        if (isset($sql)) {
            $message = 'Registro agregado';
        } else {
            $message = 'Ocurrio un error al hacer el registro.\nPor favor intenta de nuevo.';
        }
        echo ('
        <script>
        alert("' . $message . '");
        </script>
        ');
    }
?>
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
</header>
<div class="modal">
<div class="modal-content">
<div class="content-left">
<label onclick="openFile();">
<?php
if (isset($_POST['update-item'])) {?>
<img src="data:image/jpeg;base64,<?php echo(base64_encode($foto))?>" id="thumbnail" alt="Subir imagen" style="width: 100%; height: 100%;">
<?php
} else {
?>
<img src="" id="thumbnail" alt="Subir imagen" style="width: 100%; height: 100%;">
<?php
}
?>
</label>
</div>
<div class="content-right">
<div class="content-header">
<div class="content">
<p id="modal-title">Nuevo integrante</p>
</div>
</div>
<div class="content-body">
<form id="form" action="nuevo.php" method="POST" onsubmit="return confirm('Confirmar?');" enctype="multipart/form-data">
<input type="file" name="foto" id="upload-photo">
<div class="form-content">
<div class="labels">
<label for="mascota">Mascota:</label>
<label for="nombre">Nombre:</label>
<label for="edad">Edad:</label>
<label for="genero">Genero:</label>
<label for="tamano">Tamaño:</label>
<label for="descripcion">Descripción:</label>
</div>
<div>
<div class="especie">
<?php
    if(isset($_POST['update-item']))
    {
        if($especie == 'perro'){
            ?>
            <label for="especie">Perro</label>
            <?php
        }else{
            ?>
            <label for="especie">Gato</label>
            <?php
        }
    }else{
        ?>
        <input name="especie" type="radio" <?php echo($especie == 'perro' ? 'checked' : ''); ?> value="perro">
        <label for="especie">Perro</label>
        <input name="especie" type="radio" <?php echo($especie == 'gato' ? 'checked' : ''); ?> value="gato">
        <label for="especie">Gato</label>
        <?php
    }
?>

</div>
<?php
if (isset($_POST['update-item'])){
    ?>
    <input name="nombre" type="text" value="<?php echo($nombre); ?>" disabled>
    <?php
}else{
    ?>
    <input name="nombre" type="text" value="<?php echo($nombre); ?>">
    <?php
}
?>
<input name="edad" type="number" min="1" value="<?php echo($edad); ?>">
<select id="genero" name="genero" style="width: 160px; border-radius: 8px; padding-top: 2px; padding-bottom: 2px;">
<option <?php echo($genero == 'Macho' ? 'selected' : ''); ?>>Macho</option>
<option <?php echo($genero == 'Hembra' ? 'selected' : ''); ?>>Hembra</option>
</select>
<input name="tamano" type="text" value="<?php echo($tamano); ?>">
<input style="height: 30px; width: 200px;" name="descripcion" type="text" value="<?php echo($descripcion); ?>">
</div>
</div>
<div class="btn">
<button type="reset" onclick="window.history.back();" id="btn-reset">Cancelar</button>
<?php
if (isset($_POST['update-item'])) {?>
    <button type="submit" name="btn-update" value="<?php echo($id);?>">Actualizar</button>
<?php
} else {
?>
    <button type="submit" name="btn-submit" value="insert">Registrar</button>
<?php
}
?>
</div>
</form>
</div>
</div>
</div>
</div>
<script>
let form = document.getElementById("form");
let file = document.getElementById("upload-photo");
let thumbnail = document.getElementById("thumbnail");
const reader = new FileReader();

function openFile() {
    file.click();
}
reader.addEventListener("load", () => {
    //reader.result
});

file.addEventListener("change", (e) => {
    const files = event.target.files;
    for (const f of files) {
        thumbnail.src = URL.createObjectURL(f);
        reader.readAsArrayBuffer(f);
        break;
    }
});

// form.addEventListener('submit', (e) => {
//     e.preventDefault();
//     const data = new FormData(e.target);
//     alert([...data.entries()]);
// });
</script>
</body>
</html>
<?php
}
?>