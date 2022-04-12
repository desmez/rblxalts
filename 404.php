<?php

    get_header();

?>

    <div id="site-content" class="blog main-container" role="main">
        <!--::::: INNER TABLE AREA START :::::::-->
        <div class="inner_table">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="space-50"></div>
                        <div class="area404 text-center">
                            <img src="<?php echo esc_url(NEWSPRK_IMG.'/bg/404.png'); ?>" alt="<?php echo esc_attr__( 'Page not found', 'newsprk') ?>">
                        </div>
                        <div class="space-30"></div>
                        <div class="back4040 text-center col-lg-6 m-auto">
                            <h3> <?php echo esc_html__( 'Page not found', 'newsprk') ?> </h3>
                            <div class="space-10"></div>
                            <p> <?php echo esc_html__('Sorry the page you were looking for cannot be found. Try searching for the best match or browse the links below:','newsprk'); ?> </p>
                            <div class="space-40"></div>
                            <div class="button_group">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cbtn2"> <?php echo esc_html__( 'GO TO HOME', 'newsprk') ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-50"></div>
        </div>
    </div>
    
<?php

    get_footer();