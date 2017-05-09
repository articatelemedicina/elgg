<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
 global $Themer;
?>
/* <style> /**/

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	min-height: 65px;
}
.elgg-page-default .elgg-page-navbar > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	<?php if(!empty($Themer->inner_color)){ ?>
	background-color: <?php echo $Themer->inner_color;?>;
	<?php } ?>	
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: #424242;
	border-top: 1px solid #424242;
	border-bottom: 1px solid #000000;
	padding: 0 20px;
	position: relative;
	height: 32px;
	z-index: 9000;
	<?php if(!empty($Themer->topbar_color)){ ?>
	background:<?php echo $Themer->topbar_color;?> !important;	
	<?php } ?>
	<?php if(!empty($Themer->topbar_height)){ ?>
	height:<?php echo $Themer->topbar_height;?>px; !important;	
	<?php } ?>		
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 32px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
	background: #60B8F7;
	<?php if(!empty($Themer->header_color) && $Themer->headerbg == 'color'){ ?>
    background:<?php echo $Themer->header_color;?> !important;	
	<?php } ?>	
	<?php if($Themer->headerbg == 'image'){ ?>
	background:url('<?php echo elgg_get_site_url();?>mod/themer/images/header.jpg') !important;	
	<?php } ?>			
	<?php if(!empty($Themer->header_height)){ ?>
	height:<?php echo $Themer->header_height;?>px !important;	
	<?php } ?>		
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE NAVBAR ******/
.elgg-page-navbar {
	padding: 0 20px;
	position: relative;

}
.retreat_manager_retreat_list_icon_month {
	<?php if(!empty($Themer->menubar_color)){ ?>
	background:<?php echo $Themer->menubar_color;?> !important;	
border:1px solid <?php echo $Themer->menubar_color;?> !important;
	<?php } ?>

}
.elgg-page-navbar > .elgg-inner {
	position: relative;
	<?php if(!empty($Themer->menubar_color)){ ?>
	background:<?php echo $Themer->menubar_color;?> !important;	
	<?php } ?>
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 0 20px;
}

.elgg-layout {
	min-height: 360px;
	padding:10px;
}
.elgg-layout-widgets > .elgg-widgets {
	float: right;
}
.elgg-sidebar {
	position: relative;
	padding: 32px 0 20px 30px;
	float: right;
	width: 21.212121%;
	margin: 0;
	border-left: 1px solid #EBEBEB;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 32px 30px 20px 0;
	float: left;
	width: 16.161616%;
	margin: 0 30px 0 0;
	border-right: 1px solid #EBEBEB;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 12px 0 10px 0;
}
.elgg-main > .elgg-head {
	padding-bottom: 5px;
	border-bottom: 1px solid #EBEBEB;
	margin-bottom: 10px;
}
.elgg-layout-one-sidebar .elgg-main {
	float: left;
	width: 72.525252%;
}
.elgg-layout-two-sidebar .elgg-main {
	float: left;
	width: 50.101010%;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	padding: 0 10px;
	position: relative;
}

.elgg-page-footer a:hover {
	color: #666;
}
