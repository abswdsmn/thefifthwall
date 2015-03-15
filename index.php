<?php
  $menu = 'index';
  include 'header.php';
?><div class="navspacer"></div>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="images/carousel/Singapore-New-Years-1500x500.jpg" alt="First side">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Example paragraph.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
        <img src="images/carousel/bear_home_page.jpg" alt="First side">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Example paragraph.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
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
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="shop/" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <a href="commissions.php">
          <img class="img-circle" src="images/home/commissions_link_thumb.jpg" alt="commissions link image" style="width: 140px; height: 140px;">
          </a>
          <h2>Commissions</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="commissions.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="images/home/join_us_link_thumb.jpg" alt="join link image" style="width: 140px; height: 140px;">
          <h2>Join us</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div>
    <!-- Circles -->
<?php
  include 'footer.php';
?>