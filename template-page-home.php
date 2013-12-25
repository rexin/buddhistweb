<?php
/**
 * Template Name: Homepage
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
		<div id="home-left">
		<div id="left1"></div>
		<div id="left2"></div>
		<div id="left3"></div>
		</div>
		
	
		<div id="container_home">
		<div class="hdp">
		<div class="right_R" style="position:absolute;z-index:1;">
		<div class="pic_link">
			<ul>
			     
				    <li mid="0"  class="xz"  ><div class="slider_tri s1"><span class="s_tri">▼</span></div><div class="s1 s_desp s_d1"><h1>test</h1><h2>标题测试测试斯蒂芬森防守打法</h2><span>2013.12.25</span></div></li>			     
				    <li mid="1" ><div class="slider_tri s2"><span class="s_tri">▼</span></div><div class="s2 s_desp"><h1>test</h1><h2>标题测试测试斯蒂芬森防守打法</h2><span>asdfsdf sf sf </span></div></li>			     
				    <li mid="2" ><div class="slider_tri s3"><span class="s_tri">▼</span></div><div class="s3 s_desp"><h1>test</h1><h2>标题测试测试斯蒂芬森防守打法</h2><span>2013.12.25</span></div></li>
					<li mid="3 " ><div class="slider_tri s4"><span class="s_tri">▼</span></div><div class="s4 s_desp"><h1>test</h1><h2>标题测试测试斯蒂芬森防守打法</h2><span>2013.12.25</span></div></li>
			     
			</ul>
		</div>
		<div class="pic_bg"><div class='dashed_line'><div class='dashed_line'></div></div></div>
		<div class="pic">
			<ul>
				 
				<li mid="0 "><a href="http://sc.chinaz.com/" title="超级雷达 " alt="超级雷达 "><img src="images/1.jpg " title="超级雷达 " alt="超级雷达 " /></a></li>
				 
				<li mid="1 "><a href="http://sc.chinaz.com/" title="私有云-存储随时随地 " alt="私有云-存储随时随地 "><img src="images/2.jpg " title="私有云-存储随时随地 " alt="私有云-存储随时随地 " /></a></li>
				 
				<li mid="2 "><a href="http://sc.chinaz.com/" title="云播放公测 " alt="云播放公测 "><img src="images/3.jpg " title="云播放公测 " alt="云播放公测 " /></a></li>
				<li mid="3 "><a href="http://sc.chinaz.com/" title="云播放公测 " alt="云播放公测 "><img src="images/2.jpg " title="云播放公测 " alt="云播放公测 " /></a></li>
			
				 
			</ul>
		</div>
		</div>
		<script type="text/javascript" src="js/slider.js"></script> 
		
		</div>
	
			<?php
				// action hook for inserting content above #content
				thematic_abovecontent();		
	    	
				// filter for manipulating the element that wraps the content 
				echo apply_filters( 'thematic_open_id_content', '<div id="content_home">' . "\n\n" );
			
				// calling the widget area 'page-top'
	            //get_sidebar('page-top');
	
	            // start the loop
	            while ( have_posts() ) : the_post();
	            
	            // action hook for inserting content above #post
	            thematic_abovepost();
	        ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> > 

				<?php

	            	// creating the post header
	            	//thematic_postheader();
	            ?>
	                
					<div class="entry-content">
	
	                    <?php
	                    	the_content();
	                    
	                    	wp_link_pages( "\t\t\t\t\t<div class='page-link'>" . __( 'Pages: ', 'thematic' ), "</div>\n", 'number' );
	                    
	                    	edit_post_link( __( 'Edit', 'thematic' ), '<span class="edit-link">','</span>' );
	                    ?>
	
					</div>
					
				</div><!-- .post -->
	
			<?php
				// calls the do_action for inserting content below #post
	        	thematic_belowpost();
	        		        
	        	// action hook for calling the comments_template
       			thematic_comments_template();
        		
	        	// end loop
        		endwhile;
	        
	        	// calling the widget area 'page-bottom'
	        	get_sidebar( 'page-bottom' );
	        ?>
	
			</div><!-- #content -->
			
			<?php 
				// action hook for inserting content below #content
				thematic_belowcontent(); 
			?> 
		</div><!-- #container -->
		<div id="home-right">
		<div id="right1"></div>
		<div id="right2"></div>		
		</div>

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>