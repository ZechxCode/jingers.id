<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>JINGERS.ID | PRODUCT</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!-- Latest Products Start -->
    <section class="popular-items latest-padding">
        <div class="container">
            <div class="row product-btn justify-content-between mb-40">
                <div class="properties__button">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Game Voucher</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false"> Premium Account</a>
                            <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false"> Most populer </a> -->
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
                <!-- Grid and List view -->
                <div class="grid-list-view">
                </div>
                <!-- Select items -->
                <div class="select-this">
                    <form action="#">
                        <div class="select-itms">
                            <select name="select" id="select1">
                                <option value="">40 per page</option>
                                <option value="">50 per page</option>
                                <option value="">60 per page</option>
                                <option value="">70 per page</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <?php

                                    $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE jenis_kategori != 'P.A'");
                                    // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                                    while ($show = mysqli_fetch_array($QueryProduk)) {

                                    ?>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img src="admin/upload/<?= $show['gambar']; ?>" height="230" width="410" />
                                    <div class="img-cap">
                                        <a href="detailProduk.php?id_kategori=<?php echo $show['id_kategori']; ?>">
                                            <span>ORDER</span>
                                        </a>
                                    </div>
                                    <div class="favorit-items">
                                        <span class="flaticon-heart"></span>
                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><?= $show['nama_kategori']; ?></h3>

                                </div>
                            </div>
                        </div>




                        <?php } ?>
                    </div>
                </div>
                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <?php

                                    $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE jenis_kategori = 'P.A'");
                                    // $QueryProduk = mysqli_query($koneksi, "SELECT * FROM tbl_pricelist p INNER JOIN tbl_produk k on p.id_kategori = k.id_kategori");

                                    while ($show = mysqli_fetch_array($QueryProduk)) {

                                    ?>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img src="admin/upload/<?= $show['gambar']; ?>" height="230" width="410" />
                                    <div class="img-cap">
                                        <a href="detailProduk.php?id_kategori=<?php echo $show['id_kategori']; ?>">
                                            <span>ORDER</span>
                                        </a>
                                    </div>
                                    <div class="favorit-items">
                                        <span class="flaticon-heart"></span>
                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><?= $show['nama_kategori']; ?></h3>

                                </div>
                            </div>
                        </div>




                        <?php } ?>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-popular-items mb-50 text-center">
                                <div class="popular-img">
                                    <img src="assets/img/gallery/popular1.png" alt="">
                                    <div class="img-cap">
                                        <span>Add to cart</span>
                                    </div>
                                    <div class="favorit-items">
                                        <span class="flaticon-heart"></span>
                                    </div>
                                </div>
                                <div class="popular-caption">
                                    <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                                    <span>$ 45,743</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->
    <!--? Shop Method Start-->
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
    <!-- Shop Method End-->
</main>