
<?php
session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}

include '../connect.php';

//var_dump($_POST['qid']);
$totalscore=$_POST['totalscore'];
$markername=$_POST['markername'];
$remark=$_POST["remark"];
$recommend=$_POST["recommend"];
$jno=$_POST["jobno"];


if($recommend=="recommended")
{
	$status="recommend";
	//echo $status;
	$stmt = $conn->prepare( "UPDATE  tblapplicationform SET gradingremark=? , status=? WHERE JobNo=?" );

    $stmt->bind_param( "sss", $remark,$status,$jno);

    $stmt->execute();
    $url="acceptedarchieve.php";
	echo '<script> window.location = "'.$url.'"</script>';
    
}

else if($recommend=="notrecommended")
{
	$status1="notrecommended";


	$stmt = $conn->prepare( "UPDATE  tblapplicationform SET gradingremark=? ,status=? WHERE JobNo=?" );

    $stmt->bind_param( "sss", $remark,$status1,$jno);

    $stmt->execute();
    $url1="rejectedarchieve.php";
	echo '<script> window.location = "'.$url1.'"</script>';
    
    	
}
else if($recommend=="recommendedundercandidate")
{
	$status2="recommendedundercandidate";

	$stmt = $conn->prepare( "UPDATE  tblapplicationform SET gradingremark=? ,status=? WHERE JobNo=?" );

    $stmt->bind_param( "sss", $remark,$status2,$jno);

    $stmt->execute();
    
    $url2="onprocess.php";
		
	echo '<script> window.location = "'.$url2.'"</script>';
   
}

?>