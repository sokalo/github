<?php
session_start();
include '../connect.php';

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM userlist WHERE Username='$username' AND Password='$password' AND isActive=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$_SESSION["Username"]=$row["Username"];
		$_SESSION["temp"]=$row["Username"];
		$_SESSION["UserID"]=$row["UserID"];
		$_SESSION["Role"]=$row["role"];
		$_SESSION["FullName"]=$row["fullName"];
		$url="index.php";
		
		 echo '<script> window.location = "'.$url.'";</script>';
    die;
		//<!--header("Location:index.php");-->
    
    }
} else {
    echo header("Location:login.php");
}
$conn->close();
?>
