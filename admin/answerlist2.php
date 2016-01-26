<?php
session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}

include '../connect.php';
$JobNo=$_REQUEST["jno"];
$sql = "SELECT * FROM answer_list al, question_list ql, tblapplicationform af

where al.JobNo='$JobNo'
and al.JobNo=af.JobNo
and ql.QuestionID=al.QuestionID
order by al.AnswerID

";
$result = $conn->query($sql);
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

         <script src="js/modernizr.min.js"></script>
        <script type="text/javascript">
        int totalscore=0;
        int  score=0;

        int eachscore= document.getElementById("scores");
        int s1 =document.getElementById("1");
    
        </script>
        
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
                                <h4 class="pull-left page-title">Answer List</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">E-recruitment</a></li>
                                    <li class="active">Answer List</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Answer List</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                            
                                                <table id="datatable" class="table table-striped table-bordered" style="width:100%;">
                                                 
                                            <form action="answerscore.php" method="post"> 
                                            <input type="text" name="jobno" value="<?php echo $JobNo; ?>" hidden>
                                                    <tbody>
                                                    <tr>
                                                        <td>Question</td>
                                                        <td>Answer</td>
                                                        <td>Grade</td>
                                                    </tr>
														 	<?php
													 if ($result->num_rows > 0) 
														{
															$x=1;	
															$count=0;
															while($row = $result->fetch_assoc()) 
															{						
																
                                                                echo '<tr><td style="width:100px;"><span>'.$x.".".$row['Question'].'<input type="text" name="qid[]" value="'.$row["QuestionID"].'" hidden>'.'</span></td>';
																echo '<td style="width:100px;">'.$row["Answer"].'<input type="text" name="answer[]" value="'.$row["Answer"].'" hidden>'.'</td>';
                                                                echo '<td style="width:100px;"><input type="radio" name="Question'.$x.'" value="1" />1';
                                                                echo '<input type="radio" name="Question'.$x.'" value="3" checked/>3';
                                                                echo '<input type="radio" name="Question'.$x.'" value="6" />6';
                                                                echo '<input type="radio" name="Question'.$x.'" value="9" />9</td>';

                                                              //  echo '<div id ='.$x.'>';
                                                               
                                                              //  echo '</div>';
            													echo '</tr>';
			                                                   $x++;
															   $count+=$x;
																
															}
														}			

														
														?>	
                                                       <tr>
														 <td colspan="3" align="center">
                                                        <input type="reset" name="btnreset" value="Cancel" class="btn btn-warning">
                                                        <input type="submit" name="btnsubmit" value="Submit" class="btn btn-success">
                                                    </td>
														</tr>
                                                    </tbody>
                                                </form>
                                                </table>
                                                

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
        $('a[href="'+activeurl[2]+'"]').addClass('active');
        });
        </script>
	</body>
</html>