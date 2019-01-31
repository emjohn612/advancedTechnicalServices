<?php 
  define("TITLE", "Home | Advanced Technical Services");
  include('includes/header.php');
?>
        <div id="about" class="container-fluid">
          <div class="row">
            <div class="col-sm-8">
              <h2>About</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-sm-4 text-center">
              <span class="glyphicon glyphicon-signal logo"></span>
            </div>
          </div>
        </div>
        <div id="gallery" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#gallery" data-slide-to="0" class="active"></li>
            <li data-target="#gallery" data-slide-to="1"></li>
            <li data-target="#gallery" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/img3.jpeg" alt="Chania">
              <div class="carousel-caption">
                <figcaption>Caption 1</figcaption>
              </div>
            </div>

            <div class="item">
              <img src="img/img2.jpeg" alt="Chicago">
              <div class="carousel-caption">
                <figcaption>Caption 2</figcaption>
              </div>
            </div>

            <div class="item">
              <img src="img/img1.jpeg" alt="New York">
              <div class="carousel-caption">
                <figcaption>Caption 3</figcaption>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#gallery" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#gallery" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<?php 
  include('includes/footer.php');
?>