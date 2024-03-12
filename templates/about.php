<?php
/**
 * Template Name: About Page
 */
?>
<?php get_header(); ?>

<body>


    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
        data-image-src="<?php echo get_template_directory_uri() . '/assets/images/hero.jpg'; ?>"></div>

    <div class="container-fluid tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Về chúng tôi
            </h2>
        </div>
        <div class="row tm-mb-74 tm-row-1640">
            <div class="col-lg-5 col-md-6 col-12 mb-3">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/about.jpg'; ?>" alt="Image"
                    class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="tm-about-img-text">
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, blanditiis quia?
                        Quisquam dolores, ipsum quidem fugiat recusandae in quos repellendus fugit, unde amet nam
                        exercitationem cum, earum voluptates impedit ad?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, blanditiis quia?
                        Quisquam dolores, ipsum quidem fugiat recusandae in quos repellendus fugit, unde amet nam
                        exercitationem cum, earum voluptates impedit ad?

                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, blanditiis quia?
                        Quisquam dolores, ipsum quidem fugiat recusandae in quos repellendus fugit, unde amet nam
                        exercitationem cum, earum voluptates impedit ad?

                    </p>
                </div>
            </div>
        </div>
        <div class="row tm-mb-50">
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                        Left side of 2-Column content
                    </h2>
                    <p class="mb-4">
                        Pellentesque urna odio, scelerisque eu mauris vitae, vestibulum sodales neque. Ut augue justo,
                        tincidunt nec aliquet ac, cursus vel augue. Suspendisse vel quam imperdiet, sodales tellus sed,
                        ullamcorper lorem.
                    </p>
                    <p>
                        Suspendisse id consequat risus. Aliquam varius posuere nunc, nec imperdiet neque condimentum at.
                        Aenean porta eleifend venenatis. Orci varius natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                        Right-side Title goes here
                    </h2>
                    <p class="mb-4">
                        Pellentesque urna odio, scelerisque eu mauris vitae, vestibulum sodales neque. Ut augue justo,
                        tincidunt nec aliquet ac, cursus vel augue. Suspendisse vel quam imperdiet, sodales tellus sed,
                        ullamcorper lorem.
                    </p>
                    <p>
                        Suspendisse id consequat risus. Aliquam varius posuere nunc, nec imperdiet neque condimentum at.
                        Aenean porta eleifend venenatis. Orci varius natoque penatibus et magnis dis parturient montes,
                        nascetur ridiculus mus.
                    </p>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row tm-mb-50">
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                    <div class="tm-about-icon-container mb-5">
                        <i class="fas fa-desktop fa-3x tm-text-primary"></i>
                    </div>
                    <h2 class="tm-text-primary mb-4">Three-column title one</h2>
                    <p class="mb-4">Integer tristique arcu scelerisque mauris posuere convallis. Fusce egestas ipsum
                        sapien, hendrerit ultricies nisi viverra eget. Vestibulum in tortor eget elit rutrum interdum.
                    </p>
                    <p>Cras auctor velit urna, et feugiat ex tincidunt ut. Sed viverra, elit at pulvinar tristique, sem
                        quam vehicula dolor, sed scelerisque augue mauris non dolor.</p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                    <div class="tm-about-icon-container mb-5">
                        <i class="fas fa-mobile-alt fa-3x tm-text-primary"></i>
                    </div>
                    <h2 class="tm-text-primary mb-4">Title two of three-column</h2>
                    <p class="tm-mb-50">Donec nec est tincidunt, rhoncus nulla sit amet, imperdiet augue. Phasellus
                        sodales placerat ipsum ac auctor. Mauris molestie blandit turpis. Mauris ante tellus, feugiat
                        nec metus non, bibendum semper velit.</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="tm-about-3-col">
                    <div class="tm-about-icon-container mb-5">
                        <i class="fas fa-photo-video fa-3x tm-text-primary"></i>
                    </div>
                    <h2 class="tm-text-primary mb-4">Third Title goes here</h2>
                    <p class="mb-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                        egestas. Donec nec est tincidunt, rhoncus nulla sit amet, imperdiet augue. </p>
                    <p>Phasellus sodales placerat ipsum ac auctor. Mauris molestie blandit turpis. Mauris ante tellus,
                        feugiat nec metus non, bibendum semper velit.</p>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid, tm-container-content -->

    <?php get_footer(); ?>