<?php
// Include config file
require_once "config.php";

 if($_SERVER["REQUEST_METHOD"] == "POST"){
// Define variables and initialize with empty values
$category=$_POST["category"];
$password=$_POST["password"];
$name=$_POST["name"];
$phno=$_POST["phno"];
$city=$_POST["city"];
$add=$_POST["add"];


if($category=="customer")
{
  $sql="SELECT cid FROM customer WHERE cphno = '$phno'";
  if($stmt = mysqli_prepare($link, $sql))
  {
    //mysqli_stmt_bind_param($stmt, "i", $phno);
    if(mysqli_stmt_execute($stmt))
    {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    //echo "This Phone Number Already Exits";
                  echo "<script type='text/javascript'>alert('This Phone Number Already Exists');window.location.href = 'index.php';</script>";
                }
                else
                {
                    $sql = "INSERT INTO customer (cpass,cname,cphno,ccity,caddr) VALUES (?, ?, ?, ?, ?)";
         
                   if($stmt = mysqli_prepare($link, $sql))
                   {
                       // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "ssiss", $password, $name, $phno, $city, $add);
                        // Creates a password hash
            
                        //  Attempt to execute the prepared statement
                        if(mysqli_stmt_execute($stmt))
                        {
                          // Redirect to login page
                          header("location: index.php");
                        } 
                        else
                        {
  
                            echo "Something went wrong. Please try again later.";
                        }
                    }
                }
      }
      else
      {
                echo "Oops! Something went wrong. Please try again later.";
      }
  }
}
else{

$sql="SELECT sid FROM staff WHERE sphno = '$phno'";
  if($stmt = mysqli_prepare($link, $sql))
  {
    //mysqli_stmt_bind_param($stmt, "i", $phno);
    if(mysqli_stmt_execute($stmt))
    {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    echo "This Phone Number Already Exits";
                }
                else
                {
                    $sql = "INSERT INTO staff (spass,sname,sphno,scity,saddr) VALUES (?, ?, ?, ?, ?)";
         
                   if($stmt = mysqli_prepare($link, $sql))
                   {
                       // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "ssiss", $password, $name, $phno, $city, $add);
                        // Creates a password hash
            
                        //  Attempt to execute the prepared statement
                        if(mysqli_stmt_execute($stmt))
                        {
                          // Redirect to login page
                          header("location: index.php");
                        } 
                        else
                        {
  
                            echo "Something went wrong. Please try again later.";
                        }
                    }
                }
      }
      else
      {
                echo "Oops! Something went wrong. Please try again later.";
      }
  }
}}
?>