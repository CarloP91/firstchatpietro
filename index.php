<?php 
session_start();
include("db/config.php");
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>PRIMA CHAT PIETRO</title>
</head>
<body>
    
    <!-- BUILD LOGIN -->
    <div class="container1">
    <form action="" method="POST">
        <label for="username">USERNAME</label>
        <input type="text" name="username" id="username" required> 
        <br>
        <label for="paswword">PASSWORD</label>
        <input type="password" name="password" id="password" required>
        <br>
        <input type="submit" value="Login">
        <?php include("login.php"); ?>
    </form>
 

    <span id="orologio"></span>
    <span id="data"></span>

   

   
   
   
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script>


   


    
</script>
</html>