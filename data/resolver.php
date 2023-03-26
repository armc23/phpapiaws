<?php
require './inc/config.php';


$username = $_POST['username'];

$query = "INSERT INTO users (username) VALUES('$username')";
$result = mysqli_query($conn, $query);
if($result){
	echo "User is Created successfully";
	header("Location: ./index.php");
        exit();
          
}
?>
