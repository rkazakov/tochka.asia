<?php
$options = get_option('ribbon');	

/*------------[ Meta ]-------------*/
if ( ! function_exists( 'mts_meta' ) ) {
	function mts_meta() { 
	global $options
?>
<?php if ($options['mts_favicon'] != '') { ?>
<link rel="icon" href="<?php echo $options['mts_favicon']; ?>" type="image/x-icon" />
<?php } ?>
<!--iOS/android/handheld specific -->	
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<?php }
}

/*------------[ Head ]-------------*/
if ( ! function_exists( 'mts_head' ) ) {
	function mts_head() { 
	global $options
?>
<style type="text/css">
<?php if($options['mts_bg_color'] != '') { ?>
body {background-color:<?php echo $options['mts_bg_color']; ?>;}
<?php } ?>
<?php if ($options['mts_bg_pattern_upload'] != '') { ?>
body {background-image: url(<?php echo $options['mts_bg_pattern_upload']; ?>);}
<?php } ?>
<?php if ($options['mts_color_scheme'] != '') { ?>
.nav-previous a:hover,.nav-next a:hover,#commentform input#submit,#searchform input[type="submit"],.home_menu_item,.secondary-navigation a:hover, .post-date-ribbon,.currenttext, .pagination a:hover,.readMore a,.mts-subscribe input[type="submit"] {background-color:<?php echo $options['mts_color_scheme']; ?>; }
#tabber .inside li .meta b,footer .widget li a:hover,.fn a,.reply a,#tabber .inside li div.info .entry-title a:hover, #navigation ul ul a:hover,.single_post a, a:hover, .textwidget a, #commentform a, #tabber .inside li a, .copyrights a:hover, a, .sidebar.c-4-12 a:hover, .top a:hover {color:<?php echo $options['mts_color_scheme']; ?>; }
.corner {border-color: transparent transparent <?php echo $options['mts_color_scheme']; ?> transparent;}
<?php } ?>
<?php if ($options['mts_color_scheme_2'] != '') { ?>
.secondary-navigation, footer, .sidebar #searchform input[type="submit"]:hover, .readMore a:hover, #commentform input#submit:hover { background-color: <?php echo $options['mts_color_scheme_2']; ?>; }
<?php } ?>
<?php echo $options['mts_custom_css']; ?>
</style>
<?php echo $options['mts_header_code']; ?>
<?php }
}
/*------------[ footer ]-------------*/
if ( ! function_exists( 'mts_footer' ) ) {
	function mts_footer() { 
	global $options
?>
<!--start footer code-->
<?php if ($options['mts_analytics_code'] != '') { ?>
<?php echo $options['mts_analytics_code']; ?>
<?php } ?>
<!--end footer code-->
<?php }
}

/*------------[ Copyrights ]-------------*/
if ( ! function_exists( 'mts_copyrights_credit' ) ) {
	function mts_copyrights_credit() { 
	global $options
?>
<!--start copyrights-->
<div class="row" id="copyright-note">
<span><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> Все права защищены &copy; 2012-2013 </span>
<div class="top"><?php echo $options['mts_copyrights']; ?> <a href="#top" class="toplink"><?php _e('Back to Top','mythemeshop'); ?> &uarr;</a></div>
</div>
<!--end copyrights-->
<?php }
}

?>