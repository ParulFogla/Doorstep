<?php
   include('session2.php');
?>


<?php
$u=1;
while ($u <= 1000) {
    if (isset($_POST[$u])) {
       break;
    }$u++;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
$sql = "UPDATE orders SET sid='$login_id', ostatus='1'  WHERE ooid=$u";
                        //  Attempt to execute the prepared statement
                    

                        if(mysqli_query($link,$sql))
                        {
                          // Redirect to login page
                         echo "<script type='text/javascript'>alert('Order Accepted Successfully.');window.location.href = 'staff.php';</script>";      
                        } 
                        else
                        {
  
                            echo "Something went wrong. Please try again later.";
                        }
              
}


 ?>