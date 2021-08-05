<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Subir Nivel</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="img/icon2.png" type="image/x-icon">

</head>
<body>
    <img src="img/logo.png" alt="logo" class="logo">
    <h2 class="niveles-mundiales">Subir Niveles</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Nombre Nivel" class="sn" maxlength="22">
        <br>
        <br>
        <input type="url" name="email" placeholder="Link Mediafire" class="sn">
        <br>
        <br>
        <input type="text" name="creador" placeholder="Creador" class="sn" maxlength="15">
        <br>
        <br>
        <select name="apariencia" class="sn">
        <br>
        <br>
        <option value="smb" class="sn">smb</option>
        <option value="smw" class="sn">smw</option>
        <option value="smb3" class="sn">smb3</option>
        <option value="nsmbu" class="sn">nsmbu</option>
        <br>
        <input type="submit" value="Subir Nivel" name="register">
    
    </form>
    <br>
    <br>
    <h4 class="niveles-mundiales">Únete a nuestro server de Discord para recibir soporte y actualizaciones!</h4>
    <br>
    <a href="https://discord.gg/AMXZe8DFV3" class="discord">Click aquí para unirte al servidor</a>
<h4 class="Nota">Nota: Para adjuntar tu nivel súbelo primero a mediafire.com , pon el enlace en el campo correspondiente. (Otro tipo de enlaces se eliminaran!).</h4>

<?php


    include("registrar.php");

    $select = "SELECT * FROM `datos`";
?>

<?php
$dbhost = "localhost";
$dbuser = "id17256998_registro1";
$dbpass = "bs2kHAKK}UWgRokk";
$dbname = "id17256998_registro";
?>
</body>
</html>