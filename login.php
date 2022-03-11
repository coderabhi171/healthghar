<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$con=mysqli_connect("localhost","root","","healthghar");
  if(!$con){
    die("Errrrror".mysqli_connect_error());
  }
  
  $showalert = false;
  $phone = $_POST["tel"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];

  $login_tel = $_POST["tel_login"];
  $pass_login = $_POST["pass_login"];
  $exists = false;
  if(isset($_POST['login'])){
    $exists = true;
  }

  if(($pass == $cpass) && ($exists==false)){
    $sql = "INSERT INTO `data` (`phone`, `password`) VALUES ('$phone', '$pass')";
   $result =  mysqli_query($con, $sql);
if($result){
    echo "<script>alert('Sign up was successfully. Please loggin to continue')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
    if($result){
      echo "true";
    }
    else{
      echo "false";
    }
  }

  if($exists == true){

    $sql = "SELECT * FROM data WHERE phone='$login_tel' AND password='$pass_login'";
    $res =  mysqli_query($con, $sql);
      if($res){
     echo "loggedin successfully.";
    }
    else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    $nums = mysqli_num_rows($res);
    echo "nums == ".$nums;

    if($nums == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['phone'] = $phone;
      header("location:blood.php");
      
    }
    else{
      echo "<script>alert('Please Enter Valid Credentials Or Create an Account First')</script>";
    }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health-Ghar</title>
       
<link rel="icon" href="images/favicon.svg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
   
    <link rel="stylesheet" href="./css/login.css">
</head>
  <body>
    <div class="container">
      <a href = "./" id = "logo" class="posi"><img src="./images/logo.svg" height="50px" width="150px" alt="" ></a>
      <div class="forms-container">
        <div class="signin-signup">
          <form action="./login.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-address-book"></i>
              <input type="tel" placeholder="Mobile No" name="tel_login" id="tel_login">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass_login" />
            </div>
            <input type="submit" name = "login" value="Login" class="btn solid" />
          </form>
          <form action="./login.php" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-address-book"></i>
              <input type="tel" name="tel" id="tel" placeholder="Mobile No">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="cpass"/>
            </div>
            <input type="submit" class="btn" name = "signup" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Register yourself as a new visiter by just entering your basic details.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="images/medical.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
             Already Registered? No problem enter the credentials and login to your account.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/medical.svg" class="image" alt="" />
        </div>
      </div>
    </div>

   <script>
     const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const logo = document.querySelector("#logo");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  logo.classList.remove("posi");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  logo.classList.add("posi");
});
   </script>
  </body>
</html>