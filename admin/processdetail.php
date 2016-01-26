<?php
session_start();
date_default_timezone_set("UTC");
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}

include '../connect.php';
$JobNo=$_REQUEST["jno"];
$sql = "SELECT * FROM tblapplicationform where JobNo='$JobNo'";
$result = $conn->query($sql);

$sqlans = "SELECT * FROM answer_list where JobNo='$JobNo'";
$resultans = $conn->query($sqlans);


 
  // Time format is UNIX timestamp or
  // PHP strtotime compatible strings
  function dateDiff($time1, $time2, $precision = 6) {
    // If not numeric then convert texts to unix timestamps
    if (!is_int($time1)) {
      $time1 = strtotime($time1);
    }
    if (!is_int($time2)) {
      $time2 = strtotime($time2);
    }
 
    // If time1 is bigger than time2
    // Then swap time1 and time2
    if ($time1 > $time2) {
      $ttime = $time1;
      $time1 = $time2;
      $time2 = $ttime;
    }
 
    // Set up intervals and diffs arrays
    $intervals = array('year','month','Day','hour','minute','second');
    $diffs = array();
 
    // Loop thru all intervals
    foreach ($intervals as $interval) {
      // Create temp time from time1 and interval
      $ttime = strtotime('+1 ' . $interval, $time1);
      // Set initial values
      $add = 1;
      $looped = 0;
      // Loop until temp time is smaller than time2
      while ($time2 >= $ttime) {
        // Create new temp time from time1 and interval
        $add++;
        $ttime = strtotime("+" . $add . " " . $interval, $time1);
        $looped++;
      }
 
      $time1 = strtotime("+" . $looped . " " . $interval, $time1);
      $diffs[$interval] = $looped;
    }
    
    $count = 0;
    $times = array();
    // Loop thru all diffs
    foreach ($diffs as $interval => $value) {
      // Break if we have needed precission
      if ($count >= $precision) {
        break;
      }
      // Add value and interval 
      // if value is bigger than 0
      if ($value > 0) {
        // Add s if value is not 1
        if ($value != 1) {
          $interval .= "s";
        }
        // Add value and interval to times array
        $times[] = $value . " " . $interval;
        $count++;
      }
    }
 
    // Return string with times
    return implode(", ", $times);
  }
  	$today_d=date('d-m-Y');
  	$now = date('m-d-y');
	//$todaydate = strtotime($now); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>E-Recruitment UMG</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!-- sweet alerts -->
        <link href="assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="css/helper.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script>
        
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
<?php include 'topbar.php'; ?>
<?php include 'sidebar.php'; ?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Process Candidate  Detail</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">E-recruitment</a></li>
                                    <li class="active">Process Candidate  Detail</li>
                                </ol>
                            </div>
                        </div>
                        <!-- Pls Remove -->
                        <div style="height:700xp auto;">
						<form action="process.php" method="get">
						
						  <table id="datatable" class="table table-striped table-bordered">
                            <tbody>
									<?php
										if ($result->num_rows > 0)
										 {
																	
											while($row = $result->fetch_assoc())
											 {
									?>
										<tr>
											<td>Name</td>
											<input type=text value="<?php echo $row['Hash']; ?>" name="hash" hidden>	
											<input type=text value="<?php echo $row['JobNo']; ?>" name="jobno" hidden>
											<td class="center"><?php echo $row['Name']; ?></td>
										</tr>
										<tr>
											<td>Apply Position:</td>
											<td class="center"><?php echo $row['JobPosition']?></td>
										</tr>	
										<tr>
											<td>Apply date:</td>
											<td class="center"><?php echo $row['CreatedDate']?></td>
										</tr>		
											<td>Address:</td>
											<td class="center"><?php echo $row['Address'] ?></td>
										</tr>
										<tr>
											<td>Place and Date Of Birth:</td>
											<td class="center"><?php echo $row['PlaceandDOB'] ?></td>
										</tr>
										<tr>
											<td>Expected Salary:</td>
											<td class="center"><?php echo $row['ExpectedSalary']?></td>
										</tr>
										<tr>
											<td>Phone Number</td>
											<td class="center"><?php echo $row['PhoneNo']?></td>
										</tr>
										<tr>
											<td>Email Address:</td>
											<td class="center"><?php echo $row['EmailAddress']?></td>
										</tr>
										<tr>
											<td>Gender:</td>
											<td class="center"><?php echo $row['Gender']?></td>
										</tr>
										<tr>
											<td>Marital Status:</td>
											<td class="center"><?php echo $row['MaritalStatus']?></td>
										</tr>
										<tr>
											<td>Education:</td>
											<td class="center">
											<?php
											 	$sq="SELECT Education from tblapplicationform where JobNo='$JobNo'";
											 	$resultq = $conn->query($sq);
											 	echo "<table width='100%' class='table'>";
											
											 	if ($resultq->num_rows > 0) 
											 	{
											 		
											 		echo "<tr>";
											 		echo "<td>School Name</td>";
											 		echo "<td>Start Date</td>";
											 		echo "<td>End Date</td>";
											 		echo "<td>Place Of School</td>";
													
													echo "</tr>";
													echo "<tr>";
												
													$y=0;
											 		while($rowq = $resultq->fetch_assoc())
													 	{	
													 		$obj=json_decode($rowq['Education'],true); 
													 		
													 	
													 		for($x=0;$x<count($obj);$x++)	
													 		 //$rowq["Education"];
													 		{
													 			if($y==4)
													 			{
													 				echo "<span><tr><td>";
													 				echo $obj[$x];	
													 			
													 				$y=0;
													 			}
													 			else
													 			{		echo "<td>";
													 					echo $obj[$x];	
													 					echo "</td>";	
													 			}
													 			$y++;
													 		}
													 	}
														
													echo "</tr>";	
													echo "</table>";
												}	 
											?>
											</td>
										</tr>
										<tr>
											<td>ForeignLanguage:</td>
											<td class="center">


											<?php //echo $row['ForeignLanguage']?>
												<?php
											 	$sqf="SELECT ForeignLanguage from tblapplicationform where JobNo='$JobNo'";
											 	$resultf = $conn->query($sqf);
											 	echo "<table width='100%' class='table'>";
											
											 	if ($resultf->num_rows > 0) 
											 	{
											 		//$x=1;
											 		echo "<tr>";
											 		echo "<tr>";
											 		echo "<td>Language</td>";
											 		echo "<td>Reading</td>";
											 		echo "<td>Writing</td>";
											 		echo "<td>Speaking</td>";
													
													echo "</tr>";
													echo "<tr>";
													
													$yf=0;
											 		while($rowf = $resultf->fetch_assoc())
													 	{	
													 		$objf=json_decode($row['ForeignLanguage'],true); 
													 		
													 	
													 		for($xf=0;$xf<count($objf);$xf++)	
													 		 //$rowq["Education"];
													 		{
													 			if($yf==4)
													 			{
													 				echo "<span><tr><td>".$objf[$xf];	
													 				$yf=0;
													 			}
													 			else
													 			{
													 					echo "<td>".$objf[$xf]."</td>";		
													 			}
													 			$yf++;
													 		}
													 	}
													echo "</td>";	
													echo "</tr>";	
													echo "</table>";
												}	 
											?>
										</td>
										</tr>
										<tr>
											<td>WorkingExperience:</td>
											<td class="center">
											
												<?php
											 	$sqw="SELECT WorkingExperience from tblapplicationform where JobNo='$JobNo'";
											 	$resultw = $conn->query($sqw);
											 	echo "<table width='100%' class='table'>";
											
											 	if ($resultw->num_rows > 0) 
											 	{
											 		//$x=1;
											 		echo "<tr>";
											 		echo "<tr>";
											 		echo "<td>Company Name</td>";
											 		echo "<td>Lastest Position</td>";
											 		echo "<td>Period</td>";
											 		echo "<td>Lastest Salary</td>";
											 		echo "<td>Reason For Leaving</td>";
													
													echo "</tr>";
													echo "<tr>";
													$yw=0;
											 		while($roww = $resultw->fetch_assoc())
													 	{	
													 		$objw=json_decode($row['WorkingExperience'],true); 
													 		
													 	
													 		for($xw=0;$xw<count($objw);$xw++)	
													 		 //$rowq["Education"];
													 		{
													 			if($yw==5)
													 			{
													 				echo "<span><tr><td>".$objw[$xw];	
													 				$yw=0;
													 			}
													 			else
													 			{
													 					echo"<td>".$objw[$xw]."</td>";		
													 			}
													 			$yw++;
													 		}
													 	}
												//	echo "</td>";	
													echo "</tr>";	
													echo "</table>";
												}	 
											?>
										

											</td>
										</tr>
										<tr>
											<td>Reference:</td>
											<td class="center">

												<?php
											 	$sqr="SELECT Reference from tblapplicationform where JobNo='$JobNo'";
											 	$resultr = $conn->query($sqr);
											 	echo "<table width='100%' class='table'>";
											
											 	if ($resultr->num_rows > 0) 
											 	{
											 		//$x=1;
											 		echo "<tr>";
											 		echo "<tr>";
											 		echo "<td>Name</td>";
											 		echo "<td>Relationship</td>";
											 		echo "<td>Phone/Address</td>";
											 		echo "<td>Company</td>";
											 		echo "<td>Email</td>";
													
													echo "</tr>";
													echo "<tr>";

													$yr=0;
											 		while($rowr = $resultr->fetch_assoc())
													 	{	
													 		$objr=json_decode($row['Reference'],true); 
													 		
													 	
													 		for($xr=0;$xr<count($objr);$xr++)	
													 		 //$rowq["Education"];
													 		{
													 			if($yr==5)
													 			{
													 				echo "<span><tr><td>".$objr[$xr];	
													 				$yr=0;
													 			}
													 			else
													 			{
													 					echo"<td>".$objr[$xr]."</td>";		
													 			}
													 			$yr++;
													 		}
													 	}
													
													echo "</tr>";	
													echo "</table>";
												}	 
											?>
											</td>
										</tr>
										<tr>
											<td>Reason To Join UMG:</td>
											<td class="center"><?php echo $row['ReasonToJoin']?></td>
										</tr>
										<tr>
											<td>Strong Points:</td>
											<td class="center"><?php echo $row['StrongPoints']?></td>
										</tr>
										<tr>
											<td>Weak Points:</td>
											<td class="center"><?php echo $row['WeakPoints']?></td>
										</tr>
										<tr>
											<td>CV:</td>
											<td class="center"><a  href="attachfile.php?filename=<?php echo $row['Attachment']?>">
																		<?php echo $row['Attachment']?></a></td>
										</tr>
										<?php
										if ($resultans->num_rows > 0)
										{
																	
											//while($rowans = $resultans->fetch_assoc()) 
											//{
												?>
											<tr>
											
											<td class="center">See Answer List:</td>
											<td><a  href="answerlist2.php?jno=<?php echo $row['JobNo']?>">
																		<i class="halflings-icon white zoom-in"></i> Answer List 
																	</a>
																</td>
											</tr>
											<?php
											//}
										}
										else
										{
											?>
											<tr>
											<td class="center">See Answer List:</td>
											<td><a href="answerlist2.php?jno=<?php echo $row['JobNo']?>">Not Answer Yet</a>
											<h5><p>Please Remind The Applicant For Answering.</p><p>Please Check You Already Done For Mailing to Applicant</p></h5></td>
											</tr>
										
										<?php
										}
										
										?>
											<tr>
											<td class="center">Expired Date:</td>
											<td class="center"> 
											<?php 
											//echo 
											$expire_date=date('m-d-y', strtotime($row["Expired_Date"]));
											if($now>$expire_date)
											{
												echo $row['Expired_Date']."<h5>The Remains Date For Examination is 0 Day\n</h5>";
											}
											else
											{
												echo $row['Expired_Date']."<h5>The Remains Date For Examination is ".dateDiff($today_d, $row['Expired_Date']) . "\n</h5>";
												
											}
											?> 	
											</td>
											</tr>
									
										<tr>
											<td>Remark:</td>
											<td class="center"><textarea name="remark" col="150" rows="5" style="width:400px;"></textarea></td>
										</tr>
										<tr>
										<td colspan="2" align="center">
                                        <a href="onprocess.php" class="btn btn-warning">Cancel</a>
                                        <?php
                                         $my_date = date('m-d-y', strtotime($row["Expired_Date"]));
                                      //   echo $my_date;
                                        if($now>$my_date)
                                        {
                                        ?>
                                        <a href="unexpired.php?jobno=<?php echo $row['JobNo']?>" class='btn btn-success'>Extend The Expired Date</a>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
										<input type="submit" name="btnsubmit" value="Submit" class="btn btn-success">
										<?php
                                        }
                                        ?>
                                        </td>
										</tr>					
										<?php
										}
										}			
										?>		
                                    </tbody>
                                </table>
								</form>
						</div>
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © UMG IT.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>
	 <script>
        $(function(){
        var activeurl = window.location['pathname'].split('/');
        $('a[href="'+activeurl[3]+'"]').addClass('active');
        });
        </script>
	</body>
</html>