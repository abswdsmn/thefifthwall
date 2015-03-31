<head>    

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/tiles/apple-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/tiles/apple-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/tiles/apple-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/tiles/apple-icon-144x144.png" />
    
    <meta name="msapplication-square70x70logo" content="images/tiles/acme-tile-small.png" />
<meta name="msapplication-square150x150logo" content="images/tiles/acme-tile-medium.png" />
<meta name="msapplication-wide310x150logo" content="images/tiles/acme-tile-wide.png" />
<meta name="msapplication-square310x310logo" content="images/tiles/acme-tile-large.png" />
</head>

<?php
 
  $menu = 'index';
  include 'header.php';
 
?><div class="navspacer" id="carousel"></div>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        
        <div class="fifthcaption item active">
          <img src="images/home/carousel/bear_home_page.jpg" alt="Carousel image">
          <h1 class="fifthcaptiontext">art | design | media</h1>
        </div>
        
        <div class="item">
          <img src="images/home/carousel/Airlock.jpg" alt="Carousel image">
        </div>
        
        <div class="item">
          <img src="images/home/carousel/Mickey-Mouse.jpg" alt="Carousel image">
        </div>
        
        <div class="item">
          <img src="images/home/carousel/Werburgh's-Tunnel.jpg" alt="Carousel image">
        </div>

        <div class="item">
          <img src="images/home/carousel/Ground-Up-Mural.jpg" alt="Carousel image">
        </div>
        
        <div class="item">
          <img src="images/home/carousel/BearFruit2.jpg" alt="Carousel image">
        </div>
        
        <div class="item">
          <img src="images/home/carousel/BearFruit4.jpg" alt="Carousel image">
        </div>
        
        <div class="item">
          <img src="images/home/carousel/Black-Lagoon.jpg" alt="Carousel image">
        </div>
        
        <div class="item">
          <img src="images/home/carousel/M32.jpg" alt="Carousel image">
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel -->

    <!-- Circles -->
    <div class="container marketing">
      <div class="row">
        <div class="col-lg-4">
          <a href="shop/">
          <img class="img-circle" src="images/home/prints_link_thumb.jpg" alt="prints link image" style="width: 140px; height: 140px;">
          </a>
          <h2>Shop</h2>
          <p>The latest creations for sale from our artists.</p>
          <p><a class="btn btn-default" href="shop/" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <a href="commissions.php">
          <img class="img-circle" src="images/home/commissions_link_thumb2.png" alt="commissions link image" style="width: 140px; height: 140px;">
          </a>
          <h2>Services</h2>
          <p>Bespoke art, design and media commissions.</p>
          <p><a class="btn btn-default" href="commissions.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <a href="contact.php">
          <img class="img-circle" src="images/home/join_us_link_thumb.jpg" alt="join link image" style="width: 140px; height: 140px;">
          </a>
          <h2>Join us</h2>
          <p>Work with The Fifth Wall.</p>
          <p><a class="btn btn-default" href="contact.php" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div>
    <!-- Circles -->
    
<?php
  include 'footer.php';
?>
