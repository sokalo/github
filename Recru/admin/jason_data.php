<?php
session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}
include '../connect.php';

$sqlall = "SELECT * FROM tblapplicationform where status='recommend'";
$resultall = $conn->query($sqlall);
$countall = $resultall->num_rows;

$emparray = array();
    while($row =mysqli_fetch_assoc($resultall))
    {
        $emparray[] = $row;
    }

$json=json_encode($emparray);
echo $json;
?>
