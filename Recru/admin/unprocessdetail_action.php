<?php 
include '../connect.php';

$process=$_POST["process"];
$jobno=$_POST["jobno"];
echo $process;

if ($process=="Reject")
{

				$stmt = $conn->prepare( "UPDATE  tblapplicationform SET status=? WHERE JobNo=?" );

				$stmt->bind_param( "ss", $process, $jobno);

				$stmt->execute();				
				//header("location:rejectedarchieve.php");
				$url="rejectedarchieve.php";
		 		echo '<script> window.location = "'.$url.'?hash='.$hash.'"</script>';
				//echo "update success";
				
	
}
if($process==="Process")
{
				$stmt = $conn->prepare( "UPDATE  tblapplicationform SET status=? WHERE JobNo=?" );

				$stmt->bind_param( "ss", $process, $jobno);

				$stmt->execute();				
				
				$query="Select * from tblapplicationform where JobNo='$jobno'";
				$result = $conn->query($query);	
				if($result->num_rows > 0)
				{
						while($row = $result->fetch_assoc())
						{			
								$hash=$row["Hash"];
								//header("location:?hash=");
		 					$url="process.php";
		 					echo '<script> window.location = "'.$url.'?hash='.$hash.'"</script>';

						}
						
						
				}
				
}
?>