<?php

   $sidebar            = '';
   $sidebar_box_shadow = newsprk_option('sidebar_box_shadow','no');
   $override           = newsprk_meta_option( get_the_id(),'override_default_layout','no' );
   
   if($sidebar_box_shadow =='yes'){
      $sidebar = 'box_shadow_sidebar';
   }
   
   if(is_singular('post')){  

      if(newsprk_meta_option(get_the_id(),'sidebar_box_shadow','no') == 'yes' ){
         $sidebar = 'box_shadow_sidebar';  
      }else{
         $sidebar = '';  
      }
      
   }
   
?>

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
         <div class="col-lg-4">
            <aside id="sidebar" class="blog-sidebar sidebar <?php echo esc_attr($sidebar); ?>">
               <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </aside><!-- #secondary -->
         </div>
<?php endif; ?>
