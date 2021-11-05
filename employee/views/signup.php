
<!DOCTYPE html>
<html>
<head>
	<title>Signup Portals</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
  body{background-color:#343a40}
  h1{color: #fff;}
  hr{border:2px solid #222}
  .login-form{width:340px;margin:20px auto}
  .login-form form{margin-bottom:15px;background:#f7f7f7;box-shadow:0 2px 2px rgba(0,0,0,.3);padding:30px}
  .login-form h2{margin:0 0 15px}
  .form-control, .btn{min-height:38px;border-radius:2px;font-size:15px;font-weight:bold;}

  </style>
</head>
<body>
<center><h1>Employee Management System</h1></center>
<hr>
<br>
<div class="login-form">
    <form action="signupCheck.php" method="post">
        <h2 class="text-center">Signup Panel<hr></h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username">
        </div><br>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div><br>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="email" name="email">
        </div><br>
        <select class="form-select" aria-label="Default select example" name="department">
            <option selected>select department</option>
            <option value="1">Account</option>
            <option value="2">Management</option>
            <option value="3">Finance</option>
        </select><br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="accounttype" value="employee" id="Radio1">
            <label class="form-check-label" for="Radio1">
                Employee
            </label><br>
            <input class="form-check-input" type="radio" name="accounttype" value="admin" id="Radio2">
            <label class="form-check-label" for="Radio2">
                Admin
            </label>
        </div><br>
        <div class="form-group">
            <input type="submit" value="signup" name="signup" class="btn btn-success">
            <a href="signin.php">Login</a>
        </div>
    </form>
</div>
</body>
</html>