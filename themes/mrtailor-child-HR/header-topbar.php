<div id="site-top-bar">

    <div class="row">

        <div class="large-2 columns">
            <div id="hannas-room-nw-mini"></div>
            <div class="site-top-message"><?php if ( isset($mr_tailor_theme_options['top_bar_text']) ) _e( $mr_tailor_theme_options['top_bar_text'], 'mr_tailor' ); ?></div>
        </div><!-- .large-2 .columns -->

        <div class="large-10 columns">
            <div class="site-social-icons-wrapper">
                <div class="site-social-icons">
                    <ul class="//animated //flipY">
                        <?php if ( (isset($mr_tailor_theme_options['facebook_link'])) && (trim($mr_tailor_theme_options['facebook_link']) != "" ) ) { ?><li class="site-social-icons-facebook"><a target="_blank" href="<?php echo $mr_tailor_theme_options['facebook_link']; ?>"><i class="fa fa-facebook"></i><span>Facebook</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['twitter_link'])) && (trim($mr_tailor_theme_options['twitter_link']) != "" ) ) { ?><li class="site-social-icons-twitter"><a target="_blank" href="<?php echo $mr_tailor_theme_options['twitter_link']; ?>"><i class="fa fa-twitter"></i><span>Twitter</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['pinterest_link'])) && (trim($mr_tailor_theme_options['pinterest_link']) != "" ) ) { ?><li class="site-social-icons-pinterest"><a target="_blank" href="<?php echo $mr_tailor_theme_options['pinterest_link']; ?>"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['linkedin_link'])) && (trim($mr_tailor_theme_options['linkedin_link']) != "" ) ) { ?><li class="site-social-icons-linkedin"><a target="_blank" href="<?php echo $mr_tailor_theme_options['linkedin_link']; ?>"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['googleplus_link'])) && (trim($mr_tailor_theme_options['googleplus_link']) != "" ) ) { ?><li class="site-social-icons-googleplus"><a target="_blank" href="<?php echo $mr_tailor_theme_options['googleplus_link']; ?>"><i class="fa fa-google-plus"></i><span>Google+</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['rss_link'])) && (trim($mr_tailor_theme_options['rss_link']) != "" ) ) { ?><li class="site-social-icons-rss"><a target="_blank" href="<?php echo $mr_tailor_theme_options['rss_link']; ?>"><i class="fa fa-rss"></i><span>RSS</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['tumblr_link'])) && (trim($mr_tailor_theme_options['tumblr_link']) != "" ) ) { ?><li class="site-social-icons-tumblr"><a target="_blank" href="<?php echo $mr_tailor_theme_options['tumblr_link']; ?>"><i class="fa fa-tumblr"></i><span>Tumblr</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['instagram_link'])) && (trim($mr_tailor_theme_options['instagram_link']) != "" ) ) { ?><li class="site-social-icons-instagram"><a target="_blank" href="<?php echo $mr_tailor_theme_options['instagram_link']; ?>"><i class="fa fa-instagram"></i><span>Instagram</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['youtube_link'])) && (trim($mr_tailor_theme_options['youtube_link']) != "" ) ) { ?><li class="site-social-icons-youtube"><a target="_blank" href="<?php echo $mr_tailor_theme_options['youtube_link']; ?>"><i class="fa fa-youtube-play"></i><span>Youtube</span></a></li><?php } ?>
                        <?php if ( (isset($mr_tailor_theme_options['vimeo_link'])) && (trim($mr_tailor_theme_options['vimeo_link']) != "" ) ) { ?><li class="site-social-icons-vimeo"><a target="_blank" href="<?php echo $mr_tailor_theme_options['vimeo_link']; ?>"><i class="fa fa-vimeo-square"></i><span>Vimeo</span></a></li><?php } ?>
                    </ul>
                </div>
            </div>

            <nav id="site-navigation-top-bar" class="main-navigation" role="navigation">
				<?php
                    wp_nav_menu(array(
                        'theme_location'  => 'top-bar-navigation',
                        'fallback_cb'     => false,
                        'container'       => false,
                        'items_wrap'      => '<ul id="%1$s">%3$s</ul>',
                    ));
                ?>

                <?php if ( is_user_logged_in() ) { ?>
                    <ul><li><a href="<?php echo get_site_url(); ?>/?<?php echo get_option('woocommerce_logout_endpoint'); ?>=true" class="logout_link"><?php _e('Logout', 'mr_tailor'); ?></a></li></ul>
                <?php } ?>
            </nav><!-- #site-navigation -->

        </div><!-- .large-8 .columns -->

    </div><!-- .row -->

</div><!-- #site-top-bar -->
