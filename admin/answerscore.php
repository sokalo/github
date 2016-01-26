<?php
session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}

include '../connect.php';
$JobNo=$_POST["jobno"];


$xx=array_keys($_POST);
                                                 
$sum=0;
$nv=0;

foreach ($xx as $y) {
   if (strpos($y, 'Question') !== false)
  //  echo $y."</br>";
   // echo "<input type='text' name='$y' value='$_POST[$y]' hidden>" ;
    $nv = $_POST[$y];
    $sum = $sum + intval($nv);
    }
                                                  
$s=$nv;
echo $s;
$answer=$_POST['answer'];
$jobid=$_POST['jobno'];
$now = date('d-m-Y');
$score_date = strtotime($now);
$processdate=date('d-m-Y', $score_date) ;
$marker=$_SESSION["FullName"];
$x=0;

while ($x<count($_POST['qid'])) {
    $question=$_POST['qid'][$x];
    $answer=$_POST['answer'][$x];
    
    foreach ($xx as $y) {
   if (strpos($y, 'Question') !== false)

    $nv = $_POST[$y];
 //   $sum = $sum + intval($nv);
 
    $stmt = $conn->prepare( "UPDATE  `answer_list` SET score=?, scoredate=? ,marker=? WHERE QuestionID=?" );

    $stmt->bind_param( "ssss", $nv,$processdate,$marker,$question);

    $stmt->execute();
    }
    
   
    $x++;
    
}


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
                                <h4 class="pull-left page-title">Answer Score</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">E-recruitment</a></li>
                                    <li class="active">Answer Score</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Answer Score</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                            <form action="answerscoreaction.php" method="post">
                                            <input type="text" name="jobno" value="<?php echo $JobNo;?>" hidden>
                                                <table id="datatable" class="table table-striped table-bordered">
                                                 <?php

                                                 $sql = "SELECT JobNo,Name,JobPosition FROM tblapplicationform where JobNo='$JobNo'";
                                                   $result = $conn->query($sql);
                                                     if ($result->num_rows > 0)
                                                     {
                                                        $x=1;   
                                                        $count=0;
                                                        while($row = $result->fetch_assoc()) 
                                                        {   
                                                    ?>
                                                        <tr>
                                                        <td>Job Application No:</td>
                                                       
                                                        <td><h3><?php echo $row["JobNo"]; ?></h3></td>                                    
                                                        </tr>
                                                        <tr>
                                                        <td>Applicant Name:</td>
                                                       
                                                        <td><h3><?php echo $row["Name"]; ?></h3></td>                                    
                                                        </tr>
                                                        <tr>
                                                        <td>Job Position:</td>
                                                       
                                                        <td><h3><?php echo $row["JobPosition"]; ?></h3></td>                                    
                                                        </tr>
                                                        
                                                    <?php

                                                        } 
                                                    } 
                                                 ?>
                                             
                                                    <tbody>
													<tr>
                                                    <td>Total Score Of Applicant</td>
                                                   
                                                    <td><h1><?php echo $sum; ?></h1></td>                                     
                                                    </tr>
                                                    <tr>
                                                        <td>Marker Name</td>
                                                        <td><h3><?php echo $_SESSION["FullName"]; ?></h3></td>
                                                    </tr>


                                                    <tr>
                                                    <td>Verdict</td>
                                                    <td>
                                                          <div id="recommend">
                                                                    <input type="radio" id="recommended" name="recommend" value="recommended" checked>Recommanded <br>
                                                                    <input type="radio" id="notrecommended" name="recommend" value="notrecommended">Not Recommanded <br>
                                                                    <input type="radio" id="rundercandidate" name="recommend" value="recommendedundercandidate">Recommanded Under Candidate
                                                                    
                                                        </div>
                                                        
                                                    </td>                                       
                                                    </tr>
                                                   <tr>
                                                    <td>Remark:</td>
                                                    <td class="center"><textarea name="remark" col="150" rows="5" style="width:400px;"></textarea></td>
                                                   </tr>
                                          
                                                    <tr>
                                                    <td colspan="2" align="center">
                                                           <a href="process.php" class="btn btn-warning">Cancel</a>
                                                        <input type="submit" name="btnsubmit" value="Submit" class="btn btn-success">
                                                    </td>
                                                   </tr>
                                                    </tbody>
                                                </table>
                                             </form>       
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


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

        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );

            
        </script>
        <script>
        $(function(){
        var activeurl = window.location['pathname'].split('/');
        $('a[href="'+activeurl[3]+'"]').addClass('active');
        });
        </script>
	</body>
</html>