<?php
/**
 * Template Name: Detail Page
 */
?>

<?php
session_start();
get_header();

$san_pham = $_SESSION['san_pham'];
$name = ltrim($_GET['c']);
$chi_tiet = [];
foreach ($san_pham as $arr) {
    foreach ($arr as $s) {
        if ($s == $name) {
            $chi_tiet = $arr;
            //print_r($arr);
            break;
        }
    }
}
?>


<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll"
    data-image-src="<?php echo get_template_directory_uri() . '/assets/images/hero.jpg'; ?>">
    <form class=" d-flex tm-search-form">
        <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary"><?php echo $chi_tiet['name'] ?></h2>
    </div>
    <div class="row tm-mb-90">
        <div class="col-xl-4 col-lg-7 col-md-6 col-sm-12">
            <?php echo wp_get_attachment_image($chi_tiet['image'], '', false, ["class" => "img-fluid", "alt" => "image"]); ?>
        </div>
        <div class="col-xl-8 col-lg-5 col-md-6 col-sm-12">
            <div class="tm-bg-gray tm-video-details">
                <div class="mb-4">
                    <h3 class="tm-text-primary mb-3">Ưu điểm nổi bật:</h3>
                    <p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. At blanditiis, quaerat
                        officiis itaque
                        rem eligendi suscipit officia consequuntur modi animi eaque earum voluptatibus unde dolores,
                        facere delectus aspernatur consequatur! Accusamus.</p>
                </div>
                <div>
                    <h3 class="tm-text-primary mb-3">Thông số sản phẩm:</h3>
                    <ul>
                        <li>Thương hiệu: Dove (thuộc tập đoàn Unilever)</li>
                        <li>Xuất xứ thương hiệu: Mỹ</li>
                        <li>Nơi sản xuất: Trung Quốc</li>
                        <li>Khối lượng tịnh: 298g</li>
                        <li>Hạn sử dụng: xem trên bao bì sản phẩm, 30 tháng kể từ NSX</li>
                    </ul>
                </div>
                <p class="mb-4 text-danger fs-3">
                    Giá Tiền: <?php
                    $number = $chi_tiet['price'];

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