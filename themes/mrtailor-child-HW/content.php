<?php
	global $mr_tailor_theme_options;

    $blog_with_sidebar = "";
    if ( (isset($mr_tailor_theme_options['sidebar_blog_listing'])) && ($mr_tailor_theme_options['sidebar_blog_listing'] == "1" ) ) $blog_with_sidebar = "yes";
    if (isset($_GET["blog_with_sidebar"])) $blog_with_sidebar = $_GET["blog_with_sidebar"];    
?>
<?php if(!isset($count)) $count = 0; else $count++; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
    <div class="row content-container">
        <div class="large-12 columns">
            
            <header class="entry-header">
            
                <div class="row">
                    <?php if ( $blog_with_sidebar == "yes" ) : ?>
                    <div class="large-12 columns">
                    <?php else : ?>
                    <div class="large-8 large-centered columns without-sidebar">
                    <?php endif; ?>
                        <?php if ( is_single() ) : ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php else : ?>
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h1>
                        <?php endif; // is_single() ?>
                        
                        <div class="post_header_date"><?php mr_tailor_post_header_entry_date(); ?></div>
                    </div>
                </div>
                
<!--                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>-->
        
            </header><!-- .entry-header -->
            
        </div><!-- .columns -->
    </div><!-- .row -->

    <div class="row content-container">
        <?php if ( $blog_with_sidebar == "yes" ) : ?>
            <div class="large-12 columns">
        <?php else : ?>
            <div class="large-12 large-centered columns without-sidebar">
        <?php endif; ?>
            
            <div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'mr_tailor' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mr_tailor' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- .entry-content -->
        
                               
        </div><!-- .columns -->
    </div><!-- .row -->

    <div class="row content-footer">

        <?php if ( $blog_with_sidebar == "yes" ) : ?>
            <div class="large-12 columns">
        <?php else : ?>
            <div class="large-8 large-centered columns without-sidebar">
        <?php endif; ?>

            <?php if ( is_single() ) : ?>
            
                <?php if ( (isset($mr_tailor_theme_options['sharing_options_blog'])) && ($mr_tailor_theme_options['sharing_options_blog'] == "1" ) ) : ?>
                    <div class="box-share-container post-share-container">
                        <a class="trigger-share-list" href="#"><i class="fa fa-share-alt"></i><?php _e( 'Share this post', 'mr_tailor' )?></a>
                        <div class="box-share-list">
                        
                            <?php
                                //Get the Thumbnail URL
                                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), false, '' );
                            ?>
                            
                            <div class="box-share-list-inner">
                                <a href="//www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="box-share-link" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                <a href="//twitter.com/share?url=<?php the_permalink(); ?>" class="box-share-link" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                <a href="//plus.google.com/share?url=<?php the_permalink(); ?>" class="box-share-link" target="_blank"><i class="fa fa-google-plus"></i><span>Google</span></a>
                                <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo esc_url($src[0]) ?>&amp;description=<?php echo urlencode(get_the_title()); ?>" class="box-share-link" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                            </div><!--.box-share-list-inner-->
                            
                        </div><!--.box-share-list-->
                    </div>
                <?php endif; ?>
                
                <footer class="entry-meta">
                    
                    <?php mr_tailor_entry_meta(); echo "."; ?>
                    
                    <?php //edit_post_link( __( 'Edit', 'mr_tailor' ), '<div class="edit-link"><i class="fa fa-pencil-square-o"></i> ', '</div>' ); ?>
                    
                </footer><!-- .entry-meta -->
            
            <?php endif; ?>

        </div><!-- .columns -->

    </div><!-- .row -->

</article><!-- #post -->
<?php if($count == 1): ?>
<script type="text/javascript" src="http://script.tailsweep.com/js/2/24/2487711_2.js"></script>
<?php else: ?>
<script type="text/javascript" src="http://script.tailsweep.com/js/2/24/2487711_4.js"></script>
<?php endif; ?>
