<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="javascript.js" charset="utf-8"></script>
    <link href="css\index.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
      <h2><p>ingrese aquí la clave</p> </h2>
      <form class="" action="login.php" method="post" onsubmit="validar()">
        <input type="password" name="password" value= class="campo_password" id="password">
        <button type="submit" name="button" class="ingresar" > ingresar </button>

      </form>
      <?php
      if ($password === "sapereaude") {
        



      }


       ?>
<script type="text/javascript">
function validar() {
//nombre = document.getElementsByName('nombre').value;
//apellido = document.getElementsByName('apellido').value;
//correo = document.getElementsByName('correo').value;

password = document.getElementById('password').value;
if (password == "sapereaude") {
url = 'userspage/index.html';
}
if (password == "") {

return false;
}else {
  false;
}
}
</script>
  </body>
</html>
