
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

<input type="hidden" id="id_val" value="<?php echo $id;?>">
<button onclick="change_pic()">PIC</button>
<button onclick="change_usr()">MOD USR</button>

<div id="print"></div>   

  
<!-- IMMAGINE PROFILO
MODIFICA USER
MODIFICA PASSWORD -->
    
</body>
<script>
function change_pic() {
document.getElementById("print").innerHTML =  
    '<form action="../db/upload_img.php" method="POST" enctype="multipart/form-data">' +
    '<label for="cambia immagini">Immagini</label>' +
    '<input type="file" name="upPhoto" id="upPhoto">' +
    '<input type="submit" name="upFile">' 
    '<form>';
}
var id = document.getElementById("id_val").value;
console.log(id);
function change_usr() {
document.getElementById("print").innerHTML =  
    '<form action="../db/modify_usr.php" method="get">' + 
    '<label for="mod_usr">MODIFICA USERNAME:</label> <br>' +
    '<input type="hidden" name="id_usr" value="' + id +'">' +
    '<input type="text" name="modify_usr">' +
    '<input type="submit" name="sub_mod_usr">' +
    '</form>';
}
</script>
</html> 