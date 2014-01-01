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
		<div id="left3">
			<div class="left_s4"><h1>学修引导<span>╱GUIDES</span></h1></div>
			<ul>
			<li><a href="">修法1111</a></li>
			<li><a href="">修法1111</a></li>
			<li><a href="">修法1111</a></li>
			<li><a href="">修法1111</a></li>
			</ul>
			<div class="more">MORE</div>			
		</div>
		<div class='line4'><div class='line5'></div></div>
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
				    <li mid="1" ><div class="slider_tri s2"><span class="s_tri">▼</span></div><div class="s2 s_desp"><h1><?php echo $img_s2['caption'];?></h1><h2><a href="<?php echo $img_s2['alt'];?>" title="" alt=""><?php echo $img_s2['title'];?></a></h2><span><?php echo $img_s2['description'];?></span></div></li>			     
				    <li mid="2" ><div class="slider_tri s3"><span class="s_tri">▼</span></div><div class="s3 s_desp"><h1><?php echo $img_s3['caption'];?></h1><h2><a href="<?php echo $img_s3['alt'];?>" title="" alt=""><?php echo $img_s3['title'];?></a></h2><span><?php echo $img_s3['description'];?></span></div></li>
					<li mid="3 " ><div class="slider_tri s4"><span class="s_tri">▼</span></div><div class="s4 s_desp"><h1><?php echo $img_s4['caption'];?></h1><h2><a href="<?php echo $img_s4['alt'];?>" title="" alt=""><?php echo $img_s4['title'];?></a></h2><span><?php echo $img_s4['description'];?></span></div></li>
			     
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
		<h1>演讲<span>╱LECTURES</span></h1>
		<div class='line6'><div class='line6'></div></div>		
		<img src="<?php the_field('img_left'); ?>"><div class="mp_content"><h4>测试是事实</h4>
		<span>Aug.8,2013</span>
		<p>测试是事实测试是实测试是实测试是事实</p>
		</div></div>
		<div class="main_pos">
		<h1>课程<span>╱COURSES</span></h1>
		<div class='line6'><div class='line6'></div></div>		
		<img src="<?php the_field('img_right'); ?>"><div class="mp_content">
		<ul>
			<li><a href="">课程1</a></li>
			<li><a href="">课程1</a></li>
			<li><a href="">课程1</a></li>
			<li><a href="">课程1</a></li>
			<li><a href="">课程1</a></li>		
			
		</ul>
		</div></div>
		
		</div><!-- #container -->
		
	
			
		<div id="home-right">
		<div id="right1"><h1>今日教言<span>╱DAILY QUOTE</span></h1>
		<span class="right_s1">“</span><p>适当放松啊的发生的发生的方式的发生的方式的发生的方式的发生的方式的发生的方式啊</p><span class="right_s2">”</span></div>
		<div id="right2">
		<h1>最新消息<span>╱NEWS</span></h1>
			<div class='line7'><div class='line7'></div></div>	
		<ul>
		<li><span>14 FEB SFASDSADF</span><p>发生的方式的发生的方式的发生的方式</p></li>
		<li><span>14 FEB SFASDSADF</span><p>发生的方式的方式的发生的方式</p></li>
		<li><span>14 FEB SFASDSADF</span><p>发生的方式的发式的发生的方式</p></li>
		<li><span>14 FEB SFASDSADF</span><p>发生的方式的发生生的方式</p></li>
		<li><span>14 FEB SFASDSADF</span><p>发生的方式的发生的方式的式</p></li>	
		</ul>		
		<div class="more">MORE</div>	
		</div>

<?php 
    // action hook for placing content below #container
    thematic_belowcontainer();
    
    // calling footer.php
    get_footer();
?>