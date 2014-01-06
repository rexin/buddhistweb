<?php
/**
 * Footer Template
 *
 * This template closes #main div and displays the #footer div.
 * 
 * Thematic Action Hooks: thematic_abovefooter thematic_belowfooter thematic_after
 * Thematic Filters: thematic_close_wrapper can be used to remove the closing of the #wrapper div
 * 
 * @package Thematic
 * @subpackage Templates
 */
?>
		<?php // action hook for placing content above the closing of the #main div
			thematic_abovemainclose();
		?>
		
		</div><!-- #main -->
    	
    	<?php
			// action hook for placing content above the footer
			thematic_abovefooter();
		
			// Filter provided for altering output of the footer opening element
    		echo ( apply_filters( 'thematic_open_footer', '<div id="footer">' ) );
    	?>	
        	<div class='line4'><div class='line5'></div></div>
			<div id="foot-nav">
			<div class="foot_link"><h1>中文网站</h1><?php wp_list_bookmarks('orderby=rating&categorize=0&category=396&title_li='); ?></div>
			<div class="foot_link"><h1>其它语种</h1><?php wp_list_bookmarks('orderby=rating&categorize=0&category=397&title_li='); ?></div>
			<div class="foot_link"><h1>友情链接</h1><?php wp_list_bookmarks('orderby=rating&categorize=0&category=398&title_li='); ?></div>
			<div class="foot_link link2"><h1>关注我们</h1><?php wp_list_bookmarks('orderby=rating&categorize=0&category=401&title_li='); ?></div>
			<div class="foot_link link2"><h1>联系我们</h1><?php wp_list_bookmarks('orderby=rating&categorize=0&category=402&title_li='); ?></div>
			<div class="foot_link link2"><h1>加入我们</h1><?php wp_list_bookmarks('orderby=rating&categorize=0&category=403&title_li='); ?></div>
			</div>
			<div id="foot-info"><img src="<?php echo get_stylesheet_directory_uri() .'/images/footer.jpg';?>">
			<div id="share"><?php $share_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
			<ul id="share-link">
				<li id="share-link-01"><a href="http://www.facebook.com/sharer.php?u=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-02"><a href="http://twitter.com/share?url=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-03"><a href="https://plus.google.com/share?url=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-04"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-05"><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body." alt="" />
<area shape="circle" coords="239,15, 15" href="mailto:?Subject=<?php echo wp_title( '', false, 'right' );?>&amp;Body=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-06"><a href="mailto:?Subject=<?php echo wp_title( '', false, 'right' );?>&amp;Body=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-07"><a href="http://www.digg.com/submit?url=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-08"><a href="http://reddit.com/submit?url=<?php echo $share_link;?>">link</a></li>
				<li id="share-link-09"><a href="http://www.stumbleupon.com/submit?url=<?php echo $share_link;?>">link</a></li>
			</ul>
			</div>
			<span class="copyright">Copyright ©  2013 International Buddhist Association - ALL RIGHTS RESERVED</span></div>
			
        	<?php
        		// action hook creating the footer 
        		thematic_footer();
        	?>
        	
		<?php
			// Filter provided for altering output of the footer closing element
    		echo ( apply_filters( 'thematic_close_footer', '</div><!-- #footer -->' . "\n" ) );
   
   			// action hook for placing content below the footer
			thematic_belowfooter();
    	?>
    	
	<?php
		// Filter provided for altering output of wrapping element follows the body tag  
    	if ( apply_filters( 'thematic_close_wrapper', true ) ) 
    		echo ( '</div><!-- #wrapper .hfeed -->' . "\n" );
	

		// action hook for placing content before closing the BODY tag
		thematic_after(); 
		
		// calling WordPress' footer action hook
		wp_footer();
	?>

</body>
</html>