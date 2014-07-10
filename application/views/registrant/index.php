<form class="form-register" data-toggle="validator" role="form" action="<?php echo URL; ?>registrant/addregistrant" method="post">
  <div class="row">
    <div class="col-md-5 col-md-offset-1 form-group">
      <input type="text" name="fname" class="form-control" placeholder="First Name" required autofocus>
    </div>
    <div class="col-md-5 form-group">
      <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
    </div>
    </div>
  <div class="row">
    <div class="col-md-5 col-md-offset-1 form-group">
      <input type="text" name="addr1" class="form-control" placeholder="Address 1" required>
    </div>
    <div class="col-md-5 form-group">
      <input type="text" name="addr2" class="form-control" placeholder="Address 2 (optional)">
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-md-offset-1 form-group">
      <input type="text" name="city" class="form-control" placeholder="City" required>
    </div>
    <div class="col-md-2 form-group">
      <input type="text" pattern="^[A-Z]{2}$" name="state" class="form-control" placeholder="State" data-error="2 letters" required>
      <span class="help-block with-errors"></span>
    </div>
    <div class="col-md-3 form-group">
      <input type="text" pattern="^(\d{5}(\d{4})?)$" name="zip" class="form-control" placeholder="Zip" data-error="5 or 9 digits" required>
      <span class="help-block with-errors"></span>
    </div>
    <div class="col-md-2 form-group">
      <input type="text" pattern="^US$" name="country" class="form-control" placeholder="Country" data-error="2 letters, US only" required>
      <span class="help-block with-errors"></span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1 col-md-offset-1">
      <button name="submit_add_registrant" class="btn btn-lg btn-primary btn-register" type="submit">Register</button>
    </div>
  </div>
</form>
