<main>
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Quality Beyond
                                    Quantity</h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Mengutamakan
                                    Pelayanan , sangat menerima Kritikkan.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s"
                                    data-duration="2000ms">
                                    <a href="shop.php" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets/img/hero/watch.png" alt="" width="500px" height="500px"
                                    class=" heartbeat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Safely Buy
                                    Everything You Want</h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Transaksi Dijamin AMAN dan 100% Legal , Sudah banyak Testimoni <br> Silahkan Cek Instagram <i class="fab fa-instagram"></i> : jingers.id</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s"
                                    data-duration="2000ms">
                                    <a href="shop.php" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets/img/hero/watch.png" width="500px" height="500px" alt=""
                                    class=" heartbeat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                                    $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk order by id_kategori DESC LIMIT 3");
                                    // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                                    while ($show = mysqli_fetch_array($QueryProduk)) {

                                    ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <a href="detailProduk.php?id_kategori=<?php echo $show['id_kategori']; ?>">
                                <img src="admin/upload/<?= $show['gambar']; ?>" height="230" width="410" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html"><?= $show['nama_kategori']; ?></a></h3>

                        </div>
                        </a>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </section>
    <!--  New Product End -->
    <!--? Gallery Area Start -->
    <!-- <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
    <!-- Gallery Area End -->
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>Recomendation Items</h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                                    $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE rekomendasi = 'Y'");
                                    // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                                    while ($show = mysqli_fetch_array($QueryProduk)) {

                                    ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="admin/upload/<?= $show['gambar']; ?>" height="230" width="410" alt="">
                            <div class="img-cap">
                                <a href="detailProduk.php?id_kategori=<?php echo $show['id_kategori']; ?>">
                                    <span>Order Now</span>
                                </a>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html"><?= $show['nama_kategori']; ?></a></h3>

                        </div>
                    </div>
                </div>




                <?php } ?>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="shop.php" class="btn view-btn1">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
    <!--? Video Area Start -->
    <!-- <div class="video-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                    <div class="video-wrap">
                        <div class="play-btn "><a class="popup-video" href="https://www.youtube.com/watch?v=KMc6DyEJp04"><i class="fas fa-play"></i></a></div>
                    </div>
                    </div>
                </div> -->
    <!-- Arrow -->
    <!-- <div class="thumb-content-box">
                    <div class="thumb-content">
                        <h3>Next Video</h3>
                        <a href="#"> <i class="flaticon-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Video Area End -->
    <!--? Watch Choice  Start-->
    <!-- <div class="watch-area section-padding30">
            <div class="container">
                <div class="row align-items-center justify-content-between padding-130">
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>Watch of Choice</h2>
                            <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            <a href="shop.html" class="btn">Show Watches</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="assets/img/gallery/choce_watch1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="assets/img/gallery/choce_watch2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>Watch of Choice</h2>
                            <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            <a href="shop.html" class="btn">Show Watches</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Watch Choice  End-->
    <!--? Shop Method Start-->
    <!-- <div class="shop-method-area">
            <div class="container">
                <div class="method-wrapper">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-package"></i>
                                <h6>Free Shipping Method</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Secure Payment System</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-reload"></i>
                                <h6>Secure Payment System</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Shop Method End-->
    <div class="shop-method-area">
        <div class="container">
            <div class="method-wrapper">
            <center> <h4 class="single-method mb-40 text-white mb-0">Top Up Games & Premium Accounts <br>All Your Digital Needs<br><br><i>~ JINGERS.ID ~</i></h4></center>
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-money"></i>
                            <h6>Save More Of Your Money</h6>
                            <p>Harga Sangat Terjangkau dan Terjamin Murahh</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>100% Legal Transaction</h6>
                            <p>Transaksi aman Trusted jangan takut akun anda ke banned .</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="fa fa-thumbs-up"></i>
                            <h6>Guaranteed Warranty</h6>
                            <p>Garansi Apabila Terjadi hal yang tidak diinginkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>