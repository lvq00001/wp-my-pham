<?php get_header(); ?>


<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="<?php echo get_template_directory_uri() . '/assets/images/hero.jpg'; ?>">
    <?php get_search_form(); ?>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary"><?php the_title(); ?></h2>
    </div>
    <div class="row tm-mb-90">
        <div class="col-xl-6 col-lg-7 col-md-6 col-sm-12">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="image" class="img-fluid">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-6 col-sm-12">
            <div class="tm-bg-gray tm-video-details">
                <div class="mb-4">
                    <h3 class="tm-text-primary mb-3">Ưu điểm nổi bật:</h3>
                    <p class="text-dark">
                        <?php the_content(); ?>
                    </p>
                </div>
                <div>
                    <h3 class="tm-text-primary mb-3">Thông số sản phẩm:</h3>
                    <ul>
                        <li>Xuất xứ thương hiệu: <?php echo get_post_meta($post->ID, 'Xuất xứ', true); ?></li>
                        <li>Nơi sản xuất: <?php echo get_post_meta($post->ID, 'Nơi sản xuất', true); ?></li>
                        <li>Khối lượng tịnh: <?php echo get_post_meta($post->ID, 'Khối lượng tịnh', true); ?></li>
                        <li>Hạn sử dụng: xem trên bao bì sản phẩm</li>
                    </ul>
                </div>
                <p class="mb-4 text-danger fs-3">
                    Giá Tiền: <?php
                    $number = get_post_meta($post->ID, 'Giá', true);

                    echo number_format($number, 0) . 'đ';

                    ?>
                </p>
                <div class="text-center mb-5">
                    <a href="tel:555-555-5555" class="btn btn-primary tm-btn-big">GỌI ĐẶT MUA</a>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">
            Sản phẩm liên quan
        </h2>
    </div>
    <div class="row mb-3 tm-gallery">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Hangers</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">16 Oct 2020</span>
                <span>12,460 views</span>
            </div>
        </div> -->


</div> <!-- container-fluid, tm-container-content -->


<?php get_footer(); ?>