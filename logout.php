<?php

session_start();
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

//     $_SESSION['start'] = time();
  
//     //    taking now logged in time
//       $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 
  
//     //    ending a session in 1  minutes from the starting time
  
//       header("location: signin.php");
//       exit;
session_destroy();

header('location:index.php');



?>