<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
  header("location:login.php");
  exit;
}

$con=mysqli_connect("localhost","u961466773_Fastes","Fastes@171","u961466773_fastes");
$msg="";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $location=$_POST['location'];
    $bloodgroup=$_POST['bloodgroup'];
    $usertype = $_POST['donor'];
    $sq="INSERT INTO `blood_details` (`id`, `name`, `location`, `bloodgroup`, `usertype`, `date_time`) VALUES (NULL, '$name', '$location', '$bloodgroup','$usertype', current_timestamp())";
    mysqli_query($con,$sq);
    $msg="Your Booking is accepted we will send you donor details very soon";
    
        $html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Mobile No</td><td>$mobile</td></tr><tr><td>Location</td><td>$location</td></tr><tr><td>Blood group</td><td>$bloodgroup</td></tr><tr><td>Age</td><td>$age</td></tr></table>";
        include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="fastes121@gmail.com";
	$mail->Password="Abhishek171@";
	$mail->SetFrom("fastes121@gmail.com");
	$mail->addAddress("fastes121@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="Ambulance service";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Ambulance Booked";
	}else{
		//echo "Error occur";
	}
    
}  
?>
<html>
    <head>
        <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- site title -->
    <title>HEALTH GHAR</title>
<link rel="icon" href="images/favicon.svg" />
<link rel="apple-touch-icon" href="images/2a.png" />
    <!-- Stylesheets css comes here -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/lightbox.css" />
    <link rel="stylesheet" href="css/themes/default/default.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Dosis:400,700"
      rel="stylesheet"
      type="text/css"
    />
    
    
    <style>

.input-group{
  width:100%;
}

</style>
        
    </head>
    <body>
      <!------------------------------------------------------ HEADER-------------------------- -->

      <?php
        require('./partials/navbar.php');
      ?>
    <!------------------------------------------ FORM------------------- -->
        <section id="contact" class="ti-contact">
      <div class="container">
                        <span style="color:black; font-size:20px;">
                  <?php echo $msg ?>
              </span>
          <h2><center>BLOOD SERVICE</center></h2>
           <form action="#" method="post" role="form">
            <div class="col-md-9 row-sm-6">
              <input name="name"
                class="form-control name"
                type="text" tabindex= "1" required autofocus
                placeholder="Your Name"
              />
            </div>       
              <div class="col-md-9 row-sm-6">
              <input name="location"
                class="form-control location"
                type="text" tabindex= "3" required
                placeholder="Location"
              />
              <div class="input-group col-md-14 row-sm-6">
                <select class="form-control location" id="inputGroupSelect02" tabindex="4" name="bloodgroup" required>
                  <option selected>Choose Your Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="AB+">AB+</option>
                  <option value="O+">O+</option>
                  <option value="B+">B+</option>
                  <option value="A-">A-</option>
                  <option value="AB-">AB-</option>
                  <option value="O-">O-</option>
                  <option value="B-">B-</option>
                </select>
              


              <!-- till here  -->


              </div>
              <div class="col-md-14 row-sm-6">
                <label for="viwe">Are you a ?</label><br>
              <input type="radio" id="donoor" name="donor" value="donor">
<label for="html">Donor</label>
<input type="radio" id="patient" name="donor" value="patient">
<label for="css">Patient</label>
              </div>
              
              
            <div class="col-md-offset-3 col-md-3 row-sm-6">
              <input name="submit"
                class="form-control"
                type="submit"
                onclick="send_message()"
                value="BOOK"
              />
            </div>
              <div class="send_message" style="height: 30px"></div>
              </form>
                </div>

                </section>
        
        
        
        <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <h1>Health Ghar</h1>
            <!-- <img src="images/logo.png" class="img-responsive" alt="footer logo"> -->
            <p>
              Copyright &copy; Health Ghar | Design by: 
              <a
                rel="nofollow"
                href="https://gosafefast.com"
                title="free templates"
                >Health Ghar</a
              >
            </p>
            <hr />
            <ul class="social-icon">
              <li class="wow bounceIn" data-wow-delay="0.3s">
                <a
                  href="https://www.facebook.com/Fastes-111720607795385"
                  class="fa fa-facebook"
                ></a>
              </li>
              <li class="wow bounceIn" data-wow-delay="0.6s">
                <a href="https://twitter.com/FASTES10" class="fa fa-twitter"></a>
              </li>
              <li class="wow bounceIn" data-wow-delay="0.9s">
                <a
                  href="https://www.instagram.com/fastes121/"
                  class="fa fa-instagram"
                ></a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>