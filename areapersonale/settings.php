<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>AREA PERSONALE - SETTING</title>
</head> 
<body>
<!--     <form action="../db/upload_img.php" method="POST" enctype="multipart/form-data">
    <label for="cambia immagini">Immagini</label>
    <input type="file" name="upPhoto" id="upPhoto">
    <input type="submit" name="upFile">
    <form> -->

    <form action="../db/modify_usr.php" method="get">
    <label for="mod_usr">MODIFICA USERNAME:</label> <br>
    <input type="hidden" name="id_usr" value="1">
    <input type="text" name="modify_usr">
    <input type="submit" name="sub_mod_usr">
    </form>
  
<!-- IMMAGINE PROFILO
MODIFICA USER
MODIFICA PASSWORD -->

    
</body>
</html>