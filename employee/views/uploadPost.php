<?php 
include('master.php');
include('header.php');
?>
<form method="POST" action="publishPostCheck.php" enctype="multipart/form-data">
     <div class="form-group">
         <label for="posttitle">Post Title</label>
         <input type="text" class="form-control" placeholder="posttitle" name="posttitle" value="">
      </div>
      <!-- text area start -->
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Post Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <!-- text area end -->
      <!-- upload post thumbnail -->
      <div class="form-group">
            Upload Post Thumbnail <br><input type="file" accept="image/png, image/jpeg" name="thumbnail" id="thumbnail" value="">
    </div><br>
     <!-- upload post thumbnail end -->
     <!-- author name -->
     <div class="form-group">
         <label for="authorname">Author Name</label>
         <input type="text" class="form-control" placeholder="authorname" name="authorname" value="">
      </div>
      <!-- author name end -->
 <!-- start tags radio button -->
  Select Tags <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="" value="" id="Radio1">
            <label class="form-check-label" for="Radio1">
                viralpost
            </label><br>
            <input class="form-check-input" type="radio" name="" value="" id="Radio1">
            <label class="form-check-label" for="Radio1">
                bangladesh
            </label><br>
            <input class="form-check-input" type="radio" name="" value="" id="Radio1">
            <label class="form-check-label" for="Radio1">
                facebook
            </label><br>
            <input class="form-check-input" type="radio" name="" value="" id="Radio2">
            <label class="form-check-label" for="Radio2">
                admissiontest
            </label>
        </div><br>
  <!-- end tags radio button -->
  <input type="submit" name="uploadpost" value="uploadpost">
</form>