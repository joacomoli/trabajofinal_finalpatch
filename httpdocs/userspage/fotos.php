
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
  <?php
  $my_images_arr = scandir("images");
  $img_string = "";

  foreach ($my_images_arr as $img_name) {
    if (strlen($image_name) > 2 {
      $img_string .= '<img src="images/'.$image_name.'">';

    }
  }
   ?>

  <header>
  Album de fotos
  </header>
 </head>
 <body>
   <nav class="barra">
        <ul>
 <li><a href=".\index.html"><input type="button" value="Home" class="button"></a></li>

 <li><a href=".\fotos.html"><input type="button" value="Fotos" class="selected"></a></li>
 <!-- <li><a href=".\juegos.html"><input type="button" value="juegos" class="button"></a></li> -->

 <li><a href=".\publicaciones.html"><input type="button" value="Publicaciónes" class="button"></a></h2></li>
 </article>
        </ul>
 </nav>
 <article>
   <h2><p>prueba 1</p></h2>
 </article>
 <div id="gHolder">
   <div id="theBigimageHolder">
     <?php
     echo '<img src="images/'.$my_images_arr[2].'" id="bigImage">';
      ?>

   </div>
   <div id="thumbnailsHolder">
     <?php echo $img_string; ?>

   </div>

 </div>
  <!--
  <img src="./images/WhatsApp Image 2017-10-04 at 10.02.03 PM.jpeg" alt="" class="foto">
<img src="images\WhatsApp Image 2017-08-07 at 6.12.09 PM.jpeg" alt="foto grupal" class="foto">
<img src="images\WhatsApp Image 2017-08-07 at 6.14.15 PM.jpeg" alt="foto grupal 4" class="foto">
<p>Estamos trabajando para tener una pagina mas completa, por favor paciencia.</p>
-->
</article>

 </body>
</html>
