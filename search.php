<?php
    get_header();
    $blog_sidebar  = newsprk_option('blog_sidebar',3);
    $column        = ($blog_sidebar == 1 || !is_active_sidebar('sidebar-1')) ? 'col-lg-12' : 'col-md-6 col-lg-8';
?>
   <div id="site-content" class="blog main-container" role="main">
		<!--::::: ARCHIVE AREA START :::::::-->
		<div class="archives padding-top-30">
			<div class="container">
				<div class="row">
					<?php
						if($blog_sidebar == 2):
							get_sidebar();
						endif;
					?>
					<div class="<?php echo esc_attr($column); ?>">
					        
				        <?php  get_template_part( 'template-parts/blog/archive/content','header-search');  ?>
						<?php  get_template_part( 'template-parts/blog/archive/content','layout');  ?>
					    <?php  get_template_part( 'template-parts/blog/paginations/pagination', 'style1' ); ?>
						
					</div>
					<?php
						if($blog_sidebar == 3):
							get_sidebar();
						endif;
                    ?>
				</div>
			</div>
		</div>
		<!--::::: ARCHIVE AREA END :::::::-->
   </div>
<?php
get_footer();
