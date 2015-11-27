<?php global $yith_wcwl; ?>

<header id="masthead" class="site-header header-default" role="banner">
                            
    <div class="row">		
        
        <div class="large-12 columns">
            
            <div class="site-header-wrapper">
            
                <div class="site-branding">
                    
                    <?php
                    if ( (isset($mr_tailor_theme_options['site_logo']['url'])) && (trim($mr_tailor_theme_options['site_logo']['url']) != "" ) ) {
                        if (is_ssl()) {
                            $site_logo = str_replace("http://", "https://", $mr_tailor_theme_options['site_logo']['url']);		
                        } else {
                            $site_logo = $mr_tailor_theme_options['site_logo']['url'];
                        }
                    ?>
    
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo $site_logo; ?>" title="<?php bloginfo( 'description' ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
                    
                    <?php } else { ?>
                    
                        <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                    
                    <?php } ?>
                    
                </div><!-- .site-branding -->
                
                <?php
                if ( (isset($mr_tailor_theme_options['site_logo_retina']['url'])) && (trim($mr_tailor_theme_options['site_logo_retina']['url']) != "" ) ) {
				?>
				<script>
				//<![CDATA[
					
					// Set pixelRatio to 1 if the browser doesn't offer it up.
					var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
					
					logo_image = new Image();
					
					jQuery(window).load(function(){
						
						if (pixelRatio > 1) {
							jQuery('.site-logo').each(function() {
								
								var logo_image_width = jQuery(this).width();
								var logo_image_height = jQuery(this).height();
								
								jQuery(this).css("width", logo_image_width);
								jQuery(this).css("height", logo_image_height);

								jQuery(this).attr('src', '<?php echo $mr_tailor_theme_options['site_logo_retina']['url'] ?>');
							});
						};
					
					});
					
				//]]>
				</script>
                <?php } ?>
                
                <div id="site-menu">
                    
                    <nav id="site-navigation" class="main-navigation" role="navigation">                    
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'  => 'main-navigation',
                                'fallback_cb'     => false,
                                'container'       => false,
                                'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                            ));
                        ?>           
                    </nav><!-- #site-navigation -->                  
                    
                    <div class="site-tools">
                        <ul>
                            
                            <li class="mobile-menu-button"><a><span class="mobile-menu-text"><?php _e( 'MENU', 'mr_tailor' )?></span><i class="fa fa-bars"></i></a></li>
                            
                            <?php if (class_exists('YITH_WCWL')) : ?>
                            <?php if ( (isset($mr_tailor_theme_options['main_header_wishlist'])) && (trim($mr_tailor_theme_options['main_header_wishlist']) == "1" ) ) : ?>
                            <li class="wishlist-button"><a href="<?php echo esc_url($yith_wcwl->get_wishlist_url()); ?>"><i class="getbowtied-icon-heart"></i><span class="wishlist_items_number"><?php echo yith_wcwl_count_products(); ?></span></a></li>							
							<?php endif; ?>
                            <?php endif; ?>
                            
                            <?php if (class_exists('WooCommerce')) : ?>
                            <?php if ( (isset($mr_tailor_theme_options['main_header_shopping_bag'])) && (trim($mr_tailor_theme_options['main_header_shopping_bag']) == "1" ) ) : ?>
                            <?php if ( (isset($mr_tailor_theme_options['catalog_mode'])) && ($mr_tailor_theme_options['catalog_mode'] == 1) ) : ?>
                            <?php else : ?>
                            <li class="shopping-bag-button" class="right-off-canvas-toggle"><a><i class="getbowtied-icon-shop"></i><span class="shopping_bag_items_number"><?php echo $woocommerce->cart->cart_contents_count; ?></span></a></li>
							<?php endif; ?>
                            <?php endif; ?>
                            <?php endif; ?>

                            <?php if ( (isset($mr_tailor_theme_options['main_header_search_bar'])) && (trim($mr_tailor_theme_options['main_header_search_bar']) == "1" ) ) : ?>
                            <li class="search-button"><a><i class="getbowtied-icon-search"></i></a></li>
                            <?php endif; ?>
                            
                        </ul>	
                    </div>
                                        
                    <div class="site-search">
						<?php
                        if (class_exists('WooCommerce')) {
                            the_widget( 'WC_Widget_Product_Search', 'title=' );
                        } else {
                            the_widget( 'WP_Widget_Search', 'title=' );
                        }
                        ?>               
                    </div><!-- .site-search -->
                
                </div><!-- #site-menu -->
                
                <div class="clearfix"></div>
            
            </div><!-- .site-header-wrapper -->
                           
        </div><!-- .columns -->
                    
    </div><!-- .row -->

</header><!-- #masthead -->