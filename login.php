<?php 
require_once "config.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$category=$_POST["category"];
	$phno=$_POST["phno"];
	$password=$_POST["password"];

	if($category == "customer")
	{
		$sql="SELECT cid FROM customer WHERE cphno = '$phno' AND cpass = '$password' ";
		if($stmt = mysqli_prepare($link,$sql))
		{
			if(mysqli_stmt_execute($stmt))
			{
				mysqli_stmt_store_result($stmt);
				if(mysqli_stmt_num_rows($stmt) == 1)
				{         
					 //session_register("phno");
         			 $_SESSION['login_user'] = $phno;
					header("location: customer.php");
				}
				else
				{
					echo "<script type='text/javascript'>alert('Check Your Phone Number or Password.If This Phone Number Is Not Registered,Kindly Register Yourself First Please.');window.location.href = 'index.php';</script>";	
				}
			}
		}
		else
		{
			echo "Oops!!Connection Lost.";
		}
	}
	else
	{
		$sql="SELECT sid FROM staff WHERE sphno = '$phno' AND spass = '$password' ";
		if($stmt = mysqli_prepare($link,$sql))
		{
			if(mysqli_stmt_execute($stmt))
			{
				mysqli_stmt_store_result($stmt);
				if(mysqli_stmt_num_rows($stmt) == 1)
				{
					$_SESSION['login_user'] = $phno;
					header("location: staff.php");
				}
				else
				{
					echo "<script type='text/javascript'>alert('This Phone Number Is Not Registered.Kindly Register Yourself First Please.');window.location.href = 'index.php';</script>";	
				}
			}
		}
		else
		{
			echo "Oops!!Connection Lost.";
		}	
	}
}
?>