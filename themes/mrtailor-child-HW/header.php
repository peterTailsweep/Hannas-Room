<?php	
	global $mr_tailor_theme_options;
	global $woocommerce;
    global $wp_version;
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- ******************************************************************** -->
    <!-- * Title ************************************************************ -->
    <!-- ******************************************************************** -->
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php    
    $parent_theme = wp_get_theme('mrtailor');
    $child_theme = wp_get_theme();
    $child_theme_in_use = false;
    if ($parent_theme->name != $child_theme->name) { 
        $child_theme_in_use = TRUE;
    }    
    $vc_version = "Not activated";
    if (defined('WPB_VC_VERSION')) {
        $vc_version = "v".WPB_VC_VERSION;
    }    
    ?>
    
    <!--    ******************************************************************** -->
    <!--    ******************************************************************** -->
    <!--
            * WordPress: v<?php echo $wp_version . "\n"; ?>
            <?php if (class_exists('WooCommerce')) : ?>* WooCommerce: v<?php echo $woocommerce->version . "\n"; ?><?php else : ?>* WooCommerce: Not Installed <?php echo "\n"; ?><?php endif; ?>
            * Visual Composer: <?php echo $vc_version; ?><?php echo "\n"; ?>
            * Theme: <?php echo $parent_theme->name; ?> v<?php echo $parent_theme->version; ?> by <?php echo $parent_theme->get('Author') . "\n"; ?>
            * Child Theme: <?php if ($child_theme_in_use == TRUE) { ?>Activated<?php } else { ?>Not activated<?php } ?><?php echo "\n"; ?>
    -->
    <!--    ******************************************************************** -->
    <!--    ******************************************************************** -->
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <!-- ******************************************************************** -->
    <!-- * Custom Favicon *************************************************** -->
    <!-- ******************************************************************** -->
    
    <?php
	if ( (isset($mr_tailor_theme_options['favicon']['url'])) && (trim($mr_tailor_theme_options['favicon']['url']) != "" ) ) {
        
        if (is_ssl()) {
            $favicon_image_img = str_replace("http://", "https://", $mr_tailor_theme_options['favicon']['url']);		
        } else {
            $favicon_image_img = $mr_tailor_theme_options['favicon']['url'];
        }
	?>
    
    <!-- ******************************************************************** -->
    <!-- * Favicon ********************************************************** -->
    <!-- ******************************************************************** -->
    
    <link rel="shortcut icon" href="<?php echo $favicon_image_img; ?>" type="image/x-icon" />
        
    <?php } ?>
    
    <!-- ******************************************************************** -->
    <!-- * Custom Header JavaScript Code ************************************ -->
    <!-- ******************************************************************** -->
    
    <?php if ( (isset($mr_tailor_theme_options['header_js'])) && ($mr_tailor_theme_options['header_js'] != "") ) : ?>
		<script type="text/javascript">
			<?php echo $mr_tailor_theme_options['header_js']; ?>
		</script>
    <?php endif; ?>
    
    <!-- ******************************************************************** -->
    <!-- * WordPress wp_head() ********************************************** -->
    <!-- ******************************************************************** -->
    
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="st-container" class="st-container">

        <div class="st-pusher">
            
            <div class="st-pusher-after"></div>   
                
                <div class="st-content">
                
					<?php if (file_exists(dirname( __FILE__ ) . '/_theme-explorer/header.php')) { include_once('_theme-explorer/header.php'); } ?>
                    
                    <div id="page">
                    
                        <?php do_action( 'before' ); ?>
                        
                        <div class="top-headers-wrapper">
						
							<?php if ( (!isset($mr_tailor_theme_options['top_bar_switch'])) || ($mr_tailor_theme_options['top_bar_switch'] == "1" ) ) : ?>                        
                                <?php include_once('header-topbar.php'); ?>						
                            <?php endif; ?>                      
                            
                            <?php
                            
							if ( (isset($mr_tailor_theme_options['header_layout'])) && ($mr_tailor_theme_options['header_layout'] == "0" ) ) {
								include_once('header-default.php');
							} else {
								include_once('header-centered.php');
							}
							
							?>
                        
                        </div>
                        
                        <?php if (function_exists('wc_print_notices')) : ?>
                        <?php wc_print_notices(); ?>
                        <?php endif; ?>
