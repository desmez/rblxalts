<?php

   get_header();

   $blog_sidebar = newsprk_option('blog_sidebar',3);
   $column       = ( $blog_sidebar == 1 || !is_active_sidebar('sidebar-1') ) ? 'col-lg-12' : 'col-md-12 col-lg-8';
   $header_style = 'default';
				
   $header_builder_style_settings = newsprk_option('header_builder_style_settings');
   if(isset($header_builder_style_settings['no'])){

        $header_style = isset($header_builder_style_settings['no']['header_layout_style']) ? $header_builder_style_settings['no']['header_layout_style'] : 'default';
                                   
   }
    
?>
    <div class="author__information__content <?php echo esc_attr($header_style == 'style3'?'style3':''); ?>">
        <div class="container">
            <?php get_template_part( 'template-parts/blog/post-parts/part','author-page');  ?>
        </div>
    </div>
    <div id="site-content" class="blog main-container" role="main">
     
    <div class="shadow5">
        <!--::::: ARCHIVE AREA START :::::::-->
        <div class="archives padding-top-30">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumb/breadcrumb');  ?>
                <div class="row">
                    <?php
						if( $blog_sidebar == 2 ):
							get_sidebar();
						endif;
					?>
                    <div class="<?php echo esc_attr($column); ?>">
                        <?php get_template_part( 'template-parts/blog/archive/content','layout');  ?>
                        <?php get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
                    </div>
                    <?php
						if( $blog_sidebar == 3 ):
							get_sidebar();
						endif;
					?>
                </div>
            </div>
        </div>
        <!--::::: ARCHIVE AREA END :::::::-->
    </div>
</div>
<?php

    get_footer();