<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light "
        style="background-color: #5ade77b3; font-size:1.5em; font-family: Arial, Helvetica, sans-serif;">
        <div class="container-fluid collapse navbar-collapse">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link " href="<?=base_url('libreria')?>">Ver Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('listar')?>">Editar los libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('crear')?>">Agregar un libro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('libreriaC')?>">Ver todos los libros</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url('/buscar') ?>">
                <input class="form-control mr-sm-2" size="100" maxlength="128" name="search" type="search"
                    placeholder="search" aria-label="search">
                <button class="btn btn-warning my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <ul class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <?php echo session('usuario'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir <span
                            class="sr-only">(current)</span></a>
                </div>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        <?php if (session('mensaje')) {?>
        <div class="alert alert-danger" role="alert">
            <?php
echo session('mensaje');
    ?>
        </div>
        <?php
}
?>