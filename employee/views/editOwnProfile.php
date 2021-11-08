<?php 
include('master.php');
include('header.php'); 

?>
<div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Edit Profile</h3>
<form>
     <div class="form-group">
         <label for="username">Username</label>
         <input type="text" class="form-control" placeholder="Username" name="username">
      </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
<!-- dropdown for department -->
  <br><div class="form-group col-md-8">
      <select id="inputState" class="form-control" name="department">
            <option selected>select department</option>
            <option value="account">Account</option>
            <option value="management">Management</option>
            <option value="finance">Finance</option>
      </select>
    </div><br>
<!-- dropdown for department end -->
    <div class="form-check">
            <input class="form-check-input" type="radio" name="accounttype" value="employee" id="Radio1">
            <label class="form-check-label" for="Radio1">
                Employee
            </label><br>
            <input class="form-check-input" type="radio" name="accounttype" value="admin" id="Radio2">
            <label class="form-check-label" for="Radio2">
                Admin
            </label>
            <div class="disabled">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
     <label class="form-check-label" for="exampleRadios3">
     Disabled radio
    </label>
    </div>
    </div>
  <!-- end radio button -->
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Confirm to Update Profile?</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div></div></div><br>
<?php 
include('footer.php');
?>