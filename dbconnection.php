<?php  

// $showAlert = false;
// $showError = false;


$servername ="localhost";
$username = "root";
$password = "";
$dbname = "emailphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn){
	// echo "Connection Successful";
}
else{
    echo "No Connections";
}

?>