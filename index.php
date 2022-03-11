<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Health-Ghar</title>
    
<link rel="icon" href="images/favicon.svg" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      
      .button-group{
        
        display:flex;
        justify-content:space-between;
      }
      
      .button-group a{
        margin:4px;
      }
      
    </style>
  </head>
  <body>
    <?php
    include './partials/navbar.php'
    
    ?>

<!--------section starts here --------------------->

<section class="main-hero-section">
  <!-- left side code   -->
  <div class="hero-left-side" data-aos="fade-right">
    <h2>Your greatness is not what you have. It's what you give</h2>
    <div class="dynamic_container">
      <span class="fhide">Donate Blood</span>
      <h2 class="static_text_2">Donate</h2>
      <ul class="dynamic_text">
        <li>
          <span>Blood</span>
        </li>
        <li>
          <span>Life</span>
        </li>
      </ul>
    </div>
    <div class="button-group">
      <a href="login.php" class="donate-button">Log in</a>
    </div>
  </div>
  <!-- right side code   -->
  <div class="hero-right-side">
    <img src="./images/image_4.svg" alt="heropageImg" />
  </div>
</section>

<!-- ------------------second section ------------------ -->

<section class="common-section new-class-left" id="section-two">
  <!-- left side of section 2  -->
  <div class="left-side" data-aos="fade-right">
    <figure>
      <img src="./images/g45.png" class="checklist" alt="section2" />
    </figure>
  </div>
  
  <!-- right side of section 2  -->
  <div class="right-side" data-aos="fade-left">
        <h2>Health-Ghar Why Us ?</h2>
        <p>
          we create a best platform for user to get any emergency service in
          affordabele price and fast way people can find all healthcare service
          on health ghar, here we connect patient and donor directy wthout any
          broker. By co-innovating with you and across your business, we can
          help you create and deliver new or enhanced connections that do not
          currently exist between your business operations and customer
          experiences.
        </p>
      </div>
    </section>
    
    <!-- --------------------section 444 
    
    ---------------------------------------------------------------------- -->
    <section class="section-third" id="section-third">
      <h2>Our Services</h2>
      <p>What we give you ?</p>
      <div class="section-third-task">
        <div class="task-1" data-aos="zoom-out-up">
          <img src="./images/ambulance-svgrepo-com.svg" alt="icon1" />
          <h3>Ambulance</h3>
          <p>
            We provide quick ambulance facility of your nearby hospital
          </p>
        </div>
        
        <div class="task-2">
          <img src="./images/medicine-svgrepo-com (1).svg" alt="icon1" />
          <h3>Medical facilities</h3>
          <p>
            We give you a platform to buy best medicine at cheapest cost. 
          </p>
        </div>
        
        <div class="task-3" data-aos="zoom-out-up">
          <img src="./images/blood-156063.svg" alt="icon1" />
          <h3>Blood Services</h3>
          <p>
            We provide you a platform where donor can easily donate as well as the patient can get the blood.
          </p>
        </div>
      </div>
    </section>
    
    <section class="common-section" id="section-one">
      <!-- left side of section 2  -->
      <div class="right-side" data-aos="fade-left">
        <h2>Why You Should Donate Blood ?</h2>
        <p>
          Donating blood regularly has proved beneficial not only for the recipient but also the donor. It is helpful for the vital organs, and it reduces risk for chronic diseases such as cancer and stroke.<br>
          <br>
          For certain treatments like chemotherapy, blood is required on a daily basis, whereas victims of accident may require up to 100 units of blood transfusion. In India, blood shortage is more than 2 million pint and counting.
        </p>
      </div>
      
      <!-- right side of section 2  -->
      <div class="left-side" data-aos="fade-right">
        <figure>
          <img src="./images/undraw_medical_care_movn.svg" alt="section2" />
        </figure>
      </div>
    </section>
    
    
    <!------------------------------Donation---------------------------------------->
    
    <section class="section-third" id="section-donation" data-aos="fade-down">
      <h2>Help Us</h2>
      <p>Help us in completing our mission and be a part of our family.</p>
      <button onclick="window.open('./paytm.html')" class="butto">Help us by donating</button>
    </section>
    
    <!-- contact section -->
    <section id="contact" class="ti-contact">
      <center><h1>CONTACT</h1></center>
      <div class="row">
        <div
        class="col-md-3 col-sm-5 address wow fadeInUp"
        data-wow-delay="0.6s"
        >
        <div>
          <h3 class="ti-contact-h3">Address</h3>
          <p>Bajrang Chauraha , Yashoda Nagar , Kanpur.</p>
          <br />
          
          <p>PIN - 208001</p>
        </div>
        <div>
          <h3 class="ti-contact-h3">Email</h3>
          <p>
            <a href="mailto:info@fastes.in" class="ti-contact-link"
            >info@fastes.in</a
            >
          </p>
        </div>
        <div>
          <h3 class="ti-contact-h3">Phone</h3>
          <p>
            <a href="tel:88878 41538" class="ti-contact-link">8858948976</a>
            |
            <a href="tel:" class="ti-contact-link"></a>
          </p>
        </div>
      </div>
      <div
      class="col-md-8 col-sm-7 contact-form wow fadeInRight"
      data-wow-delay="0.9s"
      ></div>
    </div>
  </section>
  
  <!---------------------------------------------------- FOOTER------------------------------------------- -->
  
  <footer>
    <div class="logo-div">
      <img src="./images/logo.svg" alt="logo" />
      <p>
        
        Copyright &copy; HEALTH GHAR | Design by:
        <a
        rel="nofollow"
        href="https://gosafefast.com"
        title="free templates"
        >Health ghar</a
        >
      </p>
    </div>
    
    <div class="footer-menu">
        <div class="footer-div-2">
          <h4>Social Handles</h4>
          <ul class="social-icon">
            <li class="wow bounceIn" data-wow-delay="0.3s">
              <a
                href="https://www.facebook.com/Healthghar-103565235536198"
                class="fab fa-facebook"
              ></a>
            </li>
            <li class="wow bounceIn" data-wow-delay="0.6s">
              <a href="https://twitter.com/healthghar?t=kEgk2A8TDyLOOlh_BFtvwg&s=09" class="fab fa-twitter"></a>
            </li>
            <li class="wow bounceIn" data-wow-delay="0.9s">
              <a
                href="https://instagram.com/healthghar?utm_medium=copy_link"
                class="fab fa-instagram"
              ></a>
            </li>
            
          </ul>
        </div>
        <div class="footer-div-3"></div>

        <div class="footer-div-5">
          <h4>Image credits</h4>
          
    <a href='https://www.freepik.com/vectors/abstract'>Abstract vector created by pch.vector - www.freepik.com</a>
    <a href='https://www.freepik.com/vectors/people'>People vector created by pikisuperstar - www.freepik.com</a>
        </div>
      </div>
    </footer> 
</body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
      offset:400
    });
  </script>
</html>
