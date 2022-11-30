<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>Buscando Un Hogar</title>
        <link rel="stylesheet" type="text/css" href="css/encuesta.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/listaAdopcion.css">
        
</head>

<body>
        <?php
                include 'backend/config.php';
                $conexion= mysqli_connect($host,$username,$password,$dbname);
                $query = "SELECT * FROM adopciones;";
                $result = $conexion->query($query);
        ?>
        <header class="navbar">
                <div class="logo">
                        <div class="gato"></div>
                        <div class="perro"></div>
                        <h1>Buscando Un Hogar</h1>
                </div>
        </header>
        <div class="modal">
                <div class="table_box">
                <div align="center">
                        <h1 class="title_l">Lista de solicitudes de adopción</h1>
                </div>
                <table>
                        <thead>
                                <tr>
                                        <th>Nombre del solicitante</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Motivo de adopción</th>
                                        <th>Mascota solicitada</th>
                                        <th>Especie</th>
                                </tr>
                        </thead>
                        <tbody>
                                <?php
                                while($lista = $result->fetch_assoc())
                                {
                                ?>
                                <tr>
                                        <th><?php echo $lista['Nombre'];?></th>
                                        <td><?php echo $lista['Colonia'].', '.$lista['Municipio'].', '.$lista['Estado'];?></td>
                                        <td><?php echo $lista['Telefono'];?></td>
                                        <td><?php echo $lista['Motivo'];?></td>
                                        <td><?php echo $lista['MascotaS'];?></td>
                                        <td><?php echo $lista['Tipo'];?></td>
                                </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                </table>
                <div class="button_l">
                        <button onclick="window.location.href = 'index.php'">Regresar</button>
                </div>
                </div>
        </div>
</body>

</html>