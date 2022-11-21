<!DOCTYPE >
<html style=" background-size: cover; background-image: url(Imagenes/fondo.jpg);  width: 100%;  height: 100%;}" >
<head>
<meta charset="utf-8">
<title>Catálogo de perros</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

<div>
      <header>
        <div class="logo" >             
               <h1>
                <img class="Gato" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAASVJREFUSEvtldENwjAMRK+bwCYwCTAJMAkwCWwCm4BeZVchTdIQ6B+R+pHWufOd7bTTzKubGV81BFdJC0lLS+Ygiae0TpJ2BNQQPA3JY9kfCySAbx27REDWBK8knT0jSU6YInHwIfmYIAQNLcCeh71wgqny9dghAZnity8Ab2aHg/OtmeBuxQztSGXpBGtTxTlWvB8piIuZs8Dj6BKUuep4PyIgEJtKHQKpK/26BikAbNhbIiWCwea4i1CwsT5OAXAQhe57joREaJDsoOU6Bc/xmkRQkkuin+IWAs5AQoYsH0TeXWwgw5b+WEE8I4D2VliLv4G3KigVd3T15O6i2mmNyZoIwkMhcXi7Zmtao+BPkGyKlNcE/qwGUxdZ9feaf3I1WCrwBVDhSxl+76FzAAAAAElFTkSuQmCC"/>
                <img class="Perro"src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPdJREFUSEvtldENwjAMRK+bwCTAJjAJMAkwSWES2AR0VRxZxmniQn8Q/omUxn4+O246zGzdzPERBfQALgDOrYlFAc8UeAng0QKZCtCxr2OqvgEQ2BHAwarSANZ3AYDySyYlku+b5HMyDuzRjnsWsDZ7FmQBTIZJMTk3eQ+Q6Y7TPQWs9ZcXYKiEBkgmXD1jOfYAqLJmuR+2yQzOLD2jMs6AVw59PmdvFcghW2fZpyMbxySoxFP6Vl7vmpYABBEik7wFsEp7t9J0RwFajQwY16JNBeiAo8P6+4CSfH0RPirRH+A+mS31bTkzXOXog1P7yfn/7LBXwOEFH7Y2GVtcII4AAAAASUVORK5CYII="/>
                Buscando Un Hogar</h1> 
            </div>
       <nav class="Menu">
             <ul>                    
                    <li>
                            <a href="#">Nuevo Integrante </a>
                    </li> 
                    <li>
                            <a href="#">Donaciones <img class="Flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC"/></a>
                            <ul>
                                   <li><a href="CatalogoGato.php">Especie</a></li>
                                   <li><a href="CatalogoPerro.html">Economicas</a></li>
                            </ul></li>
                    <li>
                            <a href="#">Adoptar <img class="Flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC"/></a>
                            <ul>
                                   <li><a href="CatalogoGato.php">Perro</a></li>
                                   <li><a href="CatalogoPerro.html">Gato</a></li>
                            </ul></li>
              </ul>
       </nav>         
       </header>

<div class="flex-container" >




<?php
require('./backend/function.php'); //
$rows = queryAll('mascotas'); // returns all the rows of the db
while ($row = mysqli_fetch_object($rows)) { // draw each row returned
?>
<section class="card-section">
<div class="card">
    <div class="card-header">
    <img src="Imagenes/Metri.PNG">
    </div>

<div class="card-body" >
        <div class="item">
              <b>
                     <p>
                            <?php echo $row->Nombre; ?>
                     </p>
                     <p>
                            <?php echo $row->Genero; ?>
                     </p>
              </b>
       </div>
       <a href="InfoMascotas/infoMetri.html">
                    Editar
              </a>
              <a href="InfoMascotas/infoMetri.html">
                    Eliminar
              </a>
</div>
</div>
</section>
<?php
}
?>
</div>

<div class="container" >
<div id="map"> 
    
    <script>
        function initMap(){
            var location = { lat: 20.496216579109248, lng: -99.18282259790074}
           var map = new google.maps.Map(document.getElementById("map"), {
            zoom:15,
            center: location
           });

           var marker = new google.maps.Marker({
            position: location,
            map: map
           })

        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyE0EWBwm03ozpLdUGmXwmIEiooxrIf7o&callback=initMap">

    </script>
    

</div>

<section class="card-section-direction">
<div class="card-direction">
<div class="card-body" >
       <p>Dirección: Ixmiquilpan-Actopan, Carretera: Ixmiquilpan-Capula, KM.4, Nith, 42300, Ixmiquilpan, Hgo.</p>
</div>
</div>
</section>

</div>


</body>
</html>