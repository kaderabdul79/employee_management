<form method="POST" action="" enctype="multipart/form-data">
     <div class="form-group">
         <label for="username">Post Title</label>
         <input type="text" class="form-control" placeholder="posttitle" name="posttitle" value="">
      </div>
<!-- dropdown for department -->
  <br><div class="form-group col-md-8">
      <select id="inputState" class="form-control" name="department">
        <!-- value=<?= $row['department']; ?> -->
            <option <?= $row['department']; ?> selected ><?= $row['department']; ?></option>
            <option value="account">Account</option>
            <option value="management">Management</option>
            <option value="finance">Finance</option>
      </select>
    </div><br>
<!-- dropdown for department end -->
    Accounttype <div class="form-check">
            <input class="form-check-input" type="radio" name="accounttype" value="employee" id="Radio1">
            <label class="form-check-label" for="Radio1">
                <?= ($row['accounttype'] == 'employee') ? 
                '<div class="disabled">
              <input class="form-check-input" type="radio" name="accounttype" id="exampleRadios3" value="admin" disabled>
              <label class="form-check-label" for="exampleRadios3">Admin</label>
            </div>'
                : '<input class="form-check-input" type="radio" name="accounttype" value="employee" id="Radio2">
            <label class="form-check-label" for="Radio2">
                Employee
            </label>' ?>
            </label><br>
    </div>
  <!-- end radio button -->
  <div class="form-group">
            Upload Picture <br><input type="file" accept="image/png, image/jpeg" name="picture" id="picture" value="<?= $row['picture']; ?>">
    </div><br>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Confirm to Update Profile?</label>
  </div>
  <input type="submit" name="EditProfile" value="Edit Profile">
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>