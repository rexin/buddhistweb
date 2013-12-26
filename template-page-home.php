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
		<div id="left1">
		<span class="left_s1">INTERNATIONAL</span>
		<span class="left_s2">BUDDHIST</span>
		<span class="left_s1">ASSOCIATION</span>
		</div>
		<div id="left2">
		<div class="left_s3"><table id="table1">
			  <tr>
				<td><a href="">国际佛学会</a></td>
				<td><a href="">大洋洲分会</a></td>
			  </tr>
			  <tr>
				<td><a href="">加拿大分会</a></td>
				<td><a href="">港台分会</a></td>
			  </tr>
			  <tr>
				<td><a href="">欧洲分会</a></td>
				<td><a href="">其他分会</a></td>
			  </tr>
			  <tr>
				<td><a href="">美国分会</a></td>
				<td><a href=""></a></td>
			  </tr>
		</table></div>
		</div>
		<div id="left3"></div>
		</div>
		
	
		<div id="container_home">
		<?php 
		$img_s1 = get_field('slider1');
		$img_s2 = get_field('slider2');
		$img_s3 = get_field('slider3');
		$img_s4 = get_field('slider4');
		?>
		<div id="slider">
		<div class="hdp">
		<div class="right_R" style="position:absolute;">
		<div class="pic_link">
			<ul>
			     
				    <li mid="0"  class="xz"  ><div class="slider_tri s1"><span class="s_tri">▼</span></div><div class="s1 s_desp s_d1"><h1><?php echo $img_s1['caption'];?></h1><h2><a href="<?php echo $img_s1['alt'];?>" title="" alt=""><?php echo $img_s1['title'];?></a></h2><span><?php echo $img_s1['description'];?></span></div></li>			     
				    <li mid="1" ><div class="slider_tri s2"><span class="s_tri">▼</span></div><div class="s2 s_desp"><h1>TEST</h1><h2><a href="#" title="" alt="">标题测试测试斯蒂芬森防守打法</a></h2><span>asdfsdf sf sf </span></div></li>			     
				    <li mid="2" ><div class="slider_tri s3"><span class="s_tri">▼</span></div><div class="s3 s_desp"><h1>TEST</h1><h2><a href="#" title="" alt="">标题测试测试斯蒂芬森防守打法</a></h2><span>2013.12.25</span></div></li>
					<li mid="3 " ><div class="slider_tri s4"><span class="s_tri">▼</span></div><div class="s4 s_desp"><h1>TEST</h1><h2><a href="#" title="" alt="">标题测试测试斯蒂芬森防守打法</a></h2><span>2013.12.25</span></div></li>
			     
			</ul>
		</div>
		<div class="pic_bg"><div class='dashed_line'><div class='dashed_line'></div></div></div>
		<div class="pic">
			<ul>
				 
				<li mid="0 "><a href="<?php echo $img_s1['alt'];?>" title="" alt=""><img src="<?php echo $img_s1['url'];?>" title="" alt="" /></a></li>
				 
				<li mid="1 "><a href="#" title="" alt=""><img src="<?php echo $img_s2['url'];?>" title="" alt="" /></a></li>
				 
				<li mid="2 "><a href="#" title="" alt=""><img src="<?php echo $img_s3['url'];?>" title="" alt="" /></a></li>
				<li mid="3 "><a href="#" title="" alt=""><img src="<?php echo $img_s4['url'];?>" title="" alt="" /></a></li>
			
				 
			</ul>
		</div>
		</div>		
		</div>
		<script type="text/javascript" src="js/slider.js"></script> 
		
		</div>
		<div class="main_pos mp_1">
		<h1>演讲 ／ LECTURES</h1>
		<div class='dashed_line'><div class='dashed_line'></div></div>
		<img src="images/img_index/1.jpg"><div class="mp_content"><h4>测试是事实</h4>
		<span>Aug.8,2013</span>
		<p>测试是事实测试是实测试是实测试是事实</p>
		</div></div>
		<div class="main_pos">
		<h1>课程 ／ COURSES</h1>
		<div class='dashed_line'><div class='dashed_line'></div></div>
		<img src="images/img_index/2.jpg"><div class="mp_content"><h4>测试是事实</h4>
		<span>Aug.8,2013</span>
		<p>测试是事实测试实测试是实测试是是事实</p>
		</div></div>
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