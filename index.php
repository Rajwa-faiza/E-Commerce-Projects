<?php

require_once 'config/koneksi.php';

$sql = "SELECT * FROM merk";
$rs = $dbh->query($sql);

$sql2 = "SELECT * FROM motor";
$rs2 = $dbh->query($sql2);

?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Kostum Karz</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo1.png" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="shop.php">Shop </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="merk.php"> Merek </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact us</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="login.php">
                                <img src="images/user.png" alt="">
                                <span>
                                    Login
                                </span>
                            </a>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">
                            <button>
                                <span class=" s-1">

                                </span>
                                <span class="s-2">

                                </span>
                                <span class="s-3">

                                </span>
                            </button>
                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="play_btn">
                <a href="">
                    <img src="images/play.png" alt="">
                </a>
            </div>
            <div class="number_box">
                <div>
                    <ol class="carousel-indicators indicator-2">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Produk Terbaru
                                            <span>
                                                Motor Kami
                                            </span>
                                        </h1>
                                        <p>
                                            Sepeda motor yang diproduksi oleh Honda Motor Co. Ltd. Motor ini dikenal
                                            karena
                                            keandalannya dan kesederhanaan desainnya.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box img-fluid">
                                        <img src="images/supra-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Produk Terbaru
                                            <span>
                                                Motor Kami
                                            </span>
                                        </h1>
                                        <p>
                                            Sepeda motor yang didesain untuk memenuhi kebutuhan transportasi di jalan
                                            raya.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img src="images/F1Z_110-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Produk Terbaru
                                            <span>
                                                Motor Kami
                                            </span>
                                        </h1>
                                        <p>
                                            Sepeda motor sport yang diproduksi oleh Suzuki Motor Corporation. GSX-R150
                                            dibangun
                                            dengan mesin berkapasitas 149,3 cc.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn-1">
                                                Read More
                                            </a>
                                            <a href="" class="btn-2">
                                                Contact us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 img-container">
                                    <div class="img-box">
                                        <img src="images/GSX-R150-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Tentang Kami
                            </h2>

                        </div>
                        <p style="text-align: justify;">
                            &nbsp;&nbsp;&nbsp;&nbsp;Kustom Karz adalah Toko yang menyediakan berbagai pilihan motor
                            mulai
                            dari motor bebek hingga motor sport dengan berbagai merk yang terkenal. Selain itu, kami
                            juga
                            menyediakan informasi lengkap tentang spesifikasi, harga, dan fitur-fitur yang tersedia
                            untuk
                            setiap motor yang kami jual. Anda juga dapat membandingkan antara berbagai pilihan motor
                            sebelum
                            memutuskan untuk membeli. Selain itu, kami juga menawarkan layanan purna jual yang lengkap
                            dan
                            berkualitas serta layanan pembayaran cicilan yang mudah dan fleksibel. Jadi, tunggu apa
                            lagi?
                            Bergabunglah dengan Kustom Karz dan nikmati pengalaman berbelanja berbagai motor yang luar
                            biasa!
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/logo1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- trending section -->

    <section class="trending_section layout_padding">
        <div id="accordion">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Merek Motor di Kostum Karz
                                </h2>
                            </div>
                            <div class="tab_container">
                                <?php
                                $no = 1;
                                ?>
                                <?php foreach ($rs as $item) : ?>
                                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    <div class="number">
                                        <h5>
                                            <?= '0' . $no++; ?>
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            <?= $item['merk'] ?>
                                        </h5>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="images/sup-remove.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/supra-removebg-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="images/GSX-R150-removebg-preview.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/F1Z_110-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="images/GSX-R150-removebg-preview.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/F1Z_110-removebg-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">

                                    <div class="img-box">
                                        <img src="images/sup-remove.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/supra-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="images/F1Z_110-removebg-preview.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/sup-remove.png" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="images/GSX-R150-removebg-preview.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/supra-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="images/sup-remove.png" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img src="images/F1Z_110-removebg-preview.png" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="images/GSX-R150-removebg-preview.png" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="images/supra-removebg-preview.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end trending section -->

    <!-- discount section -->

    <section class="discount_section  layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>
                            Untuk Pembeli Pertama Akan Mendapatkan Diskon
                        </h2>
                        <h2 class="main_heading">
                            Sebesar 50%
                        </h2>

                        <div class="">
                            <a href="shop.php#formPembelian">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/GSX-R150-removebg-preview.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end discount section -->

    <!-- brand section -->

    <section class="brand_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Produk Kami
                </h2>
            </div>
            <div class="brand_container layout_padding2">
                <?php foreach ($rs2 as $item) : ?>
                <div class="box">
                    <a href="shop.php#formPembelian">
                        <div class="img-box">
                            <img src="images/GSX-R150-removebg-preview.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="price">
                                Rp.<?= number_format($item['harga'], 2, ',', '.') ?>
                            </h6>
                            <h6>
                                <?= $item['nama_motor'] ?>
                            </h6>
                        </div>
                    </a>
                </div>
                <?php endforeach ?>
            </div>
            <a href="" class="brand-btn">
                Produk Lainnya
            </a>
        </div>
    </section>

    <!-- end brand section -->
    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container ">
            <div class="heading_container">
                <h2 class="">
                    Kontak Kami
                </h2>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="">
                        <div>
                            <input type="text" placeholder="Name" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="d-flex ">
                            <button>
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3175207230856!2d106.8326236!3d-6.352924499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6b07b68ea5%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sen!2sid!4v1681192013882!5m2!1sen!2sid"
                                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- client section -->
    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Testimonial
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="client_container layout_padding2">
                <div class="client_box b-1">
                    <div class="client-id">
                        <div class="img-box">
                            <img src="images/client-1.png" alt="" />
                        </div>
                        <div class="name">
                            <h5>
                                Irwan Santoso
                            </h5>
                            <p>
                                Pembeli Pertama
                            </p>
                        </div>
                    </div>
                    <div class="detail">
                        <p style="text-align: justify;">
                            "Saya sangat puas dengan motor yang saya beli di toko ini. Motor itu berkinerja luar biasa
                            dan
                            harganya cukup terjangkau. Saya benar-benar senang dengan pengalaman membeli motor ini.
                            Pelayanan yang diberikan oleh staf toko juga sangat baik dan mereka sangat membantu dalam
                            proses
                            pembelian. Saya akan merekomendasikan toko ini kepada semua orang yang ingin membeli motor."
                        </p>
                        <div>
                            <div class="arrow_img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client_box b-2">
                    <div class="client-id">
                        <div class="img-box">
                            <img src="images/client-2.png" alt="" />
                        </div>
                        <div class="name">
                            <h5>
                                Riski Suganda
                            </h5>
                            <p>
                                Pembelian Kedua
                            </p>

                        </div>
                    </div>
                    <div class="detail">
                        <p style="text-align: justify;">
                            "Saya sudah menggunakan motor yang dijual oleh toko ini selama beberapa bulan dan saya
                            sangat
                            puas dengan kualitas produknya. Motor ini sangat tangguh dan mudah digunakan. Saya juga
                            menyukai
                            desainnya yang modern dan berkelas. Harganya pun cukup terjangkau. Saya sangat
                            merekomendasikan
                            toko ini untuk membeli motor."
                        </p>
                        <div>
                            <div class="arrow_img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_logo">
                <h2>
                    Kostum Karz
                </h2>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <div class="info_contact">
                        <h5>
                            About Shop
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="images/location-white.png" width="18px" alt="">
                            </div>
                            <p>
                                perum bojong depok baru gaperi I blok CE no 08 RT 09 RW 08
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/telephone-white.png" width="12px" alt="">
                            </div>
                            <p>
                                +62 812-8983-4383
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/envelope-white.png" width="18px" alt="">
                            </div>
                            <p>
                                rjwfaiza.29@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info_info">
                        <h5>
                            Informations
                        </h5>
                        <p style="text-align: justify;">
                            1. Sistem review untuk membantu pembeli membuat keputusan dengan lebih baik.
                        </p>
                        <p style="text-align: justify;">
                            2. Sistem komentar untuk memungkinkan pengunjung website berinteraksi dengan penjual dan
                            bertanya mengenai produk yang dijual.
                        </p>
                        <p style="text-align: justify;">
                            3. Fitur pencarian untuk mempermudah pelanggan mencari produk yang mereka inginkan
                            berdasarkan
                            tipe atau harga tertentu.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="email" placeholder="Enter your email">
                            <button>
                                Subscribe
                            </button>
                        </form>
                        <div class="social_box">
                            <a href="">
                                <img src="images/fb.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/twitter.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/linkedin.png" alt="">
                            </a>
                            <a href="">
                                <img src="images/youtube.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; 2023 All Rights Reserved By
                <a href="https://github.com/Rajwa-faiza/Pemograman-Web2">Rajwa Faiza Rahmati</a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->


    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            420: {
                items: 2
            },
            1000: {
                items: 5
            }
        }

    });
    </script>
    <script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function(e) {

        e.preventDefault();
        nav.toggleClass("lg_nav-toggle");
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
    </script>
    <script>
    $('.carousel').on('slid.bs.carousel', function() {
        $(".indicator-2 li").removeClass("active");
        indicators = $(".carousel-indicators li.active").data("slide-to");
        a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
        console.log(indicators);

    })
    </script>

</body>

</html>