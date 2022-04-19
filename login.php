<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
  </head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Sign in</h3>
                  <form class="" action="" method="post">
      
                  <div class="form-outline mb-4">
                    <input name="usernameemail" required value="" type="text" class="form-control form-control-lg" />
                    <label for="usernameemail" class="form-label">Username or Email</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input name="password" required value="" type="password" class="form-control form-control-lg" />
                    <label for="password" class="form-label">Password</label>
                  </div>
                
      
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">LOGIN</button>
                </form>
      
                  <hr class="my-4">
                  <button class="btn btn-dark btn-lg btn-block" type="submit" onclick="location='registration.php'">REGISTRATION</button>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>

