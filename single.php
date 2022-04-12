<?php
    get_header();

    $blog_sidebar = newsprk_option('post_sidebar_layout',3);
    $override     = newsprk_meta_option(get_the_id(),'override_default_layout','no');
    // override sidebar layout
   
    if($override == 'yes'){  
        $blog_sidebar = newsprk_meta_option(get_the_id(),'post_sidebar_layout',1);
        
    }

    $column        = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12 mx-auto' : 'col-lg-8';

?>
    <div id="site-content" class="blog-single main-container" role="main">
        <!-- ================================= Section plans -->
        <section class="archives post post1 padding-top-30">
        
            <div class="container">
               <?php  get_template_part( 'template-parts/breadcrumb/breadcrumb');  ?>
               <div class="space-30"></div>
                <div class="row">
                    <?php
                        if($blog_sidebar == 2):
                            get_sidebar();
                        endif;
                    ?>
                    <div class="<?php echo esc_attr($column); ?>">
                        <?php get_template_part( 'template-parts/blog/single/layout' );?>
                    </div>
                    <?php
                        if($blog_sidebar == 3):
                            get_sidebar();
                        endif;
                    ?>
                </div>
            </div> <!-- container end -->
           
           
                <?php get_template_part( 'template-parts/blog/post-parts/part', 'related' ); ?>
                <?php get_template_part( 'template-parts/blog/post-parts/part', 'comment' ); ?>
         
        </section>
    </div>
<?php
get_footer();