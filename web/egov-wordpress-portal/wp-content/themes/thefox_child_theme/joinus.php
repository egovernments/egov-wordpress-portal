<?php

/*

Template Name: join-us page

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

.row::after {
    content: "";
    clear: both;
    display: table;
}
.col-1 {width: 8.33%;}
.col-6 {width: 50%;}
.col-10 {width: 83.33%;}
.col-12 {width: 100%;}
[class*="col-"] {
    float: left;
    padding: 15px;
}


.container {max-width: 1170px !important; margin: 0 auto;}
.Philosophy-content {
    padding: 60px 15px 0;
}
.Philosophy-content h2{font-size: 34px;
    color: #000000;
    text-align: center;padding-bottom: 35px;}
.community-btn a {
    height: 50px;
    display: inline-block;
    vertical-align: middle;
    background: #0076bd;
    font-size: 16px;
    text-decoration: none;
}
.community-btn i {
    padding: 10px !important;
    width: 50px;
    height: 50px;
    background: white;
    font-size: 1.8em;
    line-height: 29px;
    border: 1px solid #0076bd;
    color: #0076bd;
    display: inline-block;
    font-size: 20px;
    border-right: 1px solid #0076bd !important;
}
.community-btn span {
    vertical-align: top;
    line-height: 20px;
    font-weight: 400;
    color: white;
    border-left: 1px solid #0076bd !important;
}
.bt_icon_border.bt_icon_left.medium_rd_bt span {
    margin: 0;
    padding: 16px 18px 15px;
    float: right;
    display: block;
    
    max-height: 50px;
}
.bt_icon_border.bt_icon_left.medium_rd_bt i {
    margin: 0;
    
    float: left;
   
    max-height: 50px;
}
.medium_rd_bt {
   
    text-align: center;
    min-width: 170px;
    max-width: 100%;
    
    
    max-height: 50px;
}

.jobs-container {width: 84%;
    margin: 0 auto;}
.job-card{
    background: #fff;
    color: #333;
    text-align: left;
    border-bottom: 1px solid #d4d4d4;
    border-right: 1px solid #d4d4d4;
    border-left: 1px solid #d4d4d4;
	
    overflow: auto;   padding: 15px;
}
.job-card:first-child {
    border-top: 1px solid #d4d4d4;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
a.job-title {
    display: inline-block;
    text-decoration: none;
    font-size: 18px;
    font-weight: 600;
    padding-bottom: 5px;
}
span.job-location {
    color: #908E8E;
    padding-bottom: 5px;
}
.job-card span {
    display: block;font-size: 14px;
}

</style>




<div class="section def_section"> 

<div class="container">

<div class="row Philosophy-content">
	<div class="col-12">
	<p>At eGovernments Foundation, we are passionate about using technology to solve hard to crack governance challenges. With this mission, Nandan Nilekani ( ex - CEO Infosys) and Srikanth Nadamuni ( CEO – Khosla Labs ) started eGovernment Foundation in 2003 , to transform urban governance, improve citizens’ interaction and enable smart cities.</p>

	<p>We have built state of the art OpenSource, interoperable and scalable technology solutions for citizens and urban governance bodies to manage, monitor and interact in a transparent manner. Our solutions include an ERP suite, Data Analytics, Visualization and Mobile apps. Together these enable efficient and effective operations, better decision making and contact-less , paperless urban service delivery. We have implemented our solutions in 325+ urban governing bodies, touched 1.2 million citizens, helped solve 2 million citizen complaints, issued 4.7 million certificates and saved 2.5 thousand person years in efficiency. We provide a merit oriented, innovative, vibrant and inclusive work environment. We believe our work is a game changer in making collaborative e-governance and smarter cities a reality.</p>
	</div>
</div> 


<div class="row" style="padding-bottom: 0; padding-left:15px; padding-right:15px;">
	<div class="col-12">
		<h3 style="float: left;">Open positions</h3>
		<div class="community-btn" style="float: right;">
			<a class="rd_normal_bt medium_rd_bt bt_icon_left bt_icon_border  " href="http://vedmal.com/newdemocopy/reach-us/" target="yes"><i class="fa-user"></i><span>Register as Volunteer</span></a>
		</div>
	</div> 
	
</div> 

<div class="row" style="padding-left:15px; padding-right:15px;">
	<div class="col-12 ">
	<div class="col-12 job-card">
		<?php
global $wpdb;
$get_jobs = $wpdb->get_results( "SELECT * FROM wpho_posts WHERE post_type = 'jobs' and post_status = 'publish' order by id desc" );
if($get_jobs)
{
	foreach($get_jobs as $jobs)
	{
		$job_loc = get_post_meta( $jobs->ID, 'wpcf-location', true );
?>
        <div>
            <a href="job-description/?id=<?php echo $jobs->ID; ?>" class="job-title"><?php echo ucwords($jobs->post_title); ?></a>
			<?php if($job_loc)
				{ ?>
            <span class="job-location"><i class="fa fa-map-marker"></i> <?php echo $job_loc; ?></span>
			<?php } ?>
        </div>
		<hr>
	<?php } }else { echo "Jobs not found..."; } ?>
	</div>
    </div>
	
</div> 

</div>
</div>





<?php get_footer('onepage'); ?>
