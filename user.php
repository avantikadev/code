<?php
require_once('../function.php');   
connectdb();
session_start();

/* Edit "function.php" to your database connection file */


if (!is_user()) {
    redirect('index.php');  
}
    /*change the "index.php" to any link where you want to redirect him if he is not user */
?>
