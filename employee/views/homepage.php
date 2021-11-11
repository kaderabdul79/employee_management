<?php 
 session_start(); 
 include('master.php'); ?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php include('post.php'); ?>
            </div>
            <div class="col-md-4">
                <div class="card-body" id="post">
                <h5 class="card-title">Notices</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <button type="button" class="btn btn-info"><a href="viewProfile.php">View Profile</a></button>
                <button type="button" class="btn btn-info"><a href="viewEmployees.php">View Employees</a></button>
                <button type="button" class="btn btn-info"><a href="uploadPost.php">Upload Post</a></button>
                <button type="button" class="btn btn-info"><a href="viewAllPosts.php">View All Posts</a></button>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php include('footer.php'); ?>