<?php

function validarNombreOApellido($nombreOApellido, $longitudMinima)
{

    $nombreOApellido = trim($nombreOApellido);

    return !empty($nombreOApellido) &&
        ctype_alpha($nombreOApellido) &&
        strlen($nombreOApellido) > $longitudMinima;
}

function validarGenero($genero)
{
  return !empty($genero);
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/*function validarNombreDeUsuario($nombreDeUsuario)
{
    $nombreDeUsuario = trim($nombreDeUsuario);

    return !empty($nombreDeUsuario) &&
        strlen($nombreDeUsuario) > 7;
} No tengo */

function validarContrasena($contrasena)
{
    $contrasena = trim($contrasena);

    return !empty($contrasena) &&
        strlen($contrasena) > 8;
}

 ?>
