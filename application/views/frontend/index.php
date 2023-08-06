<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url()?>assets/frontend/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>assets/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url()?>assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url()?>assets/frontend/assets/css/variables.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/frontend/assets/css/main.css" rel="stylesheet">

  <style type="text/css">
    .topnav {
          margin-top: 10px;
          margin-right: 10px;
          margin-left: 10px;
          background-color: #DCEEFF;
          overflow: hidden;
          height: 40px;
          padding: 8px;
      }

      .bottomnav {
          margin-right: 10px;
          margin-left: 10px;
          background-color: #E5E5E5;
          overflow: hidden;
          height: 40px;
          padding: 5px;
      }

      a {
          color: black;
          padding-right: 20px;
          font-weight: bold;
      }
      body{
          font-family: 'Open Sans' !important;
          font-size: 22px;
      }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top" style="background: blue;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between ">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 style="color: white !important;">KONGSLI</h1><img src="<?=base_url('assets/frontend/assets/img/ole777-white.png')?>">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#" style="color: white !important;">Tentang OLE777</a></li>
          <li><a href="#" style="color: white !important;">Kimisi</a></li>
          <li><a href="#" style="color: white !important;">Peraturan</a></li>
          <li><a href="#" style="color: white !important;">Pertanaan & Jawaban</a></li>
          <li><a href="#" style=""><button class="btn btn-default" style="background: yellow;"><b>OLE777 Official</b></button></a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><button class="btn btn-default" style="background: orange;color: white;"><b>Login</b></button></a>
        <a href="#" class="mx-2"><button class="btn btn-default" style="background: gray;color: white;"><b>Daftar sekerang</b></button></a>
        <a href="#" class="mx-2 js-search-open" hidden><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://super7tech.com/web_developer_exam_sr/layout/images/OLE777_OCT_31.webp');">
                    <div class="img-bg-inner">
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://super7tech.com/web_developer_exam_sr/layout/images/slide_two.png');">
                    <div class="img-bg-inner">
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('https://super7tech.com/web_developer_exam_sr/layout/images/slide_three.png');">
                    <div class="img-bg-inner">
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->
    <!-- Section 1 -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">
          <div class="col-lg-12">
            <div class="row g-5">
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-cta-3.jpg" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-cta-2.jpg" alt="" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-lg-4 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-cta-1.jpg" alt="" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="row g-5">
              <div class="col-lg-12 border-start custom-border">
                <p>
                   <b>Kongsi OLE777</b> adalah program OLE777 Affiliate bola yang memberikan member dan non-member penghasilan dengan platform 
                   OLE7777. Berdiji sejak tahin 2014, OLE777 memberikan hiburan online demgam kenyamanan,kualitas produk.
                </p>
              </div>
            </div>
            <div class="row g-5">
              <div class="col-lg-12 border-start custom-border">
                <p>
                   <b>Langkah-langkah memdapatkan dengan menjadi Kongsi OLE777:</b> 
                </p>
              </div>
            </div>
            <div class="row g-5">
              <div class="col-lg-12 border-start custom-border">
                <div class="col-md-12">
                  <button style="cursor: default;border:none;color: white;background: orange;width: 30px !important;justify-content: center;" align="center">1</button>
                   Dalfar dengan klik " Daftar Sekarang " atau melalui link yang debirakan oleh tim kami.
                </div>
              </div>
            </div>
            <div class="row g-5">
              <div class="col-lg-12 border-start custom-border">
                <div class="col-md-12">
                  <button style="cursor: default;border:none;color: white;background: orange;width: 30px !important;justify-content: center;" align="center">2</button>
                   Dalfar dengan klik " Daftar Sekarang " atau melalui link yang debirakan oleh tim kami.
                </div>
              </div>
            </div>
            <div class="row g-5">
              <div class="col-lg-12 border-start custom-border">
                <div class="col-md-12">
                  <button style="cursor: default;border:none;color: white;background: orange;width: 30px !important;justify-content: center;" align="center">3</button>
                   Dalfar dengan klik " Daftar Sekarang " atau melalui link yang debirakan oleh tim kami.
                </div>
              </div>
            </div>
            <div class="row g-5">
              <div class="col-lg-12 border-start custom-border">
                <div class="col-md-12">
                  <button style="cursor: default;border:none;color: white;background: orange;width: 30px !important;justify-content: center;" align="center">4</button>
                   Dalfar dengan klik " Daftar Sekarang " atau melalui link yang debirakan oleh tim kami.
                </div>
              </div>
            </div>
          </div>
         
        </div> <!-- End .row -->
      </div>
    </section>
    <!-- ======= Section 2======= -->
    <section class="category-section">
      <div class="container" data-aos="fade-up">
          <div class="col-lg-12">
            <div class="row g-5">
              <div class="col-lg-3 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-group.svg" alt="" class="img-fluid"></a>
                  <h2><a href="single-post.html" style="color: blue;">Tim Pembayaran yang Profesional</a></h2>
                  <div class="post-meta"><span class="date">Metode pembayaran beragam dan terpercaya. Setiap dana pamain aman dan terjamin.</span></div>
                </div>
              </div>
              <div class="col-lg-3 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-domino.svg" alt="" class="img-fluid"></a>
                  <h2><a href="single-post.html" style="color: blue;">Brand yang terkenal</a></h2>
                  <div class="post-meta"><span class="date">Anggarapan pemasaran yang lugar biasa. Biarkan Anda menikmati efek dari merek berkualitas</span></div>
                </div>
              </div>
              <div class="col-lg-3 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-document.svg" alt="" class="img-fluid"></a>
                  <h2><a href="single-post.html" style="color: blue;">Personalisasikan Paket Prabadi</a></h2>
                  <div class="post-meta"><span class="date">Format pelaporan yang rapi & bersih. Lihat laporan harian & bulanan di satu titik</span></div>
                </div>
              </div>
              <div class="col-lg-3 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/img-settings.svg" alt="" class="img-fluid"></a>
                  <h2><a href="single-post.html" style="color: blue;">Sistem Laporan Profesional</a></h2>
                  <div class="post-meta"><span class="date">kami dapat menyesuakan promosi khasus untok Anda. Membuat promosi Anda menjadi Mudah</span></div>
                </div>
              </div>

              <div class="col-lg-12 border-start custom-border">
                <div class="post-entry-1">
                  <a href="single-post.html"><img src="<?php echo base_url()?>assets/frontend/assets/img/Sticker WhatsApp Gratis - Kongsi OLE777.gif" alt="" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section><!-- End Lifestyle Category Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-5">
            <img src="<?php echo base_url('assets/frontend/assets/img/icon-skype.svg')?>">
            Pelayanan Pelanggan Skype: <a href="#" style="color:orange;">affiliasi.id@oleintl.com</a>
          </div>
          <div class="col-6 col-lg-4">
            <img src="<?php echo base_url('assets/frontend/assets/img/icon-email.svg')?>">
            <label>Email: <a href="#" style="color:orange;">affiliatebola.@ole777-indo.com</a></label>
          </div>
          <div class="col-6 col-lg-3">
            <img src="<?php echo base_url('assets/frontend/assets/img/icon-whatsapp.svg')?>">
            <label>Whatsapp: <a href="#" style="color:orange;">+6287807264445</a></label>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
             <img src="<?php echo base_url('assets/frontend/assets/img/logo-chelsea.svg')?>">
          </div>

          <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
            <img src="<?php echo base_url('assets/frontend/assets/img/logo-pagcor.png')?>">
          </div>

          <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
            <img src="<?php echo base_url('assets/frontend/assets/img/logo-iom.png')?>">
          </div>

          <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
            <img src="<?php echo base_url('assets/frontend/assets/img/ole777-white.png')?>">
          </div>
        </div>

      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url()?>assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url()?>assets/frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url()?>assets/frontend/assets/js/main.js"></script>

</body>

</html>