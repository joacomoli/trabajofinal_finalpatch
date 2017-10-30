<?php
require_once "validacion.php";

function guardarUsuario($nombre, $apellido, $genero, $correo, $contrasena, $fotoPerfil)
{
    // Validar!
    $errores = validarUsuario($nombre, $apellido, $genero, $correo, $contrasena);

    if (empty($errores)) {
        // No hubo errores
        $contrasena = sha1($contrasena);

        // Transformarlo a json
        $jsonUser = json_encode([
            'nombre'     => $nombre,
            'apellido'   => $apellido,
            'genero'     => $genero,
            'correo'     => $correo,
            'contrasena' => $contrasena
        ]);

      if (escribirArchivoDeUsuario($jsonUser)){
        subirFoto($fotoPerfil);
      }
      return $resultado; //me met que ce n'est pas définit quand je m'enregistre
    } else {
        // Hubo errores
        return $errores;
    }
}

function escribirArchivoDeUsuario($usuarioJson)
{
  $fp = fopen("users.json", "a+");
  $resultado = fwrite($fp, $usuarioJson . PHP_EOL);
  return $resultado;
}

function validarUsuario($nombre, $apellido, $genero, $correo, $contrasena)
{
    $errores = [];

    if (! validarNombreOApellido($nombre, 1)) {
        $errores['nombre'] = "El nombre es invalido";
    }

    if (! validarNombreOApellido($apellido, 1)) {
        $errores['apellido'] = "El apellido no es valido";
    }
/* no es necesario para el genero? */
    if (! validarGenero($genero)){
      $errores['genero'] = "El Genero es invalido";
    }

    if (! validarEmail($correo)) {
        $errores['correo'] = "El mail ingresado no es valido";
    }

    /*if (! validarNombreDeUsuario($usuario)) {
        $errores['username'] = "El username ingresado no es valido";
    } no tengo */

    if (! validarContrasena($contrasena)) {
        $errores['contrasena'] = "La contrasena ingresada no es valida";
    }

    return $errores;
}

function subirFoto($fotoPerfil)
{
  if (count($fotoPerfil)) {
      $avatarFileName = $fotoPerfil['name'];
      $avatarFile = $fotoPerfil['tmp_name'];
      $avatarExtension = pathinfo($avatarFileName, PATHINFO_EXTENSION);

      $resultado = move_uploaded_file($avatarFile, 'fotoPerfil/' . md5($fotoPerfil['name']) . '.' . $avatarExtension);
  }

  return $resultado;
}

function buscarUsuario($username)
{
  $fp = fopen('users.json', 'r');
  while ($linea = fgets($fp)) {
    if (!empty($linea)) {
      $linea = json_decode($linea, true);
      if ($linea['user'] == $username) {
        return $linea;
      }
    }
  }
  return false;
}
