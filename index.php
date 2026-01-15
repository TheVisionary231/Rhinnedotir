<?php

require 'koneksi_copy.php';

if(isset($_POST["login"])){

    $username = $_POST[ "username" ];
    $password = $_POST['password'];

    // $level = $_POST["level"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE user_name = '$username' AND password='$password'");

    // cek username 
    if(mysqli_num_rows($result) === 1){
        // ce password
        
            header("location:hub/index.html");

    exit;
    } 
}
$error=true;
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="lgn.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="wrapper">
<?php if(isset($error)):  ?>
    <p style="color: red; font-style: italic;"> Username  atau Password salah </p>
<?php endif; ?>

<form action="" method="post">
    <h1> Login User </h1>
    <div class="input-box">
    <input type= "text" name="username" id="username" class="form-control" placeholder= "Username Anda">
    </div>
    <div class="input-box">
        <input type= "password" name="password" id="password" class="form-control" placeholder= "Password Anda">
    </div>
    <div className="remember-forgot">
          <label><input type="checkbox" />Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <button type="submit" name="login" class="form-control">Login</button>

        <div className="register-link">
          <p>Don"t have an acccount?<a href="adduser.php">Register</a></p>
        </div>
    </div>
</div>

</form>
</div>
</body>
</html>