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
		<span class="left_s1_2">ASSOCIATION</span>
		</div>
		<div id="left2">
		<div class="left_s3"><table id="table1">
			  <tr>
				<td><a href="/category/asso/gjxh/">国际佛学会</a></td>
				<td><a href="/category/asso/canada">加拿大分会</a></td>
				
			  </tr>
			  <tr>
				<td><a href="/category/asso/america/">美国分会</a></td>
				<td><a href="/category/asso/europe/">欧洲分会</a></td>
				
			  </tr>
			  <tr>
				<td><a href="/category/asso/hk-taiwan/">港台分会</a></td>
				<td><a href="/category/asso/other-branch/">其他分会</a></td>
			  </tr>
			  <tr>
				<td  colspan=2><a style="padding-left:10px;background: url('/wp-content/themes/bwo2014/images/a2.gif') no-repeat scroll 0px 9px rgba(0, 0, 0, 0);" href="#">面向未来招生简章</a></td>
			  </tr>
			  <tr>
			  <td colspan=2><a href="#" style="padding-left:10px;background: url('/wp-content/themes/bwo2014/images/a2.gif') no-repeat scroll 0px 9px rgba(0, 0, 0, 0);">报名及联系方式</a></td>
			  </tr>
		</table></div>
		</div>
		<div id="left3">
			<div class="left_s4"><h1>实修引导<span>╱GUIDES</span></h1></div>
			<ul>
			
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('cat=296&showposts=4');
	while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile;  wp_reset_postdata();?>
		
	</ul>
			<div class="more"><a href="category/practice/guide/">MORE</a></div>			
		</div>
		<div class='line4'><div class='line5'></div></div>
		</div>
		<?php
		$slide_cat = array('66','231','354','386');		
		foreach ($slide_cat as $scat){
		$recentPosts = new WP_Query();
		$args = "cat=".$scat."&showposts=1";
		$recentPosts->query($args);		
		while ($recentPosts->have_posts()) : $recentPosts->the_post(); 
    	$category = get_the_category(); 
		$t1 = $category[0]->cat_name;
		$t5 = get_the_title();
		$t2 = mb_strimwidth($t5, 0, 24);
		$t3 = date('F j,Y',get_the_time('U'));
		$t4 = get_permalink();
		endwhile;  wp_reset_postdata();
		$piclink[] = $t4; 
		$slide[] = sprintf('<h1>%s</h1><h2><a href="%s" title="%s" alt="">%s</a></h2><p>%s</p>',$t1,$t4,$t5,$t2,$t3);		
		}
		
		
		?>		
	
		<div id="container_home">
		<?php 
		$img_s1 = get_field('slider1',13099);
		$img_s2 = get_field('slider2',13099);
		$img_s3 = get_field('slider3',13099);
		$img_s4 = get_field('slider4',13099);
		
		?>
		<div id="slider">
		<div class="hdp">
		<div class="right_R" style="position:absolute;">
		<div class="pic_link">
			<ul>
			     
				    <li mid="0"  class="xz"  ><div class="slider_tri s1"><span class="s_tri">▼</span></div><div class="s1 s_desp s_d1"><?php echo $slide[0];?></div></li>			     
				    <li mid="1" ><div class="slider_tri s2"><span class="s_tri">▼</span></div><div class="s2 s_desp"><?php echo $slide[1];?></div></li>			     
				    <li mid="2" ><div class="slider_tri s3"><span class="s_tri">▼</span></div><div class="s3 s_desp"><?php echo $slide[2];?></div></li>
					<li mid="3 " ><div class="slider_tri s4"><span class="s_tri">▼</span></div><div class="s4 s_desp"><?php echo $slide[3];?></div></li>
			     
			</ul>
		</div>
		<div class="pic_bg"><div class='dashed_line'><div class='dashed_line'></div></div></div>
		<div class="pic">
			<ul>
				 
				<li mid="0 "><a href="<?php echo $piclink[0]?>" title="" alt=""><img src="<?php echo $img_s1['url'];?>" title="" alt="" /></a></li>
				 
				<li mid="1 "><a href="<?php echo $piclink[1]?>" title="" alt=""><img src="<?php echo $img_s2['url'];?>" title="" alt="" /></a></li>
				 
				<li mid="2 "><a href="<?php echo $piclink[2]?>" title="" alt=""><img src="<?php echo $img_s3['url'];?>" title="" alt="" /></a></li>
				<li mid="3 "><a href="<?php echo $piclink[3]?>" title="" alt=""><img src="<?php echo $img_s4['url'];?>" title="" alt="" /></a></li>
			
				 
			</ul>
		</div>
		</div>		
		</div>
		<script type="text/javascript" src="js/slider.js"></script> 
		
		</div>
		<div id="mp-1" class="main_pos mp_1">
		<h1>开示<span>╱LECTURES</span></h1>
		<div class='line6'><div class='line6'></div></div>		
		<img src="<?php the_field('home_img1',13110); ?>">
		<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('cat=93&showposts=1');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    	<div class="mp_content"><h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
		<span><?php echo date('M.j,Y',get_the_time('U')); ?></span>
		<p><?php echo mb_substr(get_the_excerpt(),0,54)."..."; ?></p>
<?php endwhile;  wp_reset_postdata();?>		
</div></div>
		<div class="main_pos">
		<h1>课程<span>╱COURSES</span></h1>
		<div class='line6'><div class='line6'></div></div>		
		<img src="<?php the_field('home_img2',13110); ?>"><div id="mp-2" class="mp_content">
		<ul>
		<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('cat=417&showposts=7');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>		
<?php endwhile;  wp_reset_postdata();?>		
			
		</ul>
		</div></div>
		
		</div><!-- #container -->
		
	
			
		<div id="home-right">
		<div id="right1"><h1>索达吉堪布教言<span>╱QUOTE</span></h1>
		<span class="right_s1">“</span><p><?php $day=idate('d');the_field('day'.$day,'16959'); ?></p><span class="right_s2">”</span></div>
		<div id="right2">
		<h1>最新消息<span>╱NEWS</span></h1>
			<div class='line7'><div class='line7'></div></div>
<ul>
<?php
    global $post;
	$myposts = get_posts('category=-1&numberposts=6');
	foreach($myposts as $post) :
?>

    <li><span><?php echo date('j M',get_the_time('U')); ?> <?php the_category(' &gt; '); ?></span><p> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title();?>"><?php echo mb_strimwidth(get_the_title(), 0, 26, "…"); ?></a></p></li>
<?php endforeach; ?></ul>			
		<?php 
		$arc_year = get_the_time('Y');
		$arc_month = get_the_time('m');?>		
		<div class="more"><a href="<?php echo get_month_link("$arc_year", "$arc_month"); ?>">MORE</a></div>	
		</div>

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>