<!DOCTYPE >
<html >
<head>
<meta charset="utf-8">
    <title>Encuesta</title>
    <link type="text/css" rel="stylesheet" href="encuesta.css">
    <link type="text/css" rel="stylesheet" href="estilo.css">
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
                     <li ><a href="#">Registrar/Ingresar</a></li>
                     <li>
                            <a href="#">Adoptar <img class="Flecha" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOBJREFUSEvtlN0NwjAMhH2b0E3oJjAJMAlsQjehmxwyElHS5sdJyBt+q+r44u/sQAYHBteXv0CRsENE8i4ip+IJW8IDwFlTfYGXiBxs54tZK4BpK6DFnz8SmQEsgYB+kLyKyKV4v3zCDYDW+cRuTEn2oHJocgI9qCYAq99gdNEaUQVokh18f5BUw49GPxYAcyw3+VSQtKLacS8i8rqwTJUbyaoOjCJuY1MoTa9pYnSzaIom+zciqWar6X5k0VQJRLY8OpJNHmw60S1XNNGR7BYw7kSQZjK5pXC1B60iwzt4A/3qSxkbGxzrAAAAAElFTkSuQmCC"/>
                        </a>
                            <ul>
                                   <li><a href="CatalogoGato.html">Gato</a></li>
                                   <li><a href="CatalogoPerro.html">Perro</a></li>
                            </ul></li> 
              </ul>
       </nav>         
       </header>

    <div class="rectangulo">
        <div id= "hueIzq"><img src="Imagenes/huella.png"></div>
        <div id="textEnc"><h2>Encuesta</h2></div>
        <div id= "hueDer"><img src="Imagenes/huella1.png"></div>
    </div>
        

<div align="center">  
    <form action="registrarAdop.php" method="POST">
       <table border="0">
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
<tr>
    <td>&nbsp;  </td> 
    <td>
        <input type="button" id="btn_cancelar" value="Cancelar" onclick="location.href='CatalogoGato.html'">
        <input type="submit" id="btn_enviar" value="Enviar" onclick="alert('¿Deseas enviar tu solicitud?')">
    </td>
</tr>
</div>
</table>   
</form>
</div>    
</body>
</html>