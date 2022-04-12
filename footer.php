<?php

    $style                         = '';
    $footer_builder_style_settings = newsprk_option( 'footer_builder_style_settings' );

    if ( isset( $footer_builder_style_settings['no'] ) ) {
        $footer_style = isset( $footer_builder_style_settings['no'] ) ? $footer_builder_style_settings['no'] : [];
        if ( isset( $footer_style['footer_style'] ) ) {
            $footer = $footer_style['footer_style'];
            if ( isset( $footer['style'] ) ) {
                $style = $footer['style'];
            }
        }
    }

?>

<?php get_template_part( 'template-parts/footer/footer', $style );?>
<?php wp_footer();?>
    </body>
</html>
