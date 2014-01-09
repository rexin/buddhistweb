<?php
/**
 * Template Name: LIVE
 *
 * This Full Width template removes the primary and secondary asides so that content
 * can be displayed the entire width of the #content area.
 * 
 * @package Thematic
 * @subpackage Templates
 */

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();
?>
	<style type="text/css">
	#branding,#wrapper,#main{width:1090px;}	
	</style>
	<div style="width:1090px;overflow:hidden;">
	<div style="margin-top:-150px;margin-left:-10px;">
	<iframe src="http://fypd.zhibeifw.com" frameborder="0" width="1140"  height="815"  scrolling="no"></iframe>
	</div>
	</div>

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>