<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="<?php echo get_template_directory_uri() . '/assets/images/banner-2400x1000.jpg'; ?>">
    <?php get_search_form(); ?>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary text-uppercase">
            Kết quả tìm kiếm cho '<?php echo get_search_query(); ?>'
        </h2>
    </div>


    <?php
    $args = array(
        's' => get_search_query(),
        'post_type' => 'MyPham',
        'search_columns' => ['post_title'],
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

            <?php endwhile; else: ?>
            <div class="row m-5">
                <h4 class="d-flex justify-content-center">

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor"
                            class="bi bi-emoji-frown m-5" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5" />
                        </svg>
                        <div>Không có dữ liệu! </div>
                    </div>
                </h4>
            </div>


        <?php endif; ?>
    </div> <!-- row -->

</div>