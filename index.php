<!doctype html>
<html>
<head>

   <title> Ingeniería de sw | Inicio</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="stylo.css">
</head>
<body>
<div id="global">
<header>
<img class ="image2" src="imagenes/aleatorias/images3.jpg" height="200" widht="950">

  <nav>
        <ul>
         	<li>
         		<a href ="index.php">Inicio</a>
         	</li>
         	<li>
         		<a href="integrantes.php">Integrantes</a>

         	</li>
         	<li>
         		<a href="contacto.php">Contacto</a>
         	</li>
        </ul>
	</nav>
</header>
<article>
	<section>
		<h2 class "subtitle"> BIENVENIDO</h2>
     
		<p> Esta es una página web creada por estudiantes de Ingeniería civil en computación como primera tarea de ayudantía.</p>

     <p>Visita nuestro <a href='http://github.com/ingenieriasw'>github</a></p>
  </section>
  <aside>
    <div id="aleatorias">
   <h2 style="color: #191970;";>
<?php
// Completamos el vector con frases
$vector = array(
1 => "Preguntarse cu&aacutendo los ordenadores podr&aacuten pensar es como preguntarse cu&aacutendo los submarinos podr&aacuten nadar
-- Edsger W. Dijkstra",
2 => "La funci&oacuten de un buen software es hacer que lo complejo aparente ser simple
-- Grady Booch",

);

// Obtenemos un número aleatorio
$numero = rand(1,2);

// Imprimimos la frase
echo "$vector[$numero]";
?>
</h2>
</div>
  </aside>
</article>
</div>
<div>

</div>
</body>
</html>