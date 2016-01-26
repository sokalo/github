<?php
session_start();

include '../connect.php';

//$processdate=new DateTime(date('d-m-Y'));
//$expireddate = new DateTime(date('d-m-Y'));
//$expireddate->add(new DateInterval('P7D'));

$now = date('d-m-Y');
$start_date = strtotime($now);
$end_date = strtotime("+7 day", $start_date);

$processdate=date('d-m-Y', $start_date) ;
$expireddate=date('d-m-Y', $end_date) ;
$jobno=$_POST["jobno"];

//$expdate=strtime()
$status='wait applicant test';
$level=$_GET["qtype"];
$hash=$_GET["hash"];
$isactive=1;
$stmt = $conn->prepare( "UPDATE  tblapplicationform SET processed_date=?,level=?,expired_date=?,status=? ,is_active=? WHERE Hash=?" );

				$stmt->bind_param( "ssssss", $processdate,$level, $expireddate,$status,$isactive,$hash);

				$stmt->execute();		
				//echo "update success"		
				$url="onprocess.php";
		 					echo '<script> window.location = "'.$url.'"</script>';
			//	header("location:rejectedarchieve.php");
 //$todaydate=date("d-m-y");
 //$date = $todaydate;
 //$date =  $date+7;
  //echo date('d-m-y', $date);
//$datenow=now...

//$expiry=datenow+7;

//$sql= update set processdate=datenow, expiry date=expirydayte, level=level,status='wait applicant test' where hash=hash, 


//forward to unprocessed.



?>