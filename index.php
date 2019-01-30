<?php 
  define("TITLE", "Home | Advanced Technical Services")
  include('includes/header.php')
?>
      <main>

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

        <div id="services" class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <h2>Services</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              <h3>Header</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-6 col-sm-6">
              <h3>Header</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-6">
              <h3>Header</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-6 col-sm-6">
              <h3>Header</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

        <div id="contact" class="">
            <form>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" placeholder="First name" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" required>
                  </div>
                </div>
            </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationDefault03">City</label>
                          <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationDefault04">State</label>
                          <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="validationDefault05">Zip</label>
                          <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                        </div>
                      </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                      Agree to terms and conditions
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
        </div>
      </main>
      <footer class="container-fluid text-center">
        <a href="#" title="To Top">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p>Made by <a href="http://emjohnston-fsd.com">Eric Johnston</a></p>
      </footer>
      <script src="js/app.js"></script>
  </body>
</html>
