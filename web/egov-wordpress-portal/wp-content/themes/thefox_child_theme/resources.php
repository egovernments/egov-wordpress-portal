	

<?php

/*

Template Name: Resources page

*/



/// Set the slider

$slider_page_id = $post->ID;
if(is_home() && !is_front_page()){
	$slider_page_id = get_option('page_for_posts');
}

if(get_post_meta($slider_page_id, 'rd_slider_type', true) == 'layer' && (get_post_meta($slider_page_id, 'rd_slider', true) || get_post_meta($slider_page_id, 'rd_slider', true) != 0)){ 

	function add_revolution_slider(){
		echo '<div>';
	    echo do_shortcode('[rev_slider '.get_post_meta(get_the_ID(), 'rd_slider', true).']'); 
		echo '</div>';
	}
	
	if(	get_post_meta($slider_page_id, 'rd_slider_position', true) == 'above'){
		add_action( '__before_header' , 'add_revolution_slider');
	}
	else{
		add_action( '__after_page_title' , 'add_revolution_slider');
	}


}
if(get_post_meta($slider_page_id, 'rd_slider_type', true) == 'layerslider' && (get_post_meta($slider_page_id, 'rd_layerslider', true) || get_post_meta($slider_page_id, 'rd_layerslider', true) != 0)){ 

	function add_layer_slider(){
		echo '<div>';
	    echo do_shortcode('[layerslider  id="'.get_post_meta(get_the_ID(), 'rd_layerslider', true).'"]'); 
		echo '</div>';
	}
	
	if(	get_post_meta($slider_page_id, 'rd_slider_position', true) == 'above'){
		add_action( '__before_header' , 'add_layer_slider');
	}
	else{
		add_action( '__after_page_title' , 'add_layer_slider');
	}


}


get_header();
the_post();
global $rd_data;
global $bp; 
$header_top_bar = get_post_meta( $post->ID, 'rd_top_bar', true );
$header_transparent = get_post_meta( $post->ID, 'rd_header_transparent', true );
$p_sidebar = get_post_meta( $post->ID, 'rd_sidebar', true );
$title = get_post_meta($post->ID, 'rd_title', true);
$title_height = get_post_meta($post->ID, 'rd_title_height', true);
$title_color = get_post_meta($post->ID, 'rd_title_color', true);
$titlebg_color = get_post_meta($post->ID, 'rd_titlebg_color', true);
$ctbg = get_post_meta($post->ID, 'rd_ctbg', true);
$bc = get_post_meta($post->ID, 'rd_bc', true);
$sb_style = $rd_data['rd_sidebar_style'];
$content_border_color = $rd_data['rd_content_border_color'];


/// Check if need to hide header top bar
if ($header_top_bar == 'yes' ){

 echo '<style type="text/css" >#top_bar {display:none;}</style>';

}

/// Check if header is transparent
if( ( $rd_data['rd_nav_type'] == 'nav_type_1' && $header_transparent == "yes" || $rd_data['rd_nav_type'] == 'nav_type_2' && $header_transparent == "yes" || $rd_data['rd_nav_type'] == 'nav_type_3' && $header_transparent == "yes" || $rd_data['rd_nav_type'] == 'nav_type_8' && $header_transparent == "yes" || $rd_data['rd_nav_type'] == 'nav_type_9' || $rd_data['rd_nav_type'] == 'nav_type_9_c' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 90;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 133;
}
}
if( ( $rd_data['rd_nav_type'] == 'nav_type_10' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 91;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 134;
}
}

if($rd_data['rd_nav_type'] == 'nav_type_4' && $header_transparent == "yes" ){

	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 101;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 144;
}

}
if(($rd_data['rd_nav_type'] == 'nav_type_5' || $rd_data['rd_nav_type'] == 'nav_type_6' || $rd_data['rd_nav_type'] == 'nav_type_7' || $rd_data['rd_nav_type'] == 'nav_type_12'  ) && $header_transparent == "yes"){

	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 100;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 143;
}
}


if( ( $rd_data['rd_nav_type'] == 'nav_type_10' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 91;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 134;
}
}


if( ( $rd_data['rd_nav_type'] == 'nav_type_11' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 110;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 153;
}
}


if( ( $rd_data['rd_nav_type'] == 'nav_type_13' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 62;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 105;
}
}


if( ( $rd_data['rd_nav_type'] == 'nav_type_14' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 65;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 108;
}
}

if( ( $rd_data['rd_nav_type'] == 'nav_type_15' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 140;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 183;
}
}if( ( $rd_data['rd_nav_type'] == 'nav_type_16' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 160;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 203;
}
}if( ( $rd_data['rd_nav_type'] == 'nav_type_17' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 159;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 202;
}
}if( ( $rd_data['rd_nav_type'] == 'nav_type_18' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 162;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 205;
}
}
if( ( $rd_data['rd_nav_type'] == 'nav_type_19' ) && $header_transparent == "yes"){
	
if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom + 162;
	
}else{
		$title_padding_bottom = 43;
	$title_padding_top = 43;
}
}


if($header_transparent == "yes" && $rd_data['rd_nav_type'] !== 'nav_type_19' && $rd_data['rd_nav_type'] !== 'nav_type_19_f' ){
 ?>
<script type="text/javascript" charset="utf-8">
		var j$ = jQuery;
		j$.noConflict();
		"use strict";
		
		
		j$('#header_container').css('position', 'absolute');
		j$('#header_container').css('width', '100%');	
		j$('header').addClass('transparent_header');		
		j$('.header_bottom_nav').addClass('transparent_header');
		
</script>






<?php

}else {

if($title_height !== ''){
	
	$title_padding_bottom = $title_height/2;
	$title_padding_top = $title_padding_bottom;
}else{
	
	$title_padding_bottom = $title_padding_top = 43;

}
}



 
/// Set title height
echo '<style type="text/css" >.page_title_ctn {padding-top:'.$title_padding_top.'px; padding-bottom:'.$title_padding_bottom.'px;}</style>';


/// Set the title color

if($title_color !== ''){
	$rgba= rd_hex_to_rgb_array($title_color);
	echo '<style type="text/css" >.page_title_ctn h1,.page_title_ctn h2,#crumbs,#crumbs a{color:'.$title_color.';}.page_t_boxed h1,.page_t_boxed h1{border-color:rgba('. $rgba[0].','.$rgba[1].','.$rgba[2] .',0.5); }#crumbs span{color:rgba('. $rgba[0].','.$rgba[1].','.$rgba[2] .',0.8);}</style>';
}
/// Set the title background
if($titlebg_color !== ''){
	echo '<style type="text/css" >.page_title_ctn {background:'.$titlebg_color.';}</style>';
}
if($ctbg !== ''){
	echo '<style type="text/css" >.page_title_ctn{background:url('.$ctbg.') top center; background-size: cover; border-bottom:1px solid '.$content_border_color.'; }</style>';
}

/// Check title style
if($title !== 'no'){  ?>
<div class="page_title_ctn"> 
  <div class="wrapper table_wrapper">
  <h1><?php the_title(); ?></h1>
  <?php if($bc !== 'no') { echo wpb_list_child_pages();  ?>     
<div id="breadcrumbs">
  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>
<?php } ?> 
</div>
</div>
<?php } 

do_action( '__after_page_title' );

?>

<style>
.container {max-width: 1170px !important;}
div.tab-frame input{ display:none;}
div.tab-frame label{ display:block; float:left;padding: 15px 30px; cursor:pointer; font-weight: 600;}
div.tab-frame input:checked + label{ z-index: 9999;position: relative;background: #fff; color: #f68b1f;cursor: default;border-top: 2px solid #f68b1f;border-bottom: 1px solid #ffffff; top: 1px;}
div.tab-frame div.tab{ display:none; padding:10px;clear:left;background: #fff;}

div.tab-frame input:nth-of-type(1):checked ~ .tab:nth-of-type(1),
div.tab-frame input:nth-of-type(2):checked ~ .tab:nth-of-type(2),
div.tab-frame input:nth-of-type(3):checked ~ .tab:nth-of-type(3){ display:block;}
.tab-frame h4 {color: rgb(246, 123, 0);
font-weight: 400;}
.tab-frame {margin: 40px 0;}
.tab-frame p{font-size: 14px;
    line-height: 1.5;}
.tab-frame button {color: #0076bd;
    border: 1px solid #0076bd;
    background: transparent;
    padding: 8px;}
.tab ul li {padding: 20px 15px;
    border-bottom: 1px solid #d4d4d4;}
	
.tab ul li:last-child {
    border-bottom: none ;
}

.row::after {
    content: "";
    clear: both;
    display: table;
}
.col-3 {width: 25%;}
.col-9 {width: 75%;}
[class*="col-"] {
    float: left;
    padding: 15px;
}
.video-box {
      /* margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #d4d4d4;*/
	    background: #fff;
    padding: 25px 15px;
    box-shadow: 0 3px 9px 0 rgba(0, 0, 0, 0.15);
}
#videos-box div:first-child {
    border-top: 0px;
}
.video-img img {
    max-width: 100%;
}

.a-play-video i {
    color: #DE2C28;position: absolute;
    top: 36%;
    left: 11%;
}
a.video-title {
    display: inline-block;
    font-size: 16px;
    text-decoration: none;
    margin: 10px 0px;
}

.custom-modal {
    width: 600px;
    max-width: 100%;
    margin: 0 auto;
    padding: 20px;
    background: #ddd;
    position: absolute;
    left: 0;
    right: 0;
	top: 50%;
	margin-top: -180px;
	    border-radius: 4px;
}
.fade-bg {
	position: fixed;
    z-index: 99999;
    left: 0;
    right: 0;
    top: 0;
    background: rgba(0,0,0,0.5);
    width: 100%;
    height: 100%;
}
.bg-hidden {
	overflow: hidden !important;
}

.img-pop {position: relative;
    cursor: pointer;
    display: block;}
.img-pop i {color: #DE2C28;position: absolute;
    top: 34%;
    left: 43%;}

.close-icon span strong {font-size: 14px;
    float: left;padding-bottom: 15px;}
.close-icon i {
    float: right;font-size: 20px;}
	

</style>




<div class="section def_section"> 

<!--<div class="container"> <div class=""><h3 style="text-align: left" class="vc_custom_heading clr-orng">BW Smart Cities Conclave &amp; Awards pictures</h3>	<div class="wpb_text_column wpb_content_element  ">		<div class="wpb_wrapper" id="ct_1e14z656xi8dm8vvt5kg">			<p>eGov bags the prestigious “Order of Merit” at Business World Smart Cities Conclave &amp; Awards, 2016. We were recognised for our implementation of “eGov Smart Platform” and “Puraseva” app across 110 ULBs in Andhra Pradesh.</p><p><a href="http://businessworld.in/article/BW-Businessworld-Presents-Smart-Cities-Conclave-And-Awards/22-12-2016-110193/" target="_blank" rel="noopener">[ Read More ]</a></p>		</div> 	</div> </div></div>-->

<div class="container">



<div class="tab-frame">
  <input type="radio" checked name="tab" id="tab1">
  <label for="tab1">PAPER / CASE STUDIES</label>
    
  <input type="radio" name="tab" id="tab2">
  <label for="tab2">VIDEOS</label>
  
 
 
	<div class="tab news-tab">
	<?php
	global $wpdb;
$get_casestudy = $wpdb->get_results( "SELECT * FROM wpho_posts WHERE post_type = 'case-study' and post_status = 'publish' order by id desc" );
if($get_casestudy)
{
	foreach($get_casestudy as $casestudy)
	{
		$casestudy_url = get_post_meta( $casestudy->ID, 'wpcf-case-studies-url', true );
	?>
  <div class="new-box">
	<a href="<?php echo $casestudy_url; ?>" target="_blank"><h3 style="font-size: 15px;text-align: left" class=""><?php echo ucwords($casestudy->post_title); ?></h3></a>
	<div class="wpb_text_column wpb_content_element  ">
		<div class="" >
			<p style="font-size: 14px; font-weight: 600;"><?php echo $casestudy->post_content; ?></p>

		</div>
	</div> 
	<div class=""><a class="read-news-btn" href="<?php echo $casestudy_url; ?>" target="_blank">Read More</a></div>
  </div>
	<?php } } else { echo "No case studies found..."; } 
	
	$get_video = $wpdb->get_results( "SELECT * FROM wpho_posts WHERE post_type = 'video' and post_status = 'publish' order by id desc" );
	
	?>


	</div>
	<div class="tab news-tab">
	
	
	<?php
	if($get_video)
	{
		foreach($get_video as $video)
		{
			$vdo = get_post_meta( $video->ID, '_fvp_video', true );
			
	?>
	<div class="row video-box">
	
				    <div class="col-3 video-img text-center">
					  <!--<a href="<?php echo $vdo['full']; ?>" class="a-play-video">
					    <img src="<?php echo $vdo['img_url']; ?>">
					    <i class="fa fa-youtube-play fa-3x play-ico"></i>
					  </a>-->
					  <div class="img-pop">
						<img src="<?php echo $vdo['img_url']; ?>">
						<i class="fa fa-youtube-play fa-3x play-ico"></i>
					  </div>
					</div><!-- video section ends-->
					
				    <div class="col-9 video-desc">
					  <a class="video-title img-pop"><strong><?php echo ucwords($video->post_title); ?></strong></a>
					  <p><?php echo $video->post_content; ?></p>
					</div>
					<!-- pop-up here-->
					<div class="fade-bg" style="display:none;">
						<div class="custom-modal">
						<div class="close-icon">
						<span><strong>Public Works Management: Update Measurement Book on Tablet</strong></span>
						<i class="fa fa-times-circle" aria-hidden="true"></i></div>
							<?php echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$vdo['full']);
							?>
						</div>
					</div>
					
	</div>
	
	<?php } } else { echo "No videos found..."; } ?>

	</div>
	
</div>


</div>

</div>

<script>
jQuery(".img-pop").click(function(){
	jQuery(".fade-bg").hide();
    jQuery(this).closest('div.video-box').find(".fade-bg").show();
    jQuery("body").addClass("bg-hidden");

});


jQuery(".close-icon").click(function(){
	jQuery(".fade-bg").hide();
	jQuery("body").removeClass(".bg-hidden");
});
</script>
<?php get_footer('onepage'); ?>
