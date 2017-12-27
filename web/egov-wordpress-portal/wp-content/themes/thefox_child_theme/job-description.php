<?php

/*

Template Name: job-description page

*/



/// Set the slider
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
.def_section, blockquote {
    background: #f2f2f2 !important;
}
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
.job-card {background: #fff;
    margin: 20px 0;}
button.accordion {
    background: transparent;
    color: #423FAE; font-weight:bold;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;padding: 0 !important;
}



div.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
}
.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}
.apply-content-margin a:hover {
    color: #fff !important;
}
.apply-content-margin a:hover {
    color: #f68b1f !important;
}
span.job-location {
    color: #908E8E;
    padding-bottom: 5px;
	font-size:14px;
}
.job-card ul {margin-left: 40px; !important;}
.job-card ul li {list-style-type: disc !important;    margin-bottom: 5px;
    line-height: 26px;}
.panel {padding: 15px 18px !important;display: block;
    font-size: 14px;}

</style>




<div class="section def_section"> 


<?php
global $wpdb;
 if(isset($_GET['id']) && $_GET['id'] != '')
{
$id = 	$_GET['id'];
	$getJob =  $wpdb->get_row("select * from `wpho_posts` where `ID` = '".$id."'"); 
	if(!$getJob)
	{
		header("Location:join-us");
		die;
	}
	
}
else
{
	header("Location:join-us");
	die;
}
?>
<div class="container">

<div class="row">
	<div class="col-12 job-card">
                             
						   <div class="col-12">
                                <h4><?php echo $getJob->post_title; ?></h4>
                                 
			<?php
$job_loc = get_post_meta( $getJob->ID, 'wpcf-location', true );
			if($job_loc)
				{ ?>
            <span class="job-location"><i class="fa fa-map-marker"></i> <?php echo $job_loc; ?></span>
			<?php } ?>								 
                            </div>
                        
							<div class="col-12">
                              
                                    
								   <button class="accordion">Company Profile <span class="caret"></span></button>
<div class="panel">
   <?php
							  echo $comp_profile = nl2br(get_post_meta( $getJob->ID, 'wpcf-company-profile', true ));
	?>
</div>
                                   
                         </div>      
                                   
                                                                      
							<div class="col-12" style="font-size: 14px;"> 
							<?php
							$pos_array = array();
							$pos_array[0] = "Not Set";
							$pos_array[1] = "Full Time";
							$pos_array[2] = "Part Time";
							
							$pos_type = get_post_meta( $getJob->ID, 'wpcf-position-type', true );
							?>
																	  
									<p><strong>Position Type: <?php echo $pos_array[$pos_type]; ?></strong></p>
                                      <?php
							  echo $desc = nl2br(get_post_meta( $getJob->ID, 'wpcf-job-description', true ));
	?>
                                    </p>
                                     <?php
							  echo $skills = get_post_meta( $getJob->ID, 'wpcf-required-skills', true );
							  $apply_to = get_post_meta( $getJob->ID, 'wpcf-apply', true );
	?>
                                    <p>&nbsp;</p>
                                    
                                    
                                   <p class="apply-content-margin">
                                    <a href="mailto:<?php echo $apply_to; ?>?subject=Applying for the position of Program Manager&amp;body=(please brief your self and attach your resume)" class="btn btn-primary">Apply</a>
                                    
                                    &nbsp; (or) &nbsp;<strong> Please send your cv to <a href="mailto:<?php echo $apply_to; ?>?subject=Applying for the position of Program Manager&amp;body=(please brief your self and attach your resume)">careers@egovernments.org</a></strong>
                                       
                                   </p>
                               </div>
                               
                               
                           </div>
                    
                                            
                    </div>
	
</div> 
 

</div>

</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>


<?php get_footer('onepage'); ?>
