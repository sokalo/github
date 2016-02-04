<?php
session_start();

$hash=$_GET["Hash"];
$result1=0;

//if(!isset($_SESSION["Username"])){ //if login in session is not set
//    header("Location: login.php");
//}
//$groupowner=$_SESSION["GroupID"];

include 'connect.php';
$now = date('d-m-Y');
$today_date = strtotime($now);

$query="Select * from tblapplicationform where Hash='$hash' and Is_Active=1";
$result = $conn->query($query);	
if($result->num_rows > 0)
{
		while($row = $result->fetch_assoc()) {	
			$expdate=strtotime($row["Expired_Date"]);
			$JNo=$row["JobNo"];
		}
		
		if($today_date <=$expdate)
		{
			$sql = "SELECT * FROM question_list where category='supervisor'";
			$result1 = $conn->query($sql);
		}
		else{
		echo mysql_error();
		}
}
else{
	$result1="";
	echo "Your link is Expire";
}

?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="js no-touch js_active  vc_desktop  vc_transform" lang="en-US"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="pingback" href="js/small-logo1.png">
<title> Apply for Job Vacancy | UMG Myanmar</title>
<script type="text/javascript">var ajaxurl = 'http://umgroups.com/cambodia/wp-admin/admin-ajax.php';var themecolor='#eac404';</script>
<meta property="og:title" content="Business Development">
<meta property="og:type" content="article">
<meta property="og:locale" content="en_US">
<meta property="og:site_name" content="UMG Cambodia">
<meta property="og:url" content="http://umgroups.com/cambodia/?dtcareer=business-development">
<meta property="og:description" content="Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.">
<meta property="og:image" content="">
<meta property="fb:app_id" content="799143140148346">
<link rel="alternate" type="application/rss+xml" title="UMG Cambodia » Feed" href="http://umgroups.com/cambodia/?feed=rss2">
<link rel="alternate" type="application/rss+xml" title="UMG Cambodia » Comments Feed" href="http://umgroups.com/cambodia/?feed=comments-rss2">
<link rel="shortlink" href="http://umgroups.com/cambodia/?p=12444">
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<!--<link rel="stylesheet" id="billio_report_post_icons-css" href="js/flaticon.css" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="js/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="essential-grid-plugin-settings-css" href="js/settings.css" type="text/css" media="all">
<link rel="stylesheet" id="tp-open-sans-css" href="js/css.css" type="text/css" media="all">
<link rel="stylesheet" id="tp-raleway-css" href="js/css_002.css" type="text/css" media="all">
<link rel="stylesheet" id="tp-droid-serif-css" href="js/css_004.css" type="text/css" media="all">
<link rel="stylesheet" id="tp-merriweather-css" href="js/css_003.css" type="text/css" media="all">
<link rel="stylesheet" id="tp-opensans-condensed-css" href="js/css_005.css" type="text/css" media="all">
<link rel="stylesheet" id="rs-plugin-settings-css" href="js/settings_002.css" type="text/css" media="all">-->
<style id="rs-plugin-settings-inline-css" type="text/css">
.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}.tp-caption a{color:#ff7302;text-shadow:none;-webkit-transition:all 0.2s ease-out;-moz-transition:all 0.2s ease-out;-o-transition:all 0.2s ease-out;-ms-transition:all 0.2s ease-out}.tp-caption a:hover{color:#ffa902}
</style>
<!--
<link rel="stylesheet" id="woocommerce-layout-css" href="js/woocommerce-layout.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="js/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="js/woocommerce.css" type="text/css" media="all">


<link rel="stylesheet" id="wp-color-picker-css" href="js/color-picker.css" type="text/css" media="all">
<link rel="stylesheet" id="styleable-select-style-css" href="js/select-theme-default.css" type="text/css" media="all">



<link rel="stylesheet" id="billio_report_post_style-css" href="js/style.css" type="text/css" media="all">
<link rel="stylesheet" id="webfonts-font-css" href="js/webfonts.css" type="text/css" media="all">
<link rel="stylesheet" id="detheme-vc-css" href="js/plugin_style.css" type="text/css" media="all">
<!--[if IE 9]>
<link rel='stylesheet' id='billio-style-ie-css'  href='http://umgroups.com/cambodia/wp-content/themes/billio/css/ie9.css' type='text/css' media='all' />
<![endif]
<link rel="stylesheet" id="js_composer_front-css" href="js/js_composer.css" type="text/css" media="all">
<link rel="stylesheet" id="js_composer_custom_css-css" href="js/custom.css" type="text/css" media="screen">-->
<style type="text/css">

@import url(http://umgroups.com/cambodia/wp-content/themes/billio/css/bootstrap.css);
@import url(http://umgroups.com/cambodia/wp-content/themes/billio/css/socialicons/flaticon.css);
@import url(//fonts.googleapis.com/css?family=Open+Sans:100,300,400,300italic,600,700&#038;subset=latin);
@import url(//fonts.googleapis.com/css?family=Open+Sans+Condensed:100,300,400,300italic,400italic,600,700,800);
@import url(//fonts.googleapis.com/css?family=Open+Sans+Condensed:700,700italic);
/*@import url(http://umgroups.com/cambodia/wp-content/themes/billio/css/flaticon.css);

@import url(http://umgroups.com/cambodia/wp-content/themes/billio/style.css);
@import url(//fonts.googleapis.com/css?family=Merriweather:100,300,400,300italic,400italic,600,700);*/
@import url(http://umgroups.com/cambodia/wp-content/themes/billio/css/billio.css);
/*@import url(http://umgroups.com/cambodia/wp-content/themes/billio/css/mystyle.css);
@import url(http://umgroups.com/cambodia/wp-content/themes/billio/css/customstyle.css);*/
section#banner-section {background: url(js/mobile_recruiting.jpg) no-repeat 50% 50%; max-height: 100%; background-size: cover;
min-height:400px;
height:400px;}
div#head-page #dt-menu ul li.logo-desktop a {margin-top:19px;}
</style>
<link rel="shortcut icon" type="image/png" href="js/small-logo1.png><http://umgroups.com/cambodia/wp-content/uploads/2015/11/favicon.png"> 
<style type="text/css">
/*@import url(http://umgroups.com/cambodia/wp-content/themes/billio/iconfonts/social/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/industry/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/police/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/building-trade/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/industrial/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/ios7-set-filled-1/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/construction/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/logistics-delivery/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/miu-icons/flaticon.css);
@import url(http://umgroups.com/cambodia/wp-content/plugins/billio_icon_addon/iconfonts/stationery/flaticon.css);*/
</style>
<!--<script type="text/javascript" src="js/jquery_005.js"></script>
<script type="text/javascript" src="js/jquery-migrate.js"></script>
<script type="text/javascript" src="js/report.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/jquery_004.js"></script>
<script type="text/javascript" src="js/jquery_009.js"></script>
<script type="text/javascript" src="js/jquery_008.js"></script>-->
<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/cambodia\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cambodia\/?dtcareer=business-development&wc-ajax=%%endpoint%%","i18n_view_cart":"View Cart","cart_url":"","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<!--<script type="text/javascript" src="js/add-to-cart.js"></script>
<script type="text/javascript" src="js/woocommerce-add-to-cart.js"></script>-->
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://umgroups.com/cambodia/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://umgroups.com/cambodia/wp-includes/wlwmanifest.xml"> 
<link rel="prev" title="Marketing" href="http://umgroups.com/cambodia/?dtcareer=marketing">
<link rel="shortcut icon" href="js/small-logo1.png">
<meta name="generator" content="WordPress 4.3.1">
<meta name="generator" content="WooCommerce 2.4.10">
<link rel="canonical" href="http://umgroups.com/cambodia/?dtcareer=business-development">
<link rel="shortlink" href="http://umgroups.com/cambodia/?p=12444">


	
		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress.">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://umgroups.com/cambodia/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://umgroups.com/cambodia/wp-content/plugins/js_composer/assets/css/vc-ie8.css" media="screen"><![endif]--><noscript><style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style type="text/css">.esgbox-margin{margin-right:0px;}</style></head>
<body class="single single-dtcareer postid-12444 dt_custom_body wpb-js-composer js-comp-ver-4.7.4 vc_responsive">

	
<input name="nav" id="main-nav-check" type="checkbox">


<div class="top-head topbar-here is-sticky-menu sticky">


<div id="head-page" class="head-page adminbar-not-here reveal hastopbar solid stickysolid menu_background_color">
	<div class="container">
		<div style="height: auto;" id="dt-menu" class="dt-menu-pagebar"><label for="main-nav-check" class="toggle" onclick="" title="Close"><i class="icon-cancel-1"></i></label><ul id="menu-main-menu" class=""><li class="logo-desktop" style="width:150px;"><a href="http://umgroups.com/cambodia" style=" width:150px;"><img id="logomenu" src="" alt="" class="img-responsive halfsize" width="150"><img id="logomenureveal" src="js/small-logo2.png" alt="" class="img-responsive halfsize" width="150"></a></li><li id="menu-item-12903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12903"><a href="#"><span style="color:white;">Secret</span></a><label for="fof12903" class="toggle-sub" onclick="">›</label>
        <input id="fof12903" class="sub-nav-check" type="checkbox">
       
</li>

</ul><label class="toggle close-all" onclick="uncheckboxes('nav')"><i class="icon-cancel-1"></i></label></div>	</div>

	<div class="container">
		<div class="row">
			<div>
                <div id="mobile-header" class="hidden-sm-max col-sm-12">
                    <label for="main-nav-check" class="toggle" onclick="" title="Menu"><i class="icon-menu"></i></label>
                    <a href="http://umgroups.com/cambodia" style=""><img id="logomenumobile" src="js/small-logo1.png" rel="http://umgroups.com/cambodia/wp-content/uploads/2015/11/small-logo1.png" alt="" class="img-responsive halfsize" width="150"><img id="logomenurevealmobile" src="js/small-logo1.png" alt="" class="img-responsive halfsize" width="150"></a>				</div><!-- closing "#header" -->
			</div>
		</div>
	</div>
</div>
</div>

<section style="margin-top: -42px;" id="banner-section" class="">
<div class="container no_subtitle">
	<div class="row">
		<div class="col-xs-12">
		</br>
			</br>
			</br>
			</br>
			</br>
            </br>
            </br>
            </br>
<div class="breadcrumbs"><span><a href="#" title="Home">Home</a></span>&nbsp;/&nbsp;
<span><a href="#" title="Exam">Exam</a></span>&nbsp;/&nbsp;
<span class="current">Question</span></div>			</div>
	</div>
</div>
</section>
<div class="blog single-post content nosidebar post-12444 dtcareer type-dtcareer status-publish hentry dtcareer_cat-all-opening dtcareer_cat-development dtcareer_cat-marketing">
<div class="container">
		<div class="row">
				<div class="col-xs-12">
<div style="display: none;" id="career_apply_12444" class="career-form modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="md-description">
	    		<div class="heading-career-form">Please complete the form below to send an application for the selected job Business Development.</div>
	    		<h2 class="title-career-form">Apply Now</h2>
	    		<form id="career-form" method="post" action="" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="fullname">Full Name:</label>
				    <input name="fullname" class="form-control" id="fullname" placeholder="e.g. John Smith" required="" type="text">
				  </div>
				  <div class="form-group">
				    <label for="email_address">Email:</label>
				    <input name="email_address" class="form-control" id="email_address" placeholder="e.g. john.smith@hotmail.com" required="" type="email">
				  </div>
				  <div class="form-group">
				    <label for="note">Covering Note:</label>
				    <textarea class="form-control" name="note" rows="5" required=""></textarea>
				  </div>
				  <div class="form-group">
				    <label for="file_cv">Upload CV:</label>
				    <input name="file_cv" id="file_cv" required="" type="file">
				    <p class="help-block">Maximum file size 1.00Mb</p>
				  </div>
				  <button type="submit" class="btn btn-color-secondary">Apply Now</button>
				  <input name="career_id" id="career_id" value="12444" type="hidden">
				</form>
	    	</div>
		    <button class="button right btn-cross md-close" data-dismiss="modal"><i class="icon-cancel"></i></button>
	     </div>
 	</div>
</div>
<div id="career_send_12444" class="career-form modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="md-description">
	    		<div class="heading-career-form">Please complete the form below to tell a friend about job Business Development.</div>
	    		<h2 class="title-career-form">Email To a Friend</h2>
	    		<form id="career-send-form" method="post" action="">
				  <div class="form-group">
				    <label for="fullname">Full Name:</label>
				    <input name="fullname" class="form-control" id="fullname" placeholder="e.g. John Smith" required="" type="text">
				  </div>
				  <div class="form-group">
				    <label for="email_address">Email:</label>
				    <input name="email_address" class="form-control" id="email_address" placeholder="e.g. john.smith@hotmail.com" required="" type="email">
				  </div>
				  <div class="form-group">
				    <label for="friend_email_address">Friend Email:</label>
				    <input name="friend_email_address" class="form-control" id="friend_email_address" placeholder="e.g. alice@hotmail.com" required="" type="email">
				  </div>
				  <div class="form-group">
				    <label for="note">Quick Note:</label>
				    <textarea class="form-control" name="note" rows="5"></textarea>
				    <p class="help-block">Type a quick message directed to your 
						friend. Please avoid content that could be considered as spam as this 
						could result in a ban from the site.</p>
				  </div>
				  <button type="submit" class="btn btn-color-secondary">Send Message</button>
				  <input name="career_id" id="career_id" value="12444" type="hidden">
				</form>
	    	</div>
		    <button class="button md-close right btn-cross" data-dismiss="modal"><i class="icon-cancel"></i></button>
	     </div>
	  </div>
</div>
<div class="career-detail">
	<h1>Answer The Following Question >></h1>
	<div class="row">
		<div class="col-sm-8">
			<div class="row">
				<div class="col-xs-12">
					
				<!--	<table width="20%" align="center">-->
		<form name="oForm" action="answer_action2.php" method="post" enctype="multipart/form-data">
		<!--	<form name="oForm" action="#" method="post" enctype="multipart/form-data">-->
			<!--<th colspan="2" align="left"><h2>APPLICATION FORM</h3></th>-->
		<ul class="career-detail-list">
		
		<div>
		                                            <table id="datatable" class="table table-striped table-bordered" style="height : 250px;" width="100%">
													<thead>
													<th><label for="job-position">Question</label></th>
													<th><label for="job-position">Answer</label></th>
													</thead>
													<input type="hidden" name="hash" value="<?php echo $_GET["Hash"] ?>" >
													
													<input type="hidden" name="jobno" value="<?php echo $JNo ?>">
												
                                                    <tbody id ="tbquestion">
                                                      	<?php
														if ($result1==null)
														{
															?>
															<script>
															
															window.location="warning.php";
															</script>
															<?php
															//echo "<h1>Your Link is Expire</h1>";
														}
														else if ($result1->num_rows > 0) 	
														{
															$x=1;	
															$count=0;
															while($row = $result1->fetch_assoc()) 
															{						
																echo '<tr class="'.$row.'"><td class="center">'.$x.".".$row['Question'].'<input type="text" name="qid[]" value="'.$row["QuestionID"].'" hidden>'.'</td>';
																echo '<td class="center">'.'<textarea name="answer[]" col="150" id="answer" row="5" style="width:400px;"></textarea>'.'</td>';
														
																echo '</tr>';
																
																$x++;
																$count+=$x;
																
															}
														}			
														else
														{
															
														}
														
														?>		
                                                       
                                                       
                                                    </tbody>
												</table>
		</div>
		<div 
			<div class="col-xs-12 col-sm-8 career-action-button"><button id="previous" type="button" onclick="fback(); return false;" class="btn btn-color-third" style="background-color : #00FF00;">Previous</button>&nbsp;<button id="next" type="button" onclick="fnext();return false;" class="btn btn-color-fourth" style="background-color : #00FF00;">Next</button>&nbsp;<input type="submit" name="btnapply" id="btnapply" value="Submit" class="btn btn-color-secondary pull-right">
			</div>
		</div>
		</ul>
	</form>

			</div>
		
			</div>
		
		</div>
		
	</div>
</div>



</div><!-- content area col-9 -->

	

		</div><!-- .row -->

	</div><!-- .container -->

</div>
<div class="box-container vc_row wpb_row vc_row-fluid vc_row-fluid  footer-on-dark-bg vc_custom_1429091507102"><div class="container dt-container"><div class="row">
	<div class="vc_col-sm-5 wpb_column column_container vc_custom_1429092087166">	
		<div class="wpb_wrapper">
			
	<div class="wpb_text_column wpb_content_element  text-centered-under-sm">
		<div class="wpb_wrapper">
			<p>© 2015&nbsp;United Mercury Group, LTD</p>

		</div> 
	</div> 
		</div> 
	</div> 

	<div class="vc_col-sm-7 wpb_column column_container">
		<div class="wpb_wrapper">
			<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1429147194406"><div class="wpb_column vc_column_container vc_col-sm-3 vc_custom_1429150477804"><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_center">
        <div class="wpb_wrapper">
            
            <div class="vc_single_image-wrapper   vc_box_border_grey"></div>
        </div>
    </div>
</div></div><div class="wpb_column vc_column_container vc_col-sm-3 vc_custom_1429150489762"><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_center">
        <div class="wpb_wrapper">
            
            <div class="vc_single_image-wrapper   vc_box_border_grey"></div>
        </div>
    </div>
</div></div><div class="wpb_column vc_column_container vc_col-sm-3 vc_custom_1429147168340"><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_center">
        <div class="wpb_wrapper">
            
            <div class="vc_single_image-wrapper   vc_box_border_grey"></div>
        </div>
    </div>
</div></div><div class="wpb_column vc_column_container vc_col-sm-3 vc_custom_1429147180175"><div class="wpb_wrapper">
    <div class="wpb_single_image wpb_content_element vc_align_center">
        <div class="wpb_wrapper">
            
            <div class="vc_single_image-wrapper   vc_box_border_grey"></div>
        </div>
    </div>
</div></div></div>
		</div> 
	</div> 
</div></div></div>
<!--
<link rel="stylesheet" id="flexslider-css" href="js/flexslider.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery_010.js"></script>-->
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/umgroups.com\/cambodia\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<!--
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
     
-->

<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/cambodia\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cambodia\/?dtcareer=business-development&wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<!--<script type="text/javascript" src="js/woocommerce.js"></script>
<script type="text/javascript" src="js/jquery_007.js"></script>-->
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/cambodia\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/cambodia\/?dtcareer=business-development&wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<!--<script type="text/javascript" src="js/cart-fragments.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<script type="text/javascript" src="js/select_002.js"></script>
<script type="text/javascript" src="js/select.js"></script>
<script type="text/javascript" src="js/jquery_003.js"></script>
<script type="text/javascript" src="js/jquery_002.js"></script>
<script type="text/javascript" src="js/career.js"></script>
<script type="text/javascript" src="js/js_composer_front.js"></script>
<script type="text/javascript" src="js/jquery_006.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">

    var rows = document.getElementById('datatable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    var current=0;

onload = function() {
	$("#btnapply").hide();
	$("#previous").hide();

    if (!document.getElementsByTagName || !document.createTextNode) return;

    for (i = 0; i < rows.length; i++) 
    {
    			if (i!=current) {
    			next=1;
    		    rows[i].style.display='none';
    			}


    }	
    //rows[current].style.display='block';
    }

function fnext() {

	//var rows = document.getElementById('datatable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    		    	current=current+1;
    		    	console.log(rows[current].innerHTML);
    		    	rows[current-1].style.display='none';
    		    	rows[current].style.display='inline';
    		    	rows[current].removeAttribute('style');
	if (current==(rows.length-1)) {
		$("#next").hide();
		$("#previous").show();
			$("#btnapply").show();
	}
	if (current>0) {
		$("#previous").show();
	}

}

function fback() {

    		    	current=current-1;
    		    	console.log(current);
    		    	rows[current+1].style.display='none';
    		    	rows[current].style.display='block';
    		    	rows[current].removeAttribute('style');
  		if (current<(rows.length+1)) {
			$("#btnapply").hide();
			$("#next").show();
	}
		if (current<1) {
		$("#previous").hide();
	}

}
</script>

   

<style type="text/css">#megamenu_bg_12906 {background: url(http://umgroups.com/cambodia/wp-content/uploads/2015/11/mega-menus-bg-haevy02.jpg)   no-repeat;}
@media ( max-width:990px ) { #megamenu_bg_12906 {background: none;}}
.vc_custom_1429088509675{background-color: #ffffff ;}
.vc_custom_1428630807824{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 10px !important;padding-bottom: 10px !important;padding-left: 10px !important;background-color: #474c5c !important;border-left-color: #393e4f !important;border-left-style: solid !important;border-right-color: #393e4f !important;border-right-style: solid !important;border-top-color: #393e4f !important;border-top-style: solid !important;border-bottom-color: #393e4f !important;border-bottom-style: solid !important;}
.vc_custom_1428630829435{border-top-width: 1px !important;border-bottom-width: 1px !important;padding-top: 10px !important;padding-right: 10px !important;padding-bottom: 10px !important;padding-left: 10px !important;background-color: #474c5c !important;border-top-color: #393e4f !important;border-top-style: solid !important;border-bottom-color: #393e4f !important;border-bottom-style: solid !important;}
.vc_custom_1428630845995{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 10px !important;padding-right: 10px !important;padding-bottom: 10px !important;padding-left: 10px !important;background-color: #474c5c !important;border-left-color: #393e4f !important;border-left-style: solid !important;border-right-color: #393e4f !important;border-right-style: solid !important;border-top-color: #393e4f !important;border-top-style: solid !important;border-bottom-color: #393e4f !important;border-bottom-style: solid !important;}
.vc_custom_1428658565232{margin-bottom: 0px ;padding-top: 80px ;padding-bottom: 20px ;background-color: #2b2e3f ;}
.vc_custom_1447923789402{margin-top: 12px !important;}
.vc_custom_1429520259737{margin-top: -11px !important;}
.vc_custom_1429079722061{margin-bottom: 20px !important;}
#section-1 h2:after,#section-1 h2:before{background-color:#db9224;}		
.vc_custom_1429079752030{margin-bottom: 20px !important;}
#section-2 h2:after,#section-2 h2:before{background-color:#db9224;}
.vc_custom_1429079765991{margin-bottom: 20px !important;}
#section-3 h2:after,#section-3 h2:before{background-color:#db9224;}
.vc_custom_1428658579576{margin-top: 0px ;margin-bottom: 0px ;padding-bottom: 80px ;background-color: #2b2e3f ;}
.vc_custom_1429079778018{margin-bottom: 20px !important;}
#section-4 h2:after,#section-4 h2:before{background-color:#db9224;}
.vc_custom_1427084971825{padding-right: 40px !important;}
.vc_custom_1429079787760{margin-bottom: 20px !important;}
#section-5 h2:after,#section-5 h2:before{background-color:#db9224;}
.vc_custom_1429079800113{margin-bottom: 20px !important;}
#section-6 h2:after,#section-6 h2:before{background-color:#db9224;}
.vc_custom_1429091507102{margin-top: 0px ;margin-bottom: 0px ;padding-top: 20px ;padding-bottom: 20px ;background-color: #212330 ;}
.vc_custom_1429092087166{padding-top: 15px !important;}
.vc_custom_1429147194406{padding-right: 0px !important;padding-left: 0px !important;}</style><div class="jquery-media-detect"></div>
</body></html>