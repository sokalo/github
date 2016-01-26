
<?php
include("connect.php");
//var_dump($_POST['qid']);
$answer=$_POST['answer'];
$jobid=$_POST['jobno'];
$x=0;

while ($x<count($_POST['qid'])) {
	$question=$_POST['qid'][$x];
	$answer=$_POST['answer'][$x];
	
	$stmt = $conn->prepare( "INSERT INTO `answer_list`(`JobNo`, `QuestionID`, `Answer`) VALUES (?,?,?)" );

	$stmt->bind_param( "sss",$jobid,$question,$answer);

	$stmt->execute();
	//$sql ="INSERT INTO `answer_list`(`JobNo`, `QuestionID`, `Answer`) VALUES ('$jobid','$question','$answer')";
	//echo $sql.'<br>';
	$x++;
	
}
if($stmt)
{
	$status="wait grading test";
	$is_active=0;

$stmt1 = $conn->prepare( "UPDATE  tblapplicationform SET status=?,Is_Active=? WHERE JobNo=?" );
$stmt1->bind_param( "sss", $status,$is_active, $jobid);
$stmt1->execute();
if($stmt1)
{
		$url="successquestion.php";
		
		 echo '<script> window.location = "'.$url.'"</script>';
	//	header("location:successquestion.php");
}

}
				
//update status to 'wait grading test' and isactive=0

?>