<?php
   include('db/config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      echo '<b style="color:red">Need Log In </b> <br>';
      echo "You will redirect in 5 seconds...";
      header("refresh:5;url=index.php");

      die();
   }
?>