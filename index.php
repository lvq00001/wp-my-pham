<?php get_header(); ?>

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="<?php echo get_template_directory_uri() . '/assets/images/banner-2400x1000.jpg'; ?>">
    <!-- <form class="d-flex tm-search-form" action="">
        <input class="form-control tm-search-input" type="search" placeholder="Tìm kiếm" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form> -->
    <?php get_search_form(); ?>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary text-uppercase">
            Sản phẩm mới
        </h2>
    </div>

    <?php
    $khuyen_mai = carbon_get_the_post_meta('crb_discount');
    $san_pham_moi = carbon_get_the_post_meta('crb_new_product');
    $arr = [];
    foreach ($san_pham_moi as $s) {
        $arr[] = $s['product-name'];
    }
    $args = array(
        'post__in' => $arr,
        'post_type' => 'MyPham',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published
    );
    $result = new WP_Query($args);
    if ($result->have_posts()): ?>


        <div class="row tm-mb-90 tm-gallery">
            <?php while ($result->have_posts()):
                $result->the_post(); ?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5 resize-img">
                    <figure class="effect-ming tm-video-item">
                        <img src="<?php the_post_thumbnail_url('small'); ?>" alt="image" class="img-fluid ">
                        <figcaption>
                            <h2><?php the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>">
                                Chi tiết</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light"><?php echo get_the_date('Y-m-d'); ?></span>
                        <span><?php echo get_comment_count()['approved']; ?> Đánh giá</span>
                    </div>
                </div>

            <?php endwhile; endif; ?>


    </div> <!-- row -->


    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary text-uppercase">
            Sản phẩm khuyến mãi
        </h2>
    </div>

    <?php


    $arr = [];
    foreach ($khuyen_mai as $s) {
        $arr[] = $s['product-name'];
    }
    //print_r($arr);
    $args = array(
        'post__in' => $arr,
        'post_type' => 'MyPham',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published
    );
    $result = new WP_Query($args);
    if ($result->have_posts()): ?>


        <div class="row tm-mb-90 tm-gallery">
            <?php while ($result->have_posts()):
                $result->the_post(); ?>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5 resize-img">
                    <figure class="effect-ming tm-video-item">
                        <img src="<?php the_post_thumbnail_url('small'); ?>" alt="image" class="img-fluid ">
                        <figcaption>
                            <h2><?php the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>">
                                Chi tiết</a>
                        </figcaption>
                    </figure>
                    <div class="d-flex justify-content-between tm-text-gray">
                        <span class="tm-text-gray-light"><?php echo get_the_date('Y-m-d'); ?></span>
                        <span><?php echo get_comment_count()['approved']; ?> Đánh giá</span>
                    </div>
                </div>

            <?php endwhile; endif; ?>


    </div> <!-- row -->

</div> <!-- container-fluid, tm-container-content -->
<?php get_footer(); ?>