<?php include("includes/header.php"); ?>
<div id="contact" class="container">
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-12">
              <h3>Header</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
</div>
            <form class="container-fluid">
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
        <?php include("includes/footer.php"); ?>