<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mỹ phẩm Bootstrap 5.0 HTML Template</title>

        <?php wp_head(); ?>


    </head>

    <body>
        <header>
            <!-- Page Loader -->
            <div id="loader-wrapper">
                <div id="loader"></div>

                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>

            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <i class="fas fa-spa logo"></i>
                        <?php echo get_bloginfo('name'); ?>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                    'container' => 'div',
                                    'container_class' => 'collapse navbar-collapse',
                                    'container_id' => 'navbarSupportedContent',
                                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                    'add_li_class' => 'nav-item',
                                    'add_a_class' => 'nav-link nav-link-1 fw-bold',
                                )
                            );
                            ?>
                        </ul>
                    </div>


                </div>
            </nav>
        </header>