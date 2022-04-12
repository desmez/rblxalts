<?php

    /**
     * The header for our theme
     *
     * This is the template that displays all of the <head> section and everything up until <div id="content">
     *
     *
     * @package NewsPrk
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>

	<meta charset="<?php bloginfo( 'charset' );?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>

	<?php
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        }
        get_template_part( 'template-parts/preloader' );
    ?>
     <a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'newsprk' );?></a>
		<?php

            $header_style = 'style6';

            $header_builder_style_settings = newsprk_option( 'header_builder_style_settings' );
            if ( isset( $header_builder_style_settings['no'] ) ) {

                $header_style = isset( $header_builder_style_settings['no']['header_layout_style'] ) ? $header_builder_style_settings['no']['header_layout_style'] : 'style5';

            }

            $page_override_header     = newsprk_meta_option( get_the_ID(), 'page_header_override' );
            $page_header_layout_style = newsprk_meta_option( get_the_ID(), 'page_header_layout_style', 'style5' );

            if ( $page_override_header == 'yes' ):
                $header_style = $page_header_layout_style;
            endif;

            get_template_part( 'template-parts/headers/header', $header_style );
           
        ?>

