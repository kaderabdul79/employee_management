
<!DOCTYPE html>
<html>
<head>
	<title>Login Portals</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
  body{background-color:#343a40}
  h1{color: #fff;}
  hr{border:2px solid #222}
  .login-form{width:340px;margin:50px auto}
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
    <form action="/index.php" method="post">
        <h2 class="text-center">Log in Panel<hr></h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div><br>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div><br>
        <div class="form-group">
            <select name="accountType" class="form-control">
            	<option value="donor">Employee</option>
            	<option value="admin">Admin</option>
            </select>
        </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Log in</button>
            <a href="signup">Create New Account</a>
        </div>
    </form>
</div>
</body>
</html>