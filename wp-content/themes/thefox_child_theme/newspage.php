	

<?php

/*

Template Name: News page

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
div.tab-frame input:checked + label{ z-index: 9999;position: relative;background: #fff;color: #f68b1f;cursor: default;border-top: 2px solid #f68b1f;border-bottom: 1px solid #ffffff;top: 1px;}
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

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;font-size: 14px;
}

td {
    border-top: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
th {
    border-bottom: 1px solid #dddddd;
    text-align: left;
    padding: 8px; font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}



</style>




<div class="section def_section"> 

<!--<div class="container"> <div class=""><h3 style="text-align: left" class="vc_custom_heading clr-orng">BW Smart Cities Conclave &amp; Awards pictures</h3>	<div class="wpb_text_column wpb_content_element  ">		<div class="wpb_wrapper" id="ct_1e14z656xi8dm8vvt5kg">			<p>eGov bags the prestigious “Order of Merit” at Business World Smart Cities Conclave &amp; Awards, 2016. We were recognised for our implementation of “eGov Smart Platform” and “Puraseva” app across 110 ULBs in Andhra Pradesh.</p><p><a href="http://businessworld.in/article/BW-Businessworld-Presents-Smart-Cities-Conclave-And-Awards/22-12-2016-110193/" target="_blank" rel="noopener">[ Read More ]</a></p>		</div> 	</div> </div></div>-->

<div class="container">



<div class="tab-frame">
  <input type="radio" checked name="tab" id="tab1">
  <label for="tab1">AWARDS</label>
    
  <input type="radio" name="tab" id="tab2">
  <label for="tab2">PRESS</label>
  
	<div class="tab news-tab">
	
<?php
global $wpdb;
$get_news = $wpdb->get_results( "SELECT * FROM wpho_posts WHERE post_type = 'cnews' and post_status = 'publish' order by id desc" );
if($get_news) {
foreach($get_news as $news)
{
	$news_url = get_post_meta( $news->ID, 'wpcf-enter-url', true );
?>
<div class="new-box">
	<a href="<?php echo $news_url; ?>" target="_blank"><h3 style="font-size: 15px;text-align: left" class="vc_custom_heading"><?php echo ucwords($news->post_title); ?></h3></a>
	<div class="wpb_text_column wpb_content_element  ">
		<div class="" >
			<p style="font-size: 14px; font-weight: 600;"><?php echo $news->post_content; ?></p>

		</div>
	</div> 
	<div class=""><a class="read-news-btn" href="<?php echo $news_url; ?>" target="_blank">Read More</a></div>
</div>
<?php	
} }else {
	echo "No award details found...";
}
?>	
	</div>
	<div class="tab">
	
		<table>
		<?php
	$get_press = $wpdb->get_results( "SELECT * FROM wpho_posts WHERE post_type = 'press' and post_status = 'publish' order by id desc" );
	if($get_press){
	?>
			<tr>
				<th>Date</th>
				<th>Details</th>
			</tr>
<?php 
foreach($get_press as $press)
{
	$press_date = get_post_meta( $press->ID, 'wpcf-press-date', true );
	$press_url = get_post_meta( $press->ID, 'wpcf-press-url', true );
?>
                            <tr>
								<td><?php echo date('d-M-Y',$press_date); ?></td>
								<td><a href="<?php echo $press_url; ?>" target="_blank"><?php echo $press->post_title; ?></a></td>
							</tr>
                            
<?php } } else
{
	echo "No press details found...";
}	?>              
							
			
		</table>

	</div>
	
</div>


</div>

</div>





<?php get_footer('onepage'); ?>
