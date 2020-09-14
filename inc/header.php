<!DOCTYPE HTML>

<head>
  <title>Store Website</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquerymain.js"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/nav.js"></script>
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript" src="js/nav-hover.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
  <script type="text/javascript">
    $(document).ready(function($) {
      $('#dc_mega-menu-orange').dcMegaMenu({
        rowItems: '4',
        speed: 'fast',
        effect: 'fade'
      });
    });
  </script>
</head>

<body>
  <div class="wrap">
    <div class="header_top">
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="" /></a>
      </div>
      <div class="header_top_right">
        <div class="search_box">
          <form>
            <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
          </form>
        </div>
        <div class="shopping_cart">
          <div class="cart">
            <a href="#" title="View my shopping cart" rel="nofollow">
              <span class="cart_title">Cart</span>
              <span class="no_product">(empty)</span>
            </a>
          </div>
        </div>
        <div class="login"><a href="login.php">Login</a></div>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="menu">
      <ul id="dc_mega-menu-orange" class="dc_mm-orange">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a> </li>
        <li><a href="topbrands.php">Top Brands</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="contact.php">Contact</a> </li>
        <div class="clear"></div>
      </ul>
    </div>
    <div class="header_bottom">
      <div class="header_bottom_left">
        <div class="section group">
          <div class="listview_1_of_2 images_1_of_2">
            <div class="listimg listimg_2_of_1">
              <a href="preview.php"> <img src="images/pic4.png" alt="" /></a>
            </div>
            <div class="text list_2_of_1">
              <h2>Iphone</h2>
              <p>Lorem ipsum dolor sit amet sed do eiusmod.</p>
              <div class="button"><span><a href="preview.php">Add to cart</a></span></div>
            </div>
          </div>
          <div class="listview_1_of_2 images_1_of_2">
            <div class="listimg listimg_2_of_1">
              <a href="preview.php"><img src="images/pic3.png" alt="" /></a>
            </div>
            <div class="text list_2_of_1">
              <h2>Samsung</h2>
              <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
              <div class="button"><span><a href="preview.php">Add to cart</a></span></div>
            </div>
          </div>
        </div>
        <div class="section group">
          <div class="listview_1_of_2 images_1_of_2">
            <div class="listimg listimg_2_of_1">
              <a href="preview.php"> <img src="images/pic3.jpg" alt="" /></a>
            </div>
            <div class="text list_2_of_1">
              <h2>Acer</h2>
              <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
              <div class="button"><span><a href="preview.php">Add to cart</a></span></div>
            </div>
          </div>
          <div class="listview_1_of_2 images_1_of_2">
            <div class="listimg listimg_2_of_1">
              <a href="preview.php"><img src="images/pic1.png" alt="" /></a>
            </div>
            <div class="text list_2_of_1">
              <h2>Canon</h2>
              <p>Lorem ipsum dolor sit amet, sed do eiusmod.</p>
              <div class="button"><span><a href="preview.php">Add to cart</a></span></div>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="header_bottom_right_images">
        <!-- FlexSlider -->

        <section class="slider">
          <div class="flexslider">
            <ul class="slides">
              <li><img src="images/1.jpg" alt="" /></li>
              <li><img src="images/2.jpg" alt="" /></li>
              <li><img src="images/3.jpg" alt="" /></li>
              <li><img src="images/4.jpg" alt="" /></li>
            </ul>
          </div>
        </section>
        <!-- FlexSlider -->
      </div>
      <div class="clear"></div>
    </div>