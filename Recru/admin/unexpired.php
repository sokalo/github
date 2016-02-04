<?php

session_start();

include '../connect.php';

//$processdate=new DateTime(date('d-m-Y'));
//$expireddate = new DateTime(date('d-m-Y'));
//$expireddate->add(new DateInterval('P7D'));

$now = date('d-m-Y');
$start_date = strtotime($now);
$end_date = strtotime("+7 day", $start_date);

//$processdate=date('d-m-Y', $start_date) ;
$expireddate=date('d-m-Y', $end_date) ;
$jobno=$_GET["jobno"];

//$expdate=strtime()
//$status='wait applicant test';
//$level=$_GET["qtype"];
//$hash=$_GET["hash"];
//$isactive=1;
$stmt = $conn->prepare( "UPDATE  tblapplicationform SET expired_date=? WHERE JobNo=?" );

				$stmt->bind_param( "ss", $expireddate,$jobno);

				$stmt->execute();		
				//echo "update success"		
				$url="onprocess.php";
		 		echo '<script> window.location = "'.$url.'"</script>';
				//header("location:rejectedarchieve.php");


?>