<?php
session_start();
if(!isset($_SESSION["Username"])){ //if login in session is not set
    header("Location: login.php");
}
include '../connect.php';

$sqlall = "SELECT JobNo FROM tblapplicationform";
$resultall = $conn->query($sqlall);
$countall = $resultall->num_rows;



$sql = "SELECT JobNo FROM tblapplicationform where status='unprocessed'";
$result = $conn->query($sql);
$countunprocess = $result->num_rows;

$sqlprocess = "SELECT JobNo FROM tblapplicationform where status !='unprocessed' and status !='Reject'";
$resultprocess = $conn->query($sqlprocess);
$countprocess = $resultprocess->num_rows;

$sqlaccepted = "SELECT JobNo FROM tblapplicationform where status ='accepted'";
$resultaccepted = $conn->query($sqlaccepted);
$countaccepted = $resultaccepted->num_rows;

$sqlreject = "SELECT JobNo FROM tblapplicationform where status ='Reject'";
$resultreject = $conn->query($sqlreject);
$countreject = $resultreject->num_rows;

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
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">E-Recruitment</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $countunprocess; ?> </span>
                                        Unprocessed
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                          <h5 class="text-uppercase">Unprocessed<span class="pull-right"><?php echo $unprocesspercent = ($countunprocess / $countall)* 100; ?> % </span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $unprocesspercent?>%;"><span class="sr-only">% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-stats-bars"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $countprocess; ?></span>
                                        On Process
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">On Progress <span class="pull-right"><?php echo $processpercent = ($countprocess / $countall)* 100; ?> %</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $processpercent?>%">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-checkmark-round"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $countaccepted; ?></span>
                                        Accepted
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Accepted <span class="pull-right"><?php echo $acceptpercent = ($countaccepted/ $countall)* 100; ?> %</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $acceptpercent?>%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-close"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter"><?php echo $countreject; ?></span>
                                        Rejected
                                    </div>
                                    <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Rejected <span class="pull-right"><?php echo $rejectpercent = ($countreject/ $countall)* 100; ?> %</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $rejectpercent?>%;">
                                                    <span class="sr-only">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->
                        <!-- WEATHER -->
                        <div class="row">
                                    
                            <div class="col-lg-6">
                                
                                <!-- BEGIN WEATHER WIDGET 1 -->
                                <div class="panel bg-info">
                                    <div class="panel-body">
                                    
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="row">
                                                    <div class="col-xs-6 text-center">
                                                        <canvas id="partly-cloudy-day" width="115" height="115"></canvas>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <h2 class="m-t-0 text-white"><b>32°</b></h2>
                                                        <p class="text-white">Partly cloudy</p>
                                                        <p class="text-white">15km/h - 37%</p>
                                                    </div>
                                                </div><!-- End row -->
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row">
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SAT</h4>
                                                        <canvas id="cloudy" width="35" height="35"></canvas>
                                                        <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SUN</h4>
                                                        <canvas id="wind" width="35" height="35"></canvas>
                                                        <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">MON</h4>
                                                        <canvas id="clear-day" width="35" height="35"></canvas>
                                                        <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end row -->
                                    </div><!-- panel-body -->
                                </div><!-- panel-->
                                <!-- END Weather WIDGET 1 -->
                                
                            </div><!-- End col-md-6 -->

                            <div class="col-lg-6">
                                
                                <!-- WEATHER WIDGET 2 -->
                                <div class="panel bg-success">
                                    <div class="panel-body">
                                    
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-xs-6 text-center">
                                                            <canvas id="snow" width="115" height="115"></canvas>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <h2 class="m-t-0 text-white"><b> 23°</b></h2>
                                                            <p class="text-white">Partly cloudy</p>
                                                            <p class="text-white">15km/h - 37%</p>
                                                        </div>
                                                    </div><!-- end row -->
                                                </div><!-- weather-widget -->
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="row">
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SAT</h4>
                                                        <canvas id="sleet" width="35" height="35"></canvas>
                                                        <h4 class="text-white">30<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">SUN</h4>
                                                        <canvas id="fog" width="35" height="35"></canvas>
                                                        <h4 class="text-white">28<i class="wi-degrees"></i></h4>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        <h4 class="text-white m-t-0">MON</h4>
                                                        <canvas id="partly-cloudy-night" width="35" height="35"></canvas>
                                                        <h4 class="text-white">33<i class="wi-degrees"></i></h4>
                                                    </div>
                                                </div><!-- End row -->
                                            </div> <!-- col-->
                                        </div><!-- End row -->
                                    </div><!-- panel-body -->
                                </div><!-- panel -->
                                <!-- END WEATHER WIDGET 2 -->
                                    
                            </div><!-- /.col-md-6 -->
                        </div> <!-- End row -->   

                            <!-- TODO -->

                        </div> <!-- end row -->

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
        <script src="assets/chat/moment-2.2.1.js"></script>
        <script src="assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/jquery-detectmobile/detect.js"></script>
        <script src="assets/fastclick/fastclick.js"></script>
        <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="assets/flot-chart/jquery.flot.js"></script>
        <script src="assets/flot-chart/jquery.flot.time.js"></script>
        <script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="js/jquery.app.js"></script>

		        <!-- skycons -->
        <script src="js/skycons.min.js" type="text/javascript"></script>
		
        <!-- Dashboard -->
        <script src="js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="js/jquery.todo.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        </script>
        <script>
        $(function(){
        var activeurl = window.location['pathname'].split('/');
        console.log(activeurl[2]);
        $('a[href="'+activeurl[2]+'"]').addClass('active');
        });
        </script>
    
    </body>
</html>