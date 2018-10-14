<?php
require_once('../function.php');   
connectdb();
session_start();
/* change the "function.php to your database connection page */

$group = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE role='admin'"));

/* change "admin" to role name */

<?php
 $user = $_SESSION['username'];

 if($user!="".$group.""){
    redirect('signout.php');
 }
?>
