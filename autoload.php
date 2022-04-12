<?php 

spl_autoload_register( 'newsprk_core_components_autoload' );

function newsprk_core_components_autoload( $class ) {
    
	switch ( $class ) {
		case 'Newsprk\newsprk_init':
           	require_once NEWSPRK_THEME_DIR . '/app/init.php';
            break;
        case 'Newsprk\core\customhook\Options' :
           	require_once NEWSPRK_THEME_DIR . '/app/core/customhook/options.php';
            break;
		case 'Newsprk\core\Tags' :
            require_once NEWSPRK_THEME_DIR . '/app/core/tags.php';
			break;
		case 'Newsprk\core\customhook\Blog' :
            require_once NEWSPRK_THEME_DIR . '/app/core/customhook/blog.php';
			break;
		case 'Newsprk\core\customhook\Demo' :
            require_once NEWSPRK_THEME_DIR . '/app/core/customhook/demo.php';
			break;
        case 'Newsprk\core\customhook\RequiredPlugins' :
            require_once NEWSPRK_THEME_DIR . '/app/core/customhook/requiredplugins.php';
			break;
        case 'Newsprk\core\Sidebar' :
            require_once NEWSPRK_THEME_DIR . '/app/core/sidebar.php';
			break;
        case 'Newsprk\core\Footer' :
            require_once NEWSPRK_THEME_DIR . '/app/core/footer.php';
			break;
        case 'Newsprk\setup\Setup' :
            require_once NEWSPRK_THEME_DIR . '/app/setup/setup.php';
			break;
        case 'Newsprk\setup\Menus' :
            require_once NEWSPRK_THEME_DIR . '/app/setup/menus.php';
			break;
        case 'Newsprk\setup\Enqueue' :
            require_once NEWSPRK_THEME_DIR . '/app/setup/enqueue.php';
			break;
        case 'Newsprk\setup\InlineStyle' :
            require_once NEWSPRK_THEME_DIR . '/app/setup/inlinestyle.php';
			break;
        case 'Newsprk\custom\Extras' :
            require_once NEWSPRK_THEME_DIR . '/app/custom/extras.php';
			break;
        case 'Newsprk\required_plugins\ThemeJetpack' :
            require_once NEWSPRK_THEME_DIR . '/app/required_plugins/themejetpack.php';
			break;
        case 'Newsprk\core\customhook\Newsprk_Unyson_Google_Fonts' :
            require_once NEWSPRK_THEME_DIR . '/app/core/customhook/newsprk_unyson_google_fonts.php';
			break;
        case 'Newsprk\required_plugins\Option_Include' :
             require_once NEWSPRK_THEME_DIR . '/app/required_plugins/option_include.php';
			break;
        case 'Newsprk\core\Tranding_Post' :
             require_once NEWSPRK_THEME_DIR . '/app/core/tranding_post.php';
			break;
        case 'Newsprk\Core\Steller_WalkerNav' :
             require_once NEWSPRK_THEME_DIR . '/app/core/steller_walkernav.php';
			break;
            
        case 'Newsprk\Core\WalkerNav' :
             require_once NEWSPRK_THEME_DIR . '/app/core/walkernav.php';
			break;
	}
}