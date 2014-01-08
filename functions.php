<?php
/**
 * Custom Child Theme Functions
 *
 * This file's parent directory can be moved to the wp-content/themes directory 
 * to allow this Child theme to be activated in the Appearance - Themes section of the WP-Admin.
 *
 * Included is a basic theme setup that will add support for custom header images and custom 
 * backgrounds. There are also a set of commented theme supports that can be uncommented if you need
 * them for backwards compatibility. If you are starting a new theme, these legacy functionality can be deleted.  
 *
 * More ideas can be found in the community documentation for Thematic
 * @link http://docs.thematictheme.com
 *
 * @package ThematicSampleChildTheme
 * @subpackage ThemeInit
 */


/* The Following add_theme_support functions 
 * will enable legacy Thematic Features
 * if uncommented.
 */
 
// add_theme_support( 'thematic_legacy_feedlinks' );
// add_theme_support( 'thematic_legacy_body_class' );
// add_theme_support( 'thematic_legacy_post_class' );
// add_theme_support( 'thematic_legacy_comment_form' );
// add_theme_support( 'thematic_legacy_comment_handling' );

/**
 * Define theme setup
 */

function childtheme_setup() {
	
	/*
	 * Add support for custom background
	 * 
	 * Allow users to specify a custom background image or color.
	 * Requires at least WordPress 3.4
	 * 
	 * @link http://codex.wordpress.org/Custom_Backgrounds Custom Backgrounds
	 */
	add_theme_support( 'custom-background' );
	
	
	/**
	 * Add support for custom headers
	 * 
	 * Customize to match your child theme layout and style.
	 * Requires at least WordPress 3.4
	 * 
	 * @link http://codex.wordpress.org/Custom_Headers Custom Headers
	 */
	add_theme_support( 'custom-header', array(
		// Header image default
		'default-image' => get_stylesheet_directory_uri() .'/images/logo.png',
		// Header text display default
		'header-text' => false,
		// Header text color default
		'default-text-color' => '000',
		// Header image width (in pixels)
		'width'	=> '341',
		// Header image height (in pixels)
		'height' => '72',
		// Header image random rotation default
		'random-default' => false,
		// Template header style callback
		'wp-head-callback' => 'childtheme_header_style',
		// Admin header style callback
		'admin-head-callback' => 'childtheme_admin_header_style'
		) 
	);
	
}
add_action('thematic_child_init', 'childtheme_setup');

//close those function
 function childtheme_override_postheader_postmeta(){}
 function childtheme_override_page_title(){}
 function childtheme_override_postfooter(){}
 function childtheme_override_nav_above(){}
 //function childtheme_override_nav_below(){}
/**
 * Custom Image Header Front-End Callback
 *
 * Defines the front-end style definitions for 
 * the custom image header.
 * This style declaration will be output in the <head> of the
 * document just before the closing </head> tag.
 * Inline Syles and !important declarations 
 * can be used to override these styles.
 *
 * @link http://codex.wordpress.org/Function_Reference/get_header_image get_header_image()
 * @link http://codex.wordpress.org/Function_Reference/get_header_textcolor get_header_textcolor()
 */

 function childtheme_header_style() {
	?>	
	<style type="text/css">
	<?php
	/* Declares the header image from the settings
	 * saved in WP-Admin > Appearance > Header
	 * as the background-image for div#branding.
	 */
	if ( get_header_image() && HEADER_IMAGE != get_header_image() ) {
		?>
		#branding {
			background:url('<?php header_image(); ?>') no-repeat 0 100%;
			margin-bottom:28px;
    		padding:44px 0 <?php echo HEADER_IMAGE_HEIGHT; ?>px 0; /* Bottom padding is the same height as the image */
    		overflow: visible;
}
		}
		<?php if ( 'blank' != get_header_textcolor() ) { ?>
		#blog-title, #blog-title a {
			color:#000;
		}
		#blog-description {	
			padding-bottom: 20px;
		}
		<?php
		}
		
	}
	?>
	<?php
	/* This delcares text color for the Blog title and Description
	 * from the settings saved in WP-Admin > Appearance > Header\
	 * If not set the deafault color is set to #000 
	 */
	if ( get_header_textcolor() ) {
		?>
		#blog-title, #blog-title a, #blog-description {
			color:#<?php header_textcolor(); ?>;
		}
		<?php
	}
	/* Removes header text if the
	 * "Do not diplay header text…" setting is saved
	 * in WP-Admin > Appearance > Header
	 */
	if ( ! display_header_text() ) {
		?>
		#branding {
			background-position: center bottom;
			background-repeat: no-repeat;
			margin-top: 20px;
		}
		#blog-title, #blog-title a, #blog-description {
			display:none;
		}
		#branding { 
			height:<?php echo HEADER_IMAGE_HEIGHT+14; ?>px; 
			width:1020px;
			padding:0; 
		}
		<?php
	}
	?>
	</style>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
             var j = $.noConflict(true);
	</script>
	<?php
}


/**
 * Custom Image Header Admin Callback
 *
 * Callback to defines the admin (back-end) style
 * definitions for the custom image header.
 * Customize the css to match your theme defaults.
 * The !important declarations override inline admin styles
 * to better represent a WYSIWYG of the front-end styling
 * that this child theme is currently designed to display.
 */
function childtheme_admin_header_style() {
	?>
	<style type="text/css">
	#headimg {
		background-position: left bottom; 
		background-repeat:no-repeat;
		border:0 !important;   
		height:auto !important;
		padding:0 0 <?php echo HEADER_IMAGE_HEIGHT; /* change the added integer (22) to match your desired top padding */?>px 0;
		margin:0 0 28px 0;
	}
	
	#headimg h1 {
	    font-family:Arial,sans-serif;
	    font-size:34px;
	    font-weight:bold;
	    line-height:40px;
		margin:0;
	}
	#headimg a {
		color: #000;
		text-decoration: none;
	}
	#desc{
		font-family: Georgia;
    	font-size: 13px;
    	font-style: italic;
    }
	</style>
	
	<?php
}
// Display an image in the custom header
// This function displays the currently selected image (specified in the "Header" admin page)
// The image is placed in the 'header-image' div so it can be easily manipulated in CSS
function display_my_image() {
  $header_image = get_header_image();
    if ( ! empty( $header_image ) ) { ?>
      <div id="header-image">
        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
          <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
        </a>
      </div>
    <?php }
}
// Action position numbers documented at: http://themeshaper.com/thematic/guide/?page_id=10
// Use position 2 to place image between brandingopen and blogtitle
add_action('thematic_header', 'display_my_image', 2);
//藏历+搜索框
add_action('thematic_header','header_right_top');
	function header_right_top(){ ?>
	 <div id="circle"></div><div id="tri"></div>
	 <div id="header_right_top">
		<?php include "includes/tcalr.php";?>
		<div id="search" style="margin-top:14px;"><form action="http://www.baidu.com/s" name="f1" onsubmit="return doSearch(this);" target="_blank"><input type="hidden" name="tn" value="baidulocal" /> <input type="hidden" name="si" value="www.buddhistweb.org" /> <input type="hidden" name="ct" value="2097152" /> <input style="border: 1px solid #cbcbcb; background: url('<?php echo get_stylesheet_directory_uri().'/images/s.gif'; ?>') no-repeat right; padding:3px 5px 5px 8px; color: #3a3a3c;font-size:12px" onclick="javascript:if(this.value=='搜 索')this.value=''" onfocus="cls(this);" onblur="res(this);" type="text" name="word" value="搜 索" size="40" /></form></div>
	</div>	
	<?php }
	
	
//sidebar
add_action('thematic_abovemainasides','sidebar_left');
function sidebar_left() { ?>	
	<?php   $cat = (get_query_var('cat')) ? get_query_var('cat') : 1;
			if(is_single()&&!is_singular( 'ims_gallery' )){
			$category = get_the_category();	
			$cat=$category[0]->cat_ID;			
			}
			$root_id = get_category_root_id($cat);
			if(is_singular( 'ims_gallery' )||is_tax( "ims_album" )){
			$root_id = 386;
			}			
		?>	
	<div id="primary" class="aside main-aside">
		<div id="sidebar_logo">
		<span class="left_s1">INTERNATIONAL</span>
		<span class="left_s2">BUDDHIST</span>
		<span class="left_s1">ASSOCIATION</span>
		</div>
		<div id="sidebar-ps1" class="cat_<?php echo $root_id;?>">
			<span style="display:inline-block">
			<ul>
			<?php 
			if ($root_id=='383'){?>
			<?php		
			$recentPosts = new WP_Query();
			$recentPosts->query('cat=383&showposts=5');
			while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
			<?php endwhile;  wp_reset_postdata();
			}elseif(!is_month()){		
			wp_list_categories("child_of=$root_id&title_li=&hide_empty=1&depth=1");
			}elseif(is_month()){
			echo "<h2>历史更新</h2>";
			wp_get_archives("type=monthly&format=html&show_post_count=true"); 
			}
			
			?>
			</ul>
			</span>
		</div>
	</div>
	<?php
	
if(!is_single() || get_category_root_id($cat)=='383'){

$img_a['1']= get_field('img-right-1a','13110');
$img_b['1']= get_field('img-right-1b','13110');
$img_a['383']= get_field('img-right-1a','13110');
$img_b['383']= get_field('img-right-1b','13110');
$img_a['66']= get_field('img-right-2a','13110');
$img_b['66']= get_field('img-right-2b','13110');
$img_a['384']= get_field('img-right-3a','13110');
$img_b['384']= get_field('img-right-3b','13110');
$img_a['96']= get_field('img-right-4a','13110');
$img_b['96']= get_field('img-right-4b','13110');
$img_a['411']= get_field('img-right-4a','13110');
$img_b['411']= get_field('img-right-4b','13110');
$img_a['284']= get_field('img-right-5a','13110');
$img_b['284']= get_field('img-right-5b','13110');
$img_a['295']= get_field('img-right-6a','13110');
$img_b['295']= get_field('img-right-6b','13110');
$img_a['241']= get_field('img-right-7a','13110');
$img_b['241']= get_field('img-right-7b','13110');
$img_a['279']= get_field('img-right-8a','13110');
$img_b['279']= get_field('img-right-8b','13110');
$img_a['386']= get_field('img-right-9a','13110');
$img_b['386']= get_field('img-right-9b','13110');


?>
<div id="secondary" class="aside main-aside">
	<div class="right_ps1">		
		<img class="s_right1" src="<?php print_r($img_a[$root_id]);?>"> 
		<?php 
		if ($root_id =='383'){
		the_field('right_txt_1a','13121');		
		}else{?>
		<h2>最新更新╱<span>UPDATE</span></h2>
		<ul><?php
		
		$recentPosts = new WP_Query();
		$recentPosts->query("cat=$root_id&showposts=5");
		while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
			<li><a href="<?php the_permalink() ?>" title="<?php the_title();?>" rel="bookmark"><?php echo mb_strimwidth(get_the_title(), 0, 21, "…"); ?></a></li>
		<?php endwhile;  wp_reset_postdata();
		
		?>
		</ul>
		<div class="more"><a href="<?php echo get_category_link($root_id)?>">MORE</a></div>
		<?php } ?>	
	</div>
	<div class="right_ps2">
		<img class="s_right1" src="<?php print_r($img_b[$root_id]);?>">
		<?php 
		if (get_category_root_id($cat)=='383'){
		the_field('right_txt_1b','13121');			
		}else{?>		
		<?php 
		$the_query = new WP_Query(array('cat'=>$cat,'post__in'=>get_option('sticky_posts'),'posts_per_page'=>1,'ignore_sticky_posts' =>1));
		while($the_query->have_posts ()):$the_query->the_post();
		?>
		<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<p><?php echo mb_substr(get_the_excerpt(),0,64)."..."; ?></p>
		<div class="more sticky"><a href="<?php echo the_permalink() ?>">MORE</a></div>
		<?php endwhile; wp_reset_postdata();?>
		
		<?php }
		?>
	</div>
</div>

<?php 
}
}
add_action('thematic_belowcontent','fix1');
function fix1(){
if(is_tax( "ims_album" )){
echo "</div>";
}
}
	
//breadcrumb
add_action('thematic_abovecontent','breadcrumb');
function breadcrumb(){
$cat = (get_query_var('cat')) ? get_query_var('cat') : 1;
$bread = " breadcrumbs1";
if(is_singular( 'ims_gallery' )){
	$cat = 386;
	$bread = " breadcrumbs2";
}elseif(is_tax( "ims_album" )){
	$cat = 386;
	$bread = " breadcrumbs1";
}elseif(is_single()){
	$category = get_the_category();	
	$cat=$category[0]->cat_ID;
	if(get_category_root_id($cat)!='383'){
	$bread = " breadcrumbs2";
	}
}
	
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs" class="cat_'.get_category_root_id($cat).$bread.'">','</p>');
						} 
}

//get category root id

function get_category_root_id($cat)
{
$this_category = get_category($cat);   
while($this_category->category_parent) 
{
$this_category = get_category($this_category->category_parent); 
}
return $this_category->term_id; 
}

//excerpt_length 
function new_excerpt_length($length) {
    return 130;
}
add_filter('excerpt_length', 'new_excerpt_length');

//read more
function new_excerpt_more($more) {
	$cat = (get_query_var('cat')) ? get_query_var('cat') : 1;
	$root_id = get_category_root_id($cat);	
    global $post;    
    return '</p><p><a class="more2 more_'.$root_id.'" href="'.get_permalink($post->ID). '"> >MORE</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
//
function childtheme_override_nav_below(){
if (is_single()) { ?>

			<div id="nav-below" class="navigation">
				
			</div>

<?php
		} else { 
		$cat = (get_query_var('cat')) ? get_query_var('cat') : 1;
		$root_id = get_category_root_id($cat);?>
			<div id="nav-below-<?php echo $root_id;?>" class="navigation">
                <?php if(function_exists('wp_pagenavi')) { ?>
                <?php wp_pagenavi(); ?>
                <?php } else { ?>  
				
				<div class="nav-previous"><?php next_posts_link(sprintf('<span class="meta-nav">&laquo;</span> %s', __('Older posts', 'thematic') ) ) ?></div>
					
				<div class="nav-next"><?php previous_posts_link(sprintf('%s <span class="meta-nav">&raquo;</span>',__( 'Newer posts', 'thematic') ) ) ?></div>

				<?php } ?>
			</div>	
	
<?php
		}
	}
function childtheme_override_postheader_posttitle(){
		$posttitle = "\n\n\t\t\t\t\t";
		$cat = (get_query_var('cat')) ? get_query_var('cat') : 1;
		$root_id = get_category_root_id($cat);
		if ( !$title_content = get_the_title() )  
			$title_content = '<a href="' . get_permalink() . '">' . _x('(Untitled)', 'Default title for untitled posts', 'thematic') . '</a>';
	    if($root_id =='411'){		
			$posttitle .= '<div class="book-txt"><h1 class="entry-title"><a href="'.get_field('online').'" >《'. $title_content . "》</a></h1>\n";
			if ( apply_filters( 'thematic_post_thumbs', TRUE) ) {
				$size = apply_filters( 'thematic_post_thumb_size' , array(150,150) );
				$attr = apply_filters( 'thematic_post_thumb_attr', array('title'	=> sprintf( esc_attr__('Permalink to %s', 'thematic'), the_title_attribute( 'echo=0' ) ) ) );
				if ( has_post_thumbnail() ) {
					$posttitle = sprintf('<div class="book-item"><div class="book-thumb">%s</div>',							
									get_the_post_thumbnail(get_the_ID(), $size, $attr)) . $posttitle;
					}				
			}
		}elseif (is_single() || is_page()) {
	        $posttitle .= '<h1 class="entry-title">' . $title_content . "</h1>\n";
	    } elseif (is_404()) {    
	        $posttitle .= '<h1 class="entry-title">' . __('Not Found', 'thematic') . "</h1>\n";
	    } else {
	        $posttitle .= '<h2 class="entry-title">';
	        $posttitle .= sprintf('<a href="%s" title="%s" rel="bookmark">%s</a>',
	        						apply_filters('the_permalink', get_permalink()),
									sprintf( esc_attr__('Permalink to %s', 'thematic'), the_title_attribute( 'echo=0' ) ),
	        						$title_content
	        						);   
	        $posttitle .= "</h2>\n";
	    }
	    
	    return apply_filters('thematic_postheader_posttitle',$posttitle); 
}
	
function childtheme_override_content(){
	global $thematic_content_length;
		$cat = (get_query_var('cat')) ? get_query_var('cat') : 1;
		$root_id = get_category_root_id($cat);
		if($root_id =='411'){
			$post = get_the_content( thematic_more_text() );
			$post = apply_filters('the_content', $post);
			$post = str_replace(']]>', ']]&gt;', $post);			
			$post = $post.'<div class="book-link"><a href="'.get_field('online').'" >在线阅读</a><a href="'.get_field('download').'">文档下载</a></div></div></div>';
		} elseif ( strtolower($thematic_content_length) == 'full' ) {
			$post = get_the_content( thematic_more_text() );
			$post = apply_filters('the_content', $post);
			$post = str_replace(']]>', ']]&gt;', $post);
		} elseif ( strtolower($thematic_content_length) == 'excerpt') {
			$post = '';
			$post .= get_the_excerpt();
			$post = apply_filters('the_excerpt',$post);
			if ( apply_filters( 'thematic_post_thumbs', TRUE) ) {
				$post_title = get_the_title();
				$size = apply_filters( 'thematic_post_thumb_size' , array(100,100) );
				$attr = apply_filters( 'thematic_post_thumb_attr', array('title'	=> sprintf( esc_attr__('Permalink to %s', 'thematic'), the_title_attribute( 'echo=0' ) ) ) );
				if ( has_post_thumbnail() ) {
					$post = sprintf('<a class="entry-thumb" href="%s" title="%s">%s</a>',
									get_permalink() ,
									sprintf( esc_attr__('Permalink to %s', 'thematic'), the_title_attribute( 'echo=0' ) ),
									get_the_post_thumbnail(get_the_ID(), $size, $attr)) . $post;
					}				
			}
		} elseif ( strtolower($thematic_content_length) == 'none') {
			$post= '';		
		} else {	
			$post = get_the_content( thematic_more_text() );
			$post = apply_filters('the_content', $post);
			$post = str_replace(']]>', ']]&gt;', $post);
		}
		echo apply_filters('thematic_post', $post);
	} 
		

