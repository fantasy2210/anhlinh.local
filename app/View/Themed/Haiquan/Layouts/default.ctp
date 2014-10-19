<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from swlabs.co/madmin/code/layout-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 19 Sep 2014 15:33:38 GMT -->

<head>
    <title><?php echo __($title_for_layout); ?></title>
    <?php 
		echo $this->Html->charset(); 
	?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="images/icons/favicon.html">
    <link rel="apple-touch-icon" href="images/icons/favicon-2.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.html">
    <!--Loading bootstrap css-->    
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="/vendors/sco.message/sco.message.css">
    <link type="text/css" rel="stylesheet" href="/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
	<link type="text/css" rel="stylesheet" href="/vendors/select2/select2-madmin.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="/css/themes/style1/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="/css/style-responsive.css">
</head>

<body class=" ">
	<div>
		<!--BEGIN BACK TO TOP-->
		<a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
		<!--END BACK TO TOP-->
		<!--BEGIN TOPBAR-->
		<?php echo $this->element("topbar");?>
		<?php echo $this->fetch('topbar'); ?>
		<!--END TOPBAR-->
		<div id="wrapper">
			<!--BEGIN SIDEBAR MENU-->
			<?php echo $this->element("sidebar");?>
			<?php echo $this->fetch('sidebar'); ?>
			<!--END SIDEBAR MENU-->
			<div id="page-wrapper">
				<!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title"><?php echo __($title_for_layout); ?></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li><a href="#">Layouts</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Left Sidebar</li>
                    </ol>
                    <div class="btn btn-blue reportrange hide"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                        <input type="hidden" name="datestart" />
                        <input type="hidden" name="endstart" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
				<div class="page-content">
                    <div class="row">
                        <div class="col-lg-12">						
						<?php echo $this->fetch('content'); ?>
						</div>
					</div>
				</div>
			</div>
			<!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
            </div>
            <!--END FOOTER-->
            <!--END PAGE WRAPPER-->
		</div>
	</div>
	<div id="modal-responsive" tabindex="-1" role="dialog" class="modal fade">		
		<div class="modal-dialog">
        <div class="modal-content">            
		</div>
		</div>
	</div>
	<div id="modal-adddonvi" tabindex="-1" role="dialog" class="modal fade">
		<div class="modal-dialog">
        <div class="modal-content">            
		</div>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <!--loading bootstrap js-->
    <script src="/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
    <script src="/js/html5shiv.js"></script>
    <script src="/js/respond.min.js"></script>
    <script src="/vendors/metisMenu/jquery.metisMenu.js"></script>
    <script src="/vendors/slimScroll/jquery.slimscroll.js"></script>
    <script src="/vendors/jquery-cookie/jquery.cookie.js"></script>
    <script src="/vendors/iCheck/icheck.min.js"></script>
    <script src="/vendors/iCheck/custom.min.js"></script>
	
    <script src="/vendors/sco.message/sco.message.js"></script>
    <script src="/vendors/jquery-highcharts/highcharts.js"></script>
    <script src="/js/jquery.menu.js"></script>
    <script src="/vendors/jquery-pace/pace.min.js"></script>
    <script src="/vendors/holder/holder.js"></script>
    <script src="/vendors/responsive-tabs/responsive-tabs.js"></script>
    <script src="/vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
    <script src="/vendors/moment/moment.js"></script>
	<script src="/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/vendors/select2/select2.min.js"></script>
	<script src="/vendors/select2/select2_locale_vi.js"></script>
    <!--script src="/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script-->
    <!--script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script-->
    <!--CORE JAVASCRIPT-->
    <script src="/js/main.js"></script>  
	<?php echo $this->fetch('scriptBottom');?>
	<?php echo $this->fetch('scriptBlockBottom');?>
	<?php echo $this->Session->flash('flash',array("element"=>"flash_notification")); ?>
</body>
</html>
