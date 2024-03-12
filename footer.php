<?php
// $footer = carbon_get_the_post_meta('crb_footer')[0];
$left_title = get_post_meta(7, 'Tiêu đề bên trái', true);
$left_content = get_post_meta(7, 'Nội dung bên trái', true);
$right_title = get_post_meta(7, 'Tiêu đề bên phải', true);
$right_content = get_post_meta(7, 'Nội dung bên phải', true);

?>

<footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
    <div class="container-fluid tm-container-small">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title"><?php echo $left_title ?></h3>
                <p>
                    <?php echo $left_content ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title"><?php echo $right_title ?></h3>
                <p>
                    <?php echo $right_content ?>
                </p>

            </div>
            <div class="col-lg-4 col-md-12 col-12 px-3 mb-5">
                <ul class="tm-social-links d-flex justify-content-start">
                    <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script>
$(window).on("load", function() {
    $('body').addClass('loaded');
});
</script>

<?php wp_footer(); ?>
</body>

</html>