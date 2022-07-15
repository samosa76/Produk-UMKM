<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Starnight - A Sexy As Hell Free HTML5/CSS3 Template</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/flexslider.css')?>" type="text/css">
    <link href="<?php echo base_url('dist/css/styles.css?v=1.6')?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/css/queries.css?v=1.6')?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/css/jquery.fancybox.css')?>" rel="stylesheet">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <section class="navigation">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
              <nav class="pull">
                <ul class="top-nav">
                  <li><a href="<?php echo base_url("index.php/login")?>">Login <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li><a href="<?php echo base_url("index.php/regis")?>">Daftar Sekarang <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  <li><a href="<?php echo base_url("index.php/beli/public_beli")?>">Pesan Produk <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="hero" id="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left">
              <a href="<?php echo base_url("index.php/")?>"><i class="fa fa-arrow-left fa-2x"></i></a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h1 class="animated bounceInDown">Pembelian Berhasil</h1>
              <p class="animated fadeInUpDelay">Pesanan anda akan segera di proses</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-5 text-center">
              <a href="https://www.youtube.com/embed/5VVWPRtaLGg" class="hero-play-btn various fancybox.iframe">Play Button</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <a href="<?php echo base_url("index.php/")?>" class="get-started-btn">Pesan lagi</a>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonials" id="media">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div id="firstSlider">
                <ul class="slides">
                  <li>
                    <div class="avatar"><img src="<?php echo base_url('dist/img/av-blaz.png')?>" alt="Blaz Robar"></div>
                    <h1>I couldnt possibly use my own eyes to look at the stars, thansk Starnught App.</h1>
                  </li>
                  <li>
                    <div class="avatar"><img src="<?php echo base_url('dist/img/av-pete.png')?>" alt="Pete Finlan"></div>
                    <h1>Staring at the stars has given me feels like never before.</h1>
                  </li>
                  <li>
                    <div class="avatar"><img src="<?php echo base_url('dist/img/av-doge.png')?>" alt="Doge Finbar"></div>
                    <h1>Much flat, many design, so app. Wow.</h1>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="<?php echo base_url('dist/js/jquery.fancybox.pack.js')?>"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php echo base_url('dist/js/bootstrap.min.js')?>"></script>
      <script src="<?php echo base_url('dist/js/scripts.js?v=1.7')?>"></script>
      <script src="<?php echo base_url('dist/js/jquery.flexslider.js')?>"></script>
      <script src="<?php echo base_url('dist/js/jquery.smooth-scroll.js')?>"></script>
      <script src="<?php echo base_url('dist/js/modernizr.js')?>"></script>
      <script src="<?php echo base_url('dist/js/waypoints.min.js')?>"></script>
    </body>
  </html>
