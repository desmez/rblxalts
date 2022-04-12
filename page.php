<?php
/**
 * The template for displaying all pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newsprk
 */

    get_header();
    $blog_sidebar = newsprk_option('blog_sidebar',3);
    $column       = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-md-12 col-lg-8';

?>
    <div id="site-content" class="main-container" role="main">
        <div class="archives padding-top-30">
            <div class="container">
                <div class="row">
                    <?php
                        if($blog_sidebar == 2):
                            get_sidebar();
                        endif;
                    ?>
                    <div class="<?php echo esc_attr($column); ?>">
                        <?php
                             while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/blog/contents/content', 'page' );
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                   comments_template();
                                endif;
                             endwhile; // End of the loop.
                        ?>
                    </div><!-- #col -->
                    <?php
                        if($blog_sidebar == 3):
                            get_sidebar();
                        endif;
                    ?>
                </div><!-- #row -->
            </div><!-- #primary -->
        </div><!-- #main -->
    </div>
<?php
get_footer();