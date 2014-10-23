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
        <?php echo $this->element('head');?>
    </head>

    <body class=" ">
        <div>
            <!--BEGIN BACK TO TOP-->
            <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
            <!--END BACK TO TOP-->
            <!--BEGIN TOPBAR-->
            <?php echo $this->element("topbar"); ?>
            <?php echo $this->fetch('topbar'); ?>
            <!--END TOPBAR-->
            <div id="wrapper">
                <!--BEGIN SIDEBAR MENU-->
                <?php echo $this->element("sidebar"); ?>
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
        <?php //echo $this->element('sql_dump');  ?>    
        <?php echo $this->fetch('scriptBottom'); ?>
        <?php echo $this->fetch('scriptBlockBottom'); ?>
        <?php echo $this->Session->flash('flash', array("element" => "flash_notification")); ?>
    </body>
</html>
