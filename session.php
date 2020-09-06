<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select * from customer where cphno = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['cname'];
   $login_id = $row['cid'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }
?>