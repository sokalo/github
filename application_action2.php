<?php

//var_dump($_POST,"<br>");
include("connect.php");
if(!isset($_POST["btnapply"]))
{
	echo "Nothing to do";
}
else
{
	$placeanddob="";
	$jobposition=$_POST["jobposition"];
	$name=$_POST["txtname"];
	$address=$_POST["txtaddress"];
	$placeofbod=$_POST["txtplaceofbirth"];
	$dob=$_POST["txtdob"];
	$pdob=$placeofbod."-".$dob;

	$nrc=$_POST["txtnrc"];
	$email=$_POST["txtemail"];
	$gender=$_POST["gender"];
	$marritalstatus=$_POST["marritalstatus"];
	$phone=$_POST["txtphoneno"];
	$education=json_encode($_POST["education"]);
	$foreignlanguage=json_encode($_POST["foreignlanguage"]);
	$workexperience=json_encode($_POST["workexperience"]);
	$reference=json_encode($_POST["reference"]);

	$txtjoinumg=$_POST["txtjoinumg"];
	$txtexpectedsalary=$_POST["txtexpectedsalary"];
	$strongpoint=$_POST["strongpoint"];
	$weakpoint=$_POST["weakpoint"];
	
	try {
		   
			if (!isset($_FILES['file']['error']) || is_array($_FILES['file']['error'])) 
			{
				throw new RuntimeException('Invalid parameters.');
				$_SESSION["Pesan"].="Invalid parameter when uploading file. <br>";
				echo 'bla';
			}

			switch ($_FILES['file']['error']) {
				case UPLOAD_ERR_OK:
					// You should also check filesize here.
			if ($_FILES['file']['size'] > 18900000) {
				throw new RuntimeException('Exceeded filesize limit.');
				$_SESSION["Pesan"].="Your File is Exceed filesize limit. <br>";
			}
	

			$finfo = new finfo(FILEINFO_MIME_TYPE);
			if (false === $ext = array_search(
				$finfo->file($_FILES['file']['tmp_name']),
				array(
					
					'zip' => 'application/zip',
				),
				true
			)) {
				throw new RuntimeException('Invalid file format.');
			}

			function random_string($length) {
			$key = '';
			$keys = array_merge(range(0, 9), range('a', 'z'));

			for ($i = 0; $i < $length; $i++) {
				$key .= $keys[array_rand($keys)];
			}

			return $key;
		}
			
			$filename = random_string(10).'.'.$ext;
			if (!move_uploaded_file($_FILES['file']['tmp_name'],sprintf('uploads/%s',$filename))) 
			{
				throw new RuntimeException('Failed to move uploaded file.');
			} else {
			echo 'File '.$filename.' is uploaded successfully.';
			}
			
				$message="Save Success";
				$status="unprocessed";
				$stmt = $conn->prepare( "INSERT INTO tblapplicationform ( JobPosition,Name,Address,PlaceandDOB,NRCOrPassport,PhoneNo,EmailAddress,
				Gender,MaritalStatus,Education,ForeignLanguage,WorkingExperience,Reference,ReasonToJoin,ExpectedSalary,StrongPoints,WeakPoints,Attachment,status) 
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)" );

				$stmt->bind_param( "sssssssssssssssssss", $jobposition, $name,$address,$pdob,$nrc,$phone,$email,$gender,
				$marritalstatus,$education,$foreignlanguage,$workexperience,$reference,$txtjoinumg,$txtexpectedsalary,$strongpoint,$weakpoint,$filename,$status);

				$stmt->execute();
				//echo "New records created successfully";
				if($stmt)
				{
					$last_id = $conn->insert_id;
					echo $last_id;
					$hash=md5($last_id);
					$sql= "UPDATE  tblapplicationform SET Hash='$hash',Is_Active=0 WHERE JobNo='$last_id'";
					$result = $conn->query($sql);			
					//echo "New record created and updated successfully. Last inserted ID is: " . $last_id;
					$url="successquestion.php";
		 			echo '<script> window.location = "'.$url.'"</script>';
					//header("Location:index.php?$message");
				}
				else{
					echo "dsdf".mysqli_error($conn);
				}
				

				$stmt->close();
				$conn->close();
			
	}
	
}
catch (RuntimeException $e) {
			echo $e->getMessage();

		}

}

?>