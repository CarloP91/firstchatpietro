<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

    <title>HOME PAGE CHAT PIETRO</title>
</head>
<body>
<div class="float-end">
<button type="button" class="btn btn-secondary btn-sm prova" onclick="window.location.href='areapersonale/modifyprofile.php'">Area Personale</button>
</div><br>
<h1>BENVENUTO <?php echo $_SESSION['login_user']; ?></h1>  <a href="logout.php">LOGOUT</a>

 <!-- INIZIO MAIN DIV CHAT -->

  <div id="divChat">
 </div>
  
 <div class="d-flex justify-content-center">
    <input type="hidden" id="mittente" value="<?php echo $_SESSION['login_user']; ?>">
    <input type="textarea" id="messaggio">
    <button type="button" id="send_msg" class="btn btn-primary">Invia</button>

    </div>
    

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/insert_msg.js"></script>
<script src="js/select_msg.js"></script>
</html>