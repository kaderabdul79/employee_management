<?php

// echo "hello";


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sidebars · Bootstrap v5.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
<main>

<div class="d-flex flex-shrink-0 p-3 text-black bg-white" style="width: 100%;height: 660px">
  <!-- sidabar start -->
  <?php include 'sidebar.php'; ?>
  <!-- sidebar end -->

  <!-- main body start -->
  <div class="d-flex flex-column p-3" id="showallForm" style="">
      <!-- <div id="forAll">

      </div> -->
      <script>
        let edit = document.getElementById('edit')
        edit.addEventListener('click',()=>{
        edit.href='editOwnProfile.php'
        })

        let education = document.getElementById('education')
        education.addEventListener('click',()=>{
            education.href='editOwnProfile.php'
        })
        //console.log(edit)
      </script>    
     <!-- <script>editprofile()</script> -->
   </div>
  <!-- main body end -->
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="sidebars.js"></script>
<script src="myscript.js"></script>
  </body>
</html>
