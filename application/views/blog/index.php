<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>E Store - eCommerce HTML Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="eCommerce HTML Template Free Download" name="keywords">
  <meta content="eCommerce HTML Template Free Download" name="description">

  <!-- Favicon -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

  <!-- CSS Libraries -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url('dist/lib/slick/slick.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('dist/lib/slick/slick-theme.css') ?>" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?php echo base_url('dist/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <!-- Top bar Start -->
  <div class="top-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <i class="fa fa-envelope"></i>
          support@email.com
        </div>
        <div class="col-sm-6">
          <i class="fa fa-phone-alt"></i>
          +012-345-6789
        </div>
      </div>
    </div>
  </div>
  <!-- Top bar End -->

  <!-- Nav Bar Start -->
  <div class="nav">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a href="#" class="navbar-brand">MENU</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav mr-auto">
            <a href="" class="nav-item nav-link active">Home</a>
            </div>
          </div>
          <div class="navbar-nav ml-auto">
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
              <div class="dropdown-menu">
                <a href="<?php echo base_url("index.php/login") ?>" class="dropdown-item">Login</a>
                <a href="<?php echo base_url("index.php/regis") ?>" class="dropdown-item">Register</a>
                <a href="<?php echo base_url("index.php/login/logout") ?>" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Nav Bar End -->

  <!-- Bottom Bar Start -->
  <div class="bottom-bar">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-3">
          <div class="logo">
            <a href="index.html">
              <img src="<?php echo base_url('dist/img/logo.png') ?>" alt="Logo">
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="search">
            <input type="text" placeholder="Search">
            <button><i class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="col-md-3">
          <div class="user">
            <a href="wishlist.html" class="btn wishlist">
              <i class="fa fa-heart"></i>
              <span>(0)</span>
            </a>
            <a href="cart.html" class="btn cart">
              <i class="fa fa-shopping-cart"></i>
              <span>(0)</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bottom Bar End -->

  <!-- Main Slider Start -->

  <!-- Main Slider End -->

  <!-- Brand Start -->

  <!-- Feature End-->

  <!-- Category Start-->
  <div class="category">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="category-item ch-400">
            <img src="<?php echo base_url('dist/img/category-3.jpg') ?>" />
            <a class="category-name" >
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-item ch-250">
            <img src="<?php echo base_url('dist/img/category-4.jpg') ?>" />
            <a class="category-name">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
          <div class="category-item ch-150">
            <img src="<?php echo base_url('dist/img/category-5.jpg') ?>" />
            <a class="category-name">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-item ch-150">
            <img src="<?php echo base_url('dist/img/category-6.jpg') ?>" />
            <a class="category-name">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
          <div class="category-item ch-250">
            <img src="<?php echo base_url('dist/img/category-7.jpg') ?>" />
            <a class="category-name">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="category-item ch-400">
            <img src="<?php echo base_url('dist/img/category-8.jpg') ?>" />
            <a class="category-name">
              <p>Some text goes here that describes the image</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Category End-->

  <!-- Call to Action Start -->
  <div class="call-to-action">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h1>call us for any queries</h1>
        </div>
        <div class="col-md-6">
          <a href="tel:0123456789">+012-345-6789</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Call to Action End -->

  <!-- Featured Product Start -->
  <div class="featured-product product">
    <div class="container-fluid">
      <div class="section-header">
        <h1>Featured Product</h1>
      </div>
      <div class="row align-items-center product-slider product-slider-4">

        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Hand bag</a>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-detail.html">
                <img src="<?php echo base_url('dist/img/product-1.jpg') ?>" alt="Product Image">
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>120000</h3>
              <a class="btn" href="<?php echo base_url("index.php/blog/detail/1") ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Hijab</a>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-detail.html">
                <img src="<?php echo base_url('dist/img/product-2.jpg') ?>" alt="Product Image">
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>350000</h3>
              <a class="btn" href="<?php echo base_url("index.php/blog/detail/2") ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Dress</a>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-detail.html">
                <img src="<?php echo base_url('dist/img/product-3.jpg') ?>" alt="Product Image">
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>15000</h3>
              <a class="btn" href="<?php echo base_url("index.php/blog/detail/3") ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Air Mineral</a>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-detail.html">
                <img src="<?php echo base_url('dist/img/product-4.jpg') ?>" alt="Product Image">
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>1000</h3>
              <a class="btn" href="<?php echo base_url("index.php/blog/detail/4") ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="product-item">
            <div class="product-title">
              <a href="#">Celana</a>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="product-image">
              <a href="product-detail.html">
                <img src="<?php echo base_url('dist/img/product-5.jpg') ?>" alt="Product Image">
              </a>
              <div class="product-action">
                <a href="#"><i class="fa fa-cart-plus"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>
                <a href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <div class="product-price">
              <h3><span>Rp</span>100000</h3>
              <a class="btn" href="<?php echo base_url("index.php/blog/detail/5") ?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Featured Product End -->

  <!-- Newsletter Start -->
  <div class="newsletter">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h1>Subscribe Our Newsletter</h1>
        </div>
        <div class="col-md-6">
          <div class="form">
            <input type="email" value="Your email here">
            <button>Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Newsletter End -->

  <!-- Recent Product Start -->
  <div class="recent-product product">
    <div class="container-fluid">
      <div class="section-header">
        <h1>Review</h1>
      </div>

    </div>
  </div>
  <!-- Recent Product End -->

  <!-- Review Start -->
  <div class="review">
    <div class="container-fluid">
      <div class="row align-items-center review-slider normal-slider">
        <div class="col-md-6">
          <div class="review-slider-item">
            <div class="review-img">
              <img src="<?php echo base_url('dist/img/review-1.jpg') ?>" alt="Image">
            </div>
            <div class="review-text">
              <h2>Customer Name</h2>
              <h3>Profession</h3>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="review-slider-item">
            <div class="review-img">
              <img src="<?php echo base_url('dist/img/review-2.jpg') ?>" alt="Image">
            </div>
            <div class="review-text">
              <h2>Yuki</h2>
              <h3>Profession</h3>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="review-slider-item">
            <div class="review-img">
              <img src="<?php echo base_url('dist/img/review-3.jpg') ?>" alt="Image">
            </div>
            <div class="review-text">
              <h2>Customer Name</h2>
              <h3>Profession</h3>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="review-slider-item">
            <div class="review-img">
              <img src="<?php echo base_url('dist/img/review-3.jpg') ?>" alt="Image">
            </div>
            <div class="review-text">
              <h2>Customer Name</h2>
              <h3>Profession</h3>
              <div class="ratting">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Review End -->

  <!-- Footer Start -->
  <div class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Get in Touch</h2>
            <div class="contact-info">
              <p><i class="fa fa-map-marker"></i>Depok, Indonesia</p>
              <p><i class="fa fa-envelope"></i>muhammadusamah76@gmail.com</p>
              <p><i class="fa fa-phone"></i>+123-456-7890</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Follow Us</h2>
            <div class="contact-info">
              <div class="social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Company Info</h2>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Condition</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h2>Purchase Info</h2>
            <ul>
              <li><a href="#">Pyament Policy</a></li>
              <li><a href="#">Shipping Policy</a></li>
              <li><a href="#">Return Policy</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row payment align-items-center">
        <div class="col-md-6">
          <div class="payment-method">
            <h2>We Accept:</h2>
            <img src="<?php echo base_url('dist/img/payment-method.png') ?>" alt="Payment Method" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="payment-security">
            <h2>Secured By:</h2>
            <img src="<?php echo base_url('dist/img/godaddy.svg') ?>" alt="Payment Security" />
            <img src="<?php echo base_url('dist/img/norton.svg') ?>" alt="Payment Security" />
            <img src="<?php echo base_url('dist/img/ssl.svg') ?>" alt="Payment Security" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Footer Bottom Start -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 copyright">
          <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
        </div>

        <div class="col-md-6 template-by">
          <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Bottom End -->

  <!-- Back to Top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('dist/lib/easing/easing.min.js') ?>"></script>
  <script src="<?php echo base_url('dist/lib/slick/slick.min.js') ?>"></script>

  <!-- Template Javascript -->
  <script src="<?php echo base_url('dist/js/home_main.js') ?>"></script>
</body>

</html>