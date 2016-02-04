            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/users/avatar-11.jpg" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['FullName']; ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="lock-screen.php"><i class="md md-lock"></i> Lock screen</a></li>
                                    <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0"><?php echo $_SESSION['Role']; ?></p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="unprocessed.php" class="waves-effect"><i class="md md-face-unlock"></i><span> Unprocessed </span></a>
                            </li>
                            <li>
                                <a href="onprocess.php" class="waves-effect"><i class="md md-input"></i><span> On Process </span></a>
                            </li>
                            <li>
                                <a href="rejectedarchieve.php" class="waves-effect"><i class="md md-thumb-down"></i><span> Rejected Archieve </span></a>
                            </li>
                            <li>
                                <a href="acceptedarchieve.php" class="waves-effect"><i class="md md-thumb-up"></i><span> Accepted Archieve </span></a>
                            </li>
							<li>
                                <a href="exportexcel.php" class="waves-effect"><i class="ion-ios7-download-outline"></i><span> Download  Applicant </span></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 