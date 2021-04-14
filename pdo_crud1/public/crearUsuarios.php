<?php
    require '../vendor/autoload.php';
    use Clases\Datos;

    $usuario=new Datos('users', 50);
    echo "Usuarios Creados";