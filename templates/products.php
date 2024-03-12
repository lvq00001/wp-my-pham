<?php
/**
 * Template Name: Products Page
 */
?>
<?php get_header(); ?>

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="<?php echo get_template_directory_uri() . '/assets/images/banner-2400x1000.jpg'; ?>">
    <?php get_search_form(); ?>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary text-uppercase">
            Sản phẩm
        </h2>
    </div>

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'MyPham',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 4, // -1 will retrive all the post that is published
        'paged' => $paged,
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


    <?php
    $big = 999999999; // need an unlikely integer
    
    $links = paginate_links(
        array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $result->max_num_pages,
            'type' => 'array',
            'prev_text' => '<span class="btn btn-primary tm-btn-prev mb-2">Trước</span>',
            'next_text' => '<span class="btn btn-primary tm-btn-next">Sau</span>',
        )
    );
    ?>





    <div class="row tm-mb-90">
        <div class="d-flex justify-content-between align-items-center tm-paging-col">
            <?php
            $array_size = count($links);
            if ($paged == 1) { ?>
                <span class="btn btn-primary tm-btn-prev mb-2 disable">Trước</span>
            <?php } else {
                echo $links[0];
            } ?>
            <div class="tm-paging d-flex">
                <?php
                for ($i = 1; $i < $array_size - 1; $i++) { ?>

                    <?php echo $links[$i]; ?>
                <?php } ?>

            </div>
            <?php
            if ($paged == $array_size - 1) { ?>
                <span class="btn btn-primary tm-btn-next disable">Sau</span>
            <?php } else {
                echo $links[$array_size - 1];
            } ?>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("[class~=page-numbers]").addClass('tm-paging-link');
        });
    </script>



</div> <!-- container-fluid, tm-container-content -->
<?php get_footer(); ?>