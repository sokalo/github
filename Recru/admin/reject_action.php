<?php

session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}

include '../connect.php';

$status1="unprocessed";
$jno=$_POST["jobno"];

	$stmt = $conn->prepare( "UPDATE  tblapplicationform SET status=? WHERE JobNo=?" );

    $stmt->bind_param( "ss",$status1,$jno);

    $stmt->execute();
    $url1="unprocessed.php";
	echo '<script> window.location = "'.$url1.'"</script>';
    
?>