<?php
$usuario='';
$pass='';
$error_usuario = "";
$error_contrasena = "";

//si es
if($_POST){
  //var_dump($_POST);
  $usuario = $_POST['correo'];
  $pass = $_POST['contrasena'];

  if (empty($usuario) && !filter_var($usuario , FILTER_VALIDATE_EMAIL)) {
    $error_usuario = "el usuario es incorrecto";
  }
  if ( empty ($pass)){
    $error_contrasena = "contraseña incorrecta";
  }

  $user = ValidarPass($_POST ['contrasena']);
  if ($user) {
    header ("location: index.php");
  }else {
    $error_usuario ="el usuario es incorrecto";
    $error_contrasena ="contraseña incorrecta";
  }
}


function ValidarPass($pass)
{
  //echo "El pass sin hashear es: " . $pass;
  $hashed = sha1($pass);
  //echo "Vamos a buscar el password: " . $hashed;
  $fp = fopen('users.json', 'r');
  while ($linea = fgets($fp)) {
    if (!empty($linea)) {
      //echo $linea;
      $linea = json_decode($linea, true);
      if ($linea['contrasena'] == $hashed) {
        header ("location: index_usuarios.php");
        session_start();
        $_SESSION ['nombre'] = $linea['nombre'];
      }

    }
  }

 return false;
}

?>
