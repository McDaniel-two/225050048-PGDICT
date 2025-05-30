<?php

  session_start();

  define('SITEURL', 'http://localhost/portifolio/');

  //conect to DB
    $conn = mysqli_connect('localhost','root','') or die(msqli_error()); //db connection
    $db_select = mysqli_select_db($conn, 'portfolio') or die(msqli_error()); //db selection

?>