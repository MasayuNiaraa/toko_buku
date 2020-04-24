<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Customer</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js" ></script>
    <style>
.tengah{
position: absolute;
margin-top: -100px;
margin-left: -200px;
left: 50%;
top: 50%;
width: 400px;
height: 220px;
}
body{
 background-image: url('book.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
}


</style>
</head>
<body>

<div class="body">
          <div class="card-header bg-dark text-white">
          <h6>copyright | masayuniara </h6>
          </div> 
    <div class="container">
    <div class="tengah">
    <div class="body">
    <div class="card">
    <div class="card-header bg-light text-dark">
    
    <div class="card-body">
    <form action="proses_login_customer.php" method="post">
    Username
    <input type="text" name="username" class="form-control" placeholder="Username or Email" required/>
    Password
    <input type="password" name="password" class="form-control" placeholder="Password" required/>
    <button type="sumbit" name="login_customer" class="btn btn-block btn-secondary">
    Login
    </button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>