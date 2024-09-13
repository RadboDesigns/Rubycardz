<?php
    $pageTitle = "Details";
    $backgroundImage = "assets/images/header/about-header.jpg";
    $pageDescription = "Discover our story and values at RUBY CARDS, where passion, quality, and customer satisfaction are at the heart of everything we do.";
    include 'header.php';
?>

<section class="content-section" data-background="#fffbf7">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="side-content left">
                    <small>50% off exhibitions</small>
                    <h2>Custom Wedding Card - 7000</h2>
                    <table>
                    <tr>
                            <td>Per Piece</td>
                            <td>: ₹29</td>
                        </tr>
                        <tr>
                            <td>Card Material</td>
                            <td>: Matt Finish</td>
                        </tr>
                        <tr>
                            <td>Orientation</td>
                            <td>: Portrait</td>
                        </tr>
                        <tr>
                            <td>Card Style</td>
                            <td>: Single card</td>
                        </tr>
                        <tr>
                            <td>Dimension </td>
                            <td>: 6"X8.5"</td>
                        </tr>
                    </table>
                </div>
                <!-- end side-content -->

                <div class="side-icon-list">
                    <ul>
                        <li>
                            <figure><img src="assets/images/icon02.png" alt="Image"></figure>
                            <div class="content">
                                <h5>Description </h5>
                                <p>Introducing the Customized Wedding Card-7000, a beautifully crafted option featuring digital printing on both its single side card and cover. Elevate your invitations with a personalized caricature at an additional cost, adding a charming and unique touch to commemorate your special day. This customizable design ensures the card creates a lasting impression on your guests.</p>
                            </div>
                            <!-- end content -->
                        </li>
                    </ul>
                </div>
                <!-- end side-icon-list -->
                <!-- New table with Quantity, Unit Price, and Discount Price -->
        <div class="row mt-5 ">
            <div class="col-12 ">
            <h5>Buy at discounted prices  </h5>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>You Save</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>150</td>
                            <td>₹28.00</td>
                            <td>₹1.00</td>
                        </tr>
                        <tr>
                            <td>200</td>
                            <td>₹26.00</td>
                            <td>₹3.00</td>
                        </tr>
                        <tr>
                            <td>250</td>
                            <td>₹24.00</td>
                            <td>₹5.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end new table row -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6">
            <figure class="side-image" data-scroll data-scroll-speed="1"> <img src="assets/images/card-collection/collection13.jpg" alt="Image"> </figure>
          </div>
        </div>
        <!-- end row -->

        

        <section class="content-section no-bottom-spacing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="image-box-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure><img src="assets/images/carousel-image01.jpg" alt="Image"></figure>
                                    <div class="content-box">
                                        <h5>Front View</h5>
                                    </div>
                                    <!-- end content-box -->
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure><img src="assets/images/carousel-image02.jpg" alt="Image"></figure>
                                    <div class="content-box">
                                        <h5>Back View</h5>
                                    </div>
                                    <!-- end content-box -->
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure><img src="assets/images/carousel-image03.jpg" alt="Image"></figure>
                                    <div class="content-box">
                                        <h5>Cover</h5>
                                    </div>
                                    <!-- end content-box -->
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure><img src="assets/images/carousel-image04.jpg" alt="Image"></figure>
                                    <div class="content-box">
                                        <h5>2013: Methal Matters</h5>
                                        <a href="#" class="custom-link">Read More</a>
                                    </div>
                                    <!-- end content-box -->
                                </div>
                                <!-- end swiper-slide -->
                                <div class="swiper-slide">
                                    <figure><img src="assets/images/carousel-image05.jpg" alt="Image"></figure>
                                    <div class="content-box">
                                        <h5>2011: Organic Materials</h5>
                                        <a href="#" class="custom-link">Read More</a>
                                    </div>
                                    <!-- end content-box -->
                                </div>
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->
                        </div>
                        <!-- end image-box-carousel -->
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>

        <div class="modal fade" id="fullPageViewModal" tabindex="-1" aria-labelledby="fullPageViewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="" class="img-fluid" id="fullPageImageView">
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

    </div>
    <!-- end container -->
</section>
<!-- end content-section -->

<?php include 'footer.php'; ?>
<!-- end footer -->

<!-- JS FILES -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/locomotive-scroll.min.js"></script>
<script src="assets/js/ScrollTrigger.min.js"></script>
<script src="assets/js/kinetic-slider.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/scripts.js"></script>

<!-- WhatsApp Chat Button -->
<a href="https://wa.me/+918903667000" class="whatsapp-button" target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Chat">
    <span class="whatsapp-tooltip">For enquiries</span>
</a>

</body>
</html>
