<?php
   include('session.php');
    
?>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$service=$_POST["service"];
$details=$_POST["details"];
$store=$_POST["store"];
$quantity=$_POST["quantity"];

	$sql = "INSERT INTO orders (ocat,odet,ostore,oquan,cid) VALUES (?,?,?,?,?)";
         
                   if($stmt = mysqli_prepare($link, $sql))
                   {
                       // Bind variables to the prepared statement as parameters
                        mysqli_stmt_bind_param($stmt, "sssii", $service, $details, $store, $quantity, $login_id);
                        // Creates a password hash
            
                        //  Attempt to execute the prepared statement
                    

                        if(mysqli_stmt_execute($stmt))
                        {
                          // Redirect to login page
                          echo "<script type='text/javascript'>alert('Order Placed Successfully.');window.location.href = 'customer.php';</script>"; 
                        	
                        } 
                        else
                        {
  
                            echo "Something went wrong. Please try again later.";
                        }
                    }
}


 ?>