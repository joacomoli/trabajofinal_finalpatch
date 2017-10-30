<!doctype html>


<html>
 <head>
   <meta charset="utf-8">
   <!-- para hacer un comentario meter <!-- para cerrar -->
   <!-- si hago un html un p5js(js) y css si en el js no hago un canvas el html se superpone, si hago el canvas entonces el canvas hará que se superponga sobre el html -->
   <title>pagina de la picante</title>
   <!-- importante! -->
  <link href="./css/index.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <header>
    <h1><img src="http://emojipedia-us.s3.amazonaws.com/cache/83/dc/83dce319f1089161c9065882911871b7.png" alt="fueguito picante"> Eventos <img src="http://emojipedia-us.s3.amazonaws.com/cache/83/dc/83dce319f1089161c9065882911871b7.png" alt="fueguitopicante"></h1>
  </header>
 </head>
 <body>
   <nav class="barra">
        <ul>
 <li><a href=".\index.html"><input type="button" value="Home" class="button"></a></li>

 <li><a href=".\fotos.html"><input type="button" value="Fotos" class="button"></a></li>
 <li><a href=".\integrantes.html"><input type="button" value="Integrantes" class="button"></a></li>
 <!-- <li><a href=".\juegos.html"><input type="button" value="juegos" class="button"></a></li> -->
 <li><a href=".\publicaciones.html"><input type="button" value="Publicaciónes" class="button"></a></h2></li>
  <li><a href=".\eventos.php"><input type="button" value="Eventos" class="selected"></a></li>
 </article>
        </ul>
 </nav>
<article>
<h2><p> <script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2017 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script></p></h2>




</article>
 </body>
</html>
