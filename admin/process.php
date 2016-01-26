<?php
session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}
include '../connect.php';

$hash=$_GET["hash"];
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
		<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		

        <!-- animate css -->
        <link href="css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="css/waves-effect.css" rel="stylesheet">

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="assets/form-wizard/jquery.steps.css" />

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
                                <h4 class="pull-left page-title">Process Form</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Process</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Process Form</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Process Form</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>Question Link For Candidate</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="userName"></label>
                                                        <div class="col-lg-10">
                                                            We will generate link for the candidate to fill the test.Please select the <b>Question Type</b> you want to send.
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="password"></label>
                                                        <div class="col-lg-10">
														<table id="questions">
														<tr><td><input type="radio" id="question1" name="question" value="manager" checked></td><td>Manager</td></tr>
														<tr><td><input type="radio" id="question2" name="question" value="supervisor"></td><td>Supervisor</td></tr>

														</table>
														 <label class="col-lg-2 control-label" for="name"></label>
                                                        <div class="col-lg-10">
                                                          <label for="name">Heres the link valid for 1 week</label>
                                                        </div>
                                                         <label class="col-lg-2 control-label " for="surname"></label>
                                                        <div class="col-lg-10">
                                                            <textarea cols="50" rows="5"><?php echo 'http://'.$_SERVER['HTTP_HOST'].'/Question_Display.php?Hash='.$hash; ?></textarea> 
                                                             <input type="hidden" id="hash" name="hash" value="<?php echo $hash; ?>" >
                                                        </div>		    							
                                                        </div>
                                                    </div>
                                                </section>
                                               <!-- <h3>Question Link</h3>
                                                <section>
                                                    <div class="form-group clearfix">

                                                        <label class="col-lg-2 control-label" for="name"></label>
                                                        <div class="col-lg-10">
                                                          <label for="name">Heres the link valid for 1 week</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="col-lg-2 control-label " for="surname"></label>
                                                        <div class="col-lg-10">
                                                            <textarea><?php echo 'http://'.$_SERVER['HTTP_HOST'].'/question_display.php?Hash='.$hash; ?></textarea> 
                                                             <input type="hidden" name="hash" value="<?php echo $hash; ?>" >
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Finish</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox-h" type="checkbox">
                                                                <label for="checkbox-h">
                                                                    I agree with the Terms and Conditions.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>-->
                                            </div>
                                        </form> 
                                    </div>  <!-- End panel-body -->
                                </div> <!-- End panel -->

                            </div> <!-- end col -->

                        </div> <!-- End row -->



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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

        <!--Form Validation-->
        <script src="assets/form-wizard/bootstrap-validator.min.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="assets/form-wizard/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/jquery.validate/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="assets/form-wizard/wizard-init.js" type="text/javascript"></script>

	    <script>
        $(function(){
        var activeurl = window.location['pathname'].split('/');
        $('a[href="'+activeurl[3]+'"]').addClass('active');
        });
        </script>
	</body>
</html>