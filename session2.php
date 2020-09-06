<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select * from staff where sphno = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['sname'];
   $login_id = $row['sid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>