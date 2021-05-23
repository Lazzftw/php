<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opus lab</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="styles.css">
    <link href="http://fonts.cdnfonts.com/css/lemonmilk" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/louis-george-cafe" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
<div class="header-background ">
    <div id="nav" class="sticky-nav">
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
          <a class="navbar-brand" href="#">
              <img src="img/logo1.png" class="navbar-logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span></span>
            <span></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#ourservices" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#ourservices">Web development</a></li>
                  <li><a class="dropdown-item" href="#ourservices">graphic design</a></li>
                  <li><a class="dropdown-item" href="#ourservices">Digital Marketing</a></li>
                  <li><a class="dropdown-item" href="#ourservices">video montage</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="btn" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <div class="text-box">
      <div data-aos="zoom-in">
    <h1 class="heading">Your career starts here!</h1>
    <a href="#" class="hero-btn" >Start now</a>
    </div> 
    </div> 
</div>
<div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-lg-6 column-left ">

      </div>
       <div class="col-xs-12 col-sm-6 col-lg-6 column-right">
        <div data-aos="fade-up">
        <h1 class="section-title">About us</h1>
        <p class="paragraphe">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mi nec 
        nulla interdum maximus. Aliquam pellentesque enim non consectetur porta. Quisque consequat non 
        dui at bibendum. Nullam est arcu, viverra non quam quis, ultrices rhoncus odio. Sed ac lacus in 
        mauris lobortis iaculis. Donec efficitur ligula ut lobortis imperdiet. Nam efficitur erat leo, 
        eu dignissim mauris pulvinar eget. Praesent elementum, libero dictum pulvinar efficitur, nibh
         neque vehicula est, pellentesque lacinia nibh felis sit amet sem. Morbi in eleifend arcu</p>
        </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="ourservices">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-6">
          <div data-aos="fade-up"
     data-aos-duration="3000">
        <h1 class="service-section">What we do best</h1>
        <p class="paragraphe">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mi nec nulla 
            interdum maximus. Aliquam pellentesque enim non consectetur porta. Quisque 
            consequat non dui at bibendum. 
        </p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6 service1">
              <div data-aos="fade-up"
                 data-aos-duration="3000">
              <h1 class="service-title-1">Web development</h1>
              <p class="service-paragraphe-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mi 
                nec nulla interdum maximus. Aliquam pellentesque enim non consectetur porta.
              </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6 service2">
              <div data-aos="fade-up"
                data-aos-duration="3000">
                <h1 class="service-title-2">Graphic design</h1>
                <p class="service-paragraphe-2">
                  Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nullam id mi nec nulla interdum maximus.
                  Aliquam pellentesque enim non consectetur porta.
                </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6 service1">
              <div data-aos="fade-up"
              data-aos-duration="3000">
              <h1 class="service-title-1">Digital marketing</h1>
              <p class="service-paragraphe-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id mi 
                nec nulla interdum maximus. Aliquam pellentesque enim non consectetur porta.
              </p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6 service2">
              <div data-aos="fade-up"
               data-aos-duration="3000">
                <h1 class="service-title-2">Video montage</h1>
                <p class="service-paragraphe-2">
                  Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nullam id mi nec nulla interdum maximus.
                  Aliquam pellentesque enim non consectetur porta.
                </p>
                </div>
            </div>
        </div>

    </div>
         <div class="col-xs-12 col-sm-6 col-lg-6 our-service-right">
            
      </div>
    </div>
</div>
<div class="container-fluid" id="team">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-6 portfolio">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-6 gallery img-1"></div>
                <div class="col-xs-12 col-sm-6 col-lg-6 gallery img-2"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-6 gallery img-3"></div>
                <div class="col-xs-12 col-sm-6 col-lg-6 gallery img-4"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-6 gallery img-5"></div>
                <div class="col-xs-12 col-sm-6 col-lg-6 gallery img-6"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6">
          <div data-aos="fade-right"
           data-aos-offset="300"
          data-aos-easing="ease-in-sine">
            <div class="row">
                <div class="text-left-block">
                    <div class="left-center-text">
                        <div class="left-center-part">
                            <h2 class="team-section">Meet our team</h2>
                            <p class="team-paragraphe">
                            Lorem ipsum dolor sit amet,consectetur adipiscing elit. 
                            Nullam id mi nec nulla interdum maximus.
                            Aliquam pellentesque enim non consectetur porta.
                        </p>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-6 block-team">
                                <img src="img/ahmed.jpg" alt="image1" class="team-member">
                                <h3>Ahmed Ben Bouzid</h3>
                                <small>Founder & CEO</small>
                                <p class="paragraph">
                                 Lorem ipsum dolor sit amet,consectetur adipiscing elit.  
                                </p>
                                <div class="social-media">
                                   <a href="https://www.facebook.com/ahmed.benbouzid.35"> <img src="img/facebook.png" alt="fb" class="fb-image"></a>
                                   <a href="https://www.linkedin.com/in/ahmed-ben-bouzid-89611a141"><img src="img/linkedin.png" alt="link" class="link-image"></a>
                                   <a href="https://www.instagram.com/ahmed_benbouzid/?hl=fr"> <img src="img/insta.png" alt="insta" class="insta-image"></a>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-6 block-team">
                                <img src="img/siwar.jpg" alt="image2" class="team-member">
                                <h3>Siwar Gharbi</h3>
                                <small>Graphic designer</small>
                                <p class="paragraph">
                                 Lorem ipsum dolor sit amet,consectetur adipiscing elit.  
                                </p>
                                <div class="social-media">
                                   <a href="https://www.facebook.com/Siwar056"><img src="img/facebook.png" alt="fb" class="fb-image"></a>
                                   <a href="https://www.linkedin.com/in/siwar-gharbi-4a6278192"><img src="img/linkedin.png" alt="link" class="link-image"></a>
                                   <a href="https://www.instagram.com/siwar_ghr/?hl=fr"><img src="img/insta.png" alt="insta" class="insta-image"></a>
                                </div>
                            </div>
                          
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-6 contact-left">
          <div data-aos="flip-left"
           data-aos-easing="ease-out-cubic"
           data-aos-duration="2000">

          <div class="text-left-block">
              <div class="left-center-text">
                  <div class="left-center-part">
                      <h2 class="contact-section">Get in touch</h2>
                      <p class="paragraph">
                          We are here to help you <strong>Monday through Saturday</strong>, from 8:00 AM
                          to 10:00 PM <br> Contact us via <strong>Phone :</strong>
                          <a href="#" class="phone-mail-link">(+216) 24 305 182</a>
                          or <strong>Email</strong> :
                          <a href="#" class="phone-mail-link">labopus.info@gmail.com</a>
                      </p>
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-lg-12 ">
                              <form id="contact-form" name="contact-form" method="POST" data-name="contact-form">
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-6 col-lg-6">
                                          <div class="form-group">
                                            <span id="errorNom"></span>
                                              <input type="text" id="name" class="form form-control" placeholder="Name*" name="name" data-name="Name" required>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <span id="errorPrenom"></span>
                                            <input type="text" id="Lastname" class="form form-control" placeholder="Last name*" name="lastname" data-name="Last name" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <span id="errorEmail"></span>
                                            <input type="email" id="email" class="form form-control" placeholder="Email address*" name="email" data-name="Email address" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="tel" id="phone" class="form form-control" placeholder="Phone number*" name="phone" data-name="Phone number" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                        <textarea id="text-area" class="form textarea form-control " placeholder="Your message here*" name="massage" data-name="Text Area" required >

                                        </textarea>
                                        </div>
                                        <span class="sub-text">* Required fields</span>
                                    </div>
                                  </div>
                                  <button type="submit" id="valid-form" class="btn btn-color">Send message</button>
                              </form>
                          </div>
                      </div>
                    </div>  
                  </div>
              </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6 contact-right">    
     </div>
  </div>
</div>
<footer id="footer" class="footer-1">
  <div data-aos="fade-up"
     data-aos-anchor-placement="top-center">

    <div class="main-footer widgets-dark typo-light">
    <div class="container">
    <div class="row">
      
    <div class="col-xs-12 col-sm-6 col-md-3">
    <div class="widget subscribe no-box">
    <h5 class="widget-title">
     <img src="img/logo.png">Opus Lab <span></span></h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Nullam a ipsum sollicitudin, viverra magna non, pretium velit. </p>
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-3">
    <div class="widget no-box">
    <h5 class="widget-title">Our services<span></span></h5>
    <ul class="thumbnail-widget">
    <li>
    <div class="thumb-content"><a>Web develoment</a></div> 
    </li>
    <li>
    <div class="thumb-content"><a>Graphic design</a></div> 
    </li>
    <li>
    <div class="thumb-content"><a>Digital marketing</a></div> 
    </li>
    <li>
    <div class="thumb-content"><a>Video montage</a></div> 
    </li>
    </ul>
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-3">
    <div class="widget no-box">
    <h5 class="widget-title">Get Started<span></span></h5>
    <p class="paragraph-3">Find out what we can do for you!</p>
    <a class="btn" href="#." target="_blank">Register Now</a>
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-3">
    
    <div class="widget no-box">
    <h5 class="widget-title">Contact Us<span></span></h5>
    <p class="paragraph-3"><a href="#" >Phone: (+216) 24 305 182</a></p>
    <p class="paragraph-3"><a href="labopus.info@gmail.com" title="glorythemes">labopus.info@gmail.com</a></p>
    <ul class="social-footer2">
    <li class=""><a href="https://www.facebook.com/OpusLab1/" target="_blank" title="Facebook"><img alt="Facebook" width="30" height="30" src="data:image/png;base64,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"></a></li>
    <li class=""><a title="instagram" target="_blank" href="https://www.instagram.com/opus__lab/?hl=fr"><img alt="instagram" width="30" height="30" src="data:image/png;base64,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"></a></li>
    </ul>
    </div>
    </div>
    
    </div>
    </div>
    </div>
      
    <div class="footer-copyright">
    <div class="container">
    <div class="row">
    <div class="col-md-12 text-center">
    <p class="paragraph-3">Designed with <img src="img/heart1.png" style="font-size: 12px;"> by Sirine Hemdane</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </footer>
<a href="#" class="gotopbtn">
    <img src="img/fleche.png" class="fleche-img">
</a>
<script>
  AOS.init();
</script>
</body>
</html>