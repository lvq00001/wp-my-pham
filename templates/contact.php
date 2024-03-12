<?php
// Template Name: Contact Page
?>

<?php get_header(); ?>

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src=<?php echo get_template_directory_uri() . "/assets/images/hero.jpg" ?>></div>

<div class="alert alert-success mt-5 mb-1" role="alert" style="display: none;">
    Đã tiếp nhận, chúng tôi sẽ phản hồi sớm!
</div>

<div id="window-spinner" class="container-fluid tm-mt-60">
    <div class="row tm-mb-50">
        <div class="col-lg-4 col-12 mb-5">
            <h2 class="tm-text-primary mb-5">Liên Hệ</h2>
            <form id="contact-form" action="<?php echo get_template_directory_uri() . "/send.php" ?>" method="post"
                class="tm-contact-form mx-auto">
                <div class="form-group">
                    <input type="text" name="name" class="form-control rounded-0" placeholder="Họ Tên" required />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                </div>
                <!-- <div class="form-group">
                    <select class="form-control" id="contact-select" name="inquiry">
                        <option value="-">Thông tin sản phẩm</option>
                        <option value="creative">Đổi trả hàng</option>
                        <option value="uiux">Phản ánh nhân viên</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Nội dung"
                        required=></textarea>
                </div>

                <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />

                <div class="form-group tm-text-right">
                    <button id="contact-form-button" type="submit" class="btn btn-primary">GỬI</button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-12 mb-5">
            <div class="tm-address-col">
                <h2 class="tm-text-primary mb-5">Địa chỉ</h2>
                <p class="tm-mb-50">Đầm Sen, Lạc Long Quân, Phường 3, District 11, Ho Chi Minh City, Vietnam</p>
                <p class="tm-mb-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptatibus
                    minima repellendus laudantium nisi quos iusto, eaque, blanditiis aut iure cumque architecto nobis,
                    libero velit ipsum rem quam neque quae.</p>
                <address class="tm-text-gray tm-mb-50">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ratione consequatur laborum saepe cum
                    vero a.
                </address>
                <ul class="tm-contacts">
                    <li>
                        <a href="#" class="tm-text-gray">
                            <i class="fas fa-envelope"></i>
                            Email: lvq00001@gmail.com
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tm-text-gray">
                            <i class="fas fa-phone"></i>
                            Tel: 123-456-789
                        </a>
                    </li>
                    <li>
                        <a href="#" class="tm-text-gray">
                            <i class="fas fa-globe"></i>
                            URL: www.company.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <h2 class="tm-text-primary mb-5">Xem bản đồ</h2>
            <!-- Map -->
            <div class="mapouter mb-4">
                <div class="gmap-canvas">
                    <?php echo do_shortcode("[wpgmza id='1']"); ?>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container-fluid, tm-container-content -->


<script>
    $(document).ready(function () {
        // Get the URL parameters
        var urlParams = new URLSearchParams(window.location.search);

        // Check if the "sent" parameter exists and has a value of "true"
        if (urlParams.toString().includes('sent=true')) {
            // Show the alert
            $('.alert').show();
        }
    });
</script>


<script>
    $(document).ready(function () {
        $('#contact-form').submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            // Show the waiting spinner
            var spinner = $(
                '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>'
            );
            $("#contact-form-button").text("").append(spinner);
            // Disable the submit button
            $(this).find('button[type="submit"]').prop('disabled', true);

            // Get the form data
            var formData = $(this).serialize();

            var actionUrl = $(this).attr("action");

            // Perform form submission using AJAX
            $.ajax({
                url: actionUrl, // Replace with your actual endpoint
                type: 'POST',
                data: formData,
                success: function (response) {
                    // Handle the success response
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    // Handle the error response
                    console.log(error);
                },
                complete: function () {
                    // Hide the waiting spinner
                    spinner.remove();

                    // Enable the submit button
                    $("#contact-form-button").text("GỬI");
                    $('#contact-form').find('button[type="submit"]').prop('disabled', false);
                    $('#contact-form').find('input:not([type="hidden"]), textarea').val('');
                }
            });
        });
    });
</script>

<?php get_footer(); ?>