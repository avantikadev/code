
<?php
 $user = $_SESSION['username'];

 if($user!="admin"){
    redirect('signout.php');
 }
 /* change the line -3  "admin" to your admin username. 
 Edit "signout.php" to your signout link */
 
? >
