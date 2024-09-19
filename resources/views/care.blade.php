<!doctype html>
<html lang="en">

<head>
  <title>Pets Heaven - Services</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Navbar Styles */
    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
      color: white;
      transition: color 0.3s;
    }

    .navbar-brand:hover {
      color: #ffcc00 !important;
      transform: scale(1.1);
    }

    .nav-link {
      font-size: 1.1rem;
      color: white;
      font-weight: bold;
      transition: color 0.3s;
    }

    .nav-link:hover {
      color: #ffcc00 !important;
      transform: translateY(-2px);
    }

    .btn-dark {
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-dark:hover {
      background-color: #f5990f !important;
      color: #fff !important;
      transform: scale(1.1);
    }

    /* Hero Section Styles */
    .hero {
      background-image: url('./img/services\ banner.jpg');
      background-size: cover;
      background-position: center;
      color: rgb(0, 0, 0);
      height: 550px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      animation: fadeInDown 1s ease-in-out;
    }

    .hero p {
      font-size: 1.5rem;
      margin-bottom: 30px;
      animation: fadeInUp 1s ease-in-out;
    }

    .hero button {
      background-color: #f5990f;
      border: none;
      color: white;
      cursor: pointer;
      font-size: 20px;
      padding: 15px 30px;
      transition: background-color 0.3s ease;
      animation: fadeInUp 1.5s ease-in-out;
    }

    .hero button:hover {
      background-color: #e68a00;
    }

    /* Keyframes for Animations */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Main Content Styles */
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 40px;
    }

    .care-section {
      background-color: #f1f1f1;
      border-radius: 10px;
      box-shadow: 0 8px 8px 0 rgb(0, 0, 0);
      margin: 20px;
      max-width: 800px;
      overflow: hidden;
      text-align: center;
      width: 100%;
      transition: transform 0.4s ease;
    }

    .care-section:hover {
      transform: scale(1.05);
    }

    .care-section img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      transition: transform 0.4s ease;
    }

    .care-section:hover img {
      transform: scale(1.1);
    }

    .care-section h2 {
      margin: 20px 0 10px;
    }

    .care-section p {
      margin: 10px 0;
    }

    .care-section button {
      background-color: #f5990f;
      border: none;
      color: white;
      cursor: pointer;
      font-size: 16px;
      margin: 20px 0;
      padding: 10px 20px;
      transition: background-color 0.3s ease;
    }

    .care-section button:hover {
      background-color: #e68a00;
    }

    /* Back to Top Button */
    #backToTop {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #f5990f;
      color: white;
      border: none;
      border-radius: 50%;
      padding: 10px 15px;
      font-size: 20px;
      cursor: pointer;
      display: none;
      transition: background-color 0.3s ease;
    }

    #backToTop:hover {
      background-color: #e68a00;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .container {
        padding: 20px;
      }

      .care-section {
        max-width: 100%;
      }

      .care-section img {
        height: 300px;
      }

    }
 

    
    a,
        a:active,
        a:focus {
            color: #ffffff;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
        section {
            padding: 60px 0;
           /* min-height: 100vh;*/
        }

.main-footer{
    position:relative;
    padding:110px 0px 0px;
    background-color: #000000;
    background-repeat:repeat-x;
    background-position:right bottom;
}

.main-footer .footer-widget{
    position:relative;
    margin-bottom:40px;
}

.main-footer .widgets-section{
    position:relative;
    padding-bottom:60px;
}

.main-footer .footer-widget h2{
    position:relative;
    font-size:22px;
    font-weight:600;
    color:#ffffff;
    line-height:1.2em;
    margin-bottom:30px;
    margin-top:25px;
    text-transform:capitalize;
}

.main-footer .about-widget{
    position:relative;
}

.main-footer .about-widget .logo {
    position: relative;
    margin-bottom: 15px;
    width: 210px;
}
.main-footer .about-widget .text{
    position:relative;
}

.main-footer .about-widget .text p{
    position:relative;
    color:#ffffff;
    font-size:15px;
    line-height:1.7em;
    margin-bottom:20px;
}

.main-footer .about-widget .text p:last-child{
    margin-bottom:0px;
}

/* Footer List */

.main-footer .footer-list{
    position:relative;
}

.main-footer .footer-list li{
    position:relative;
    margin-bottom:17px;
}

.main-footer .footer-list li a{
    position:relative;
    color:#ffffff;
    font-size:15px;
    padding-left:15px;
    -webkit-transition:all 300ms ease;
    -ms-transition:all 300ms ease;
    -o-transition:all 300ms ease;
    -moz-transition:all 300ms ease;
    transition:all 300ms ease;
}

.main-footer .footer-list li a:hover{
    text-decoration:underline;
    color:#ffffff;
}

.main-footer .footer-list li a:before{
    position:absolute;
    content:'\f105';
    left:0px;
    top:0px;
    color:#ffb300;
    font-weight:800;
    font-family: 'Font Awesome 5 Free';
}

/*Gallery Widget*/

.main-footer .gallery-widget{
    position:relative;
    max-width:350px;
}

.main-footer .gallery-widget .images-outer{
    position:relative;
    margin:0px -3px;
}

.main-footer .gallery-widget .image-box{
    position:relative;
    float:left;
    width:33.333%;
    padding:0px 5px;
    margin-bottom:10px;
}

.main-footer .gallery-widget .image-box img{
    position:relative;
    display:block;
    width:100%;
    border-radius:4px;
    -webkit-transition:all 300ms ease;
    -ms-transition:all 300ms ease;
    -o-transition:all 300ms ease;
    -moz-transition:all 300ms ease;
    transition:all 300ms ease;
}

.main-footer .gallery-widget .image-box img:hover{
    opacity:0.70;   
}

/* Info List */

.main-footer .info-list{
    position:relative;
}

.main-footer .info-list li{
    position:relative;
    color:#ffffff;
    font-size:15px;
    line-height:1.8em;
    margin-bottom:12px;
}

.main-footer .info-widget .social-links{
    position:relative;
    float:left;
    padding:15px 0px;
}

.main-footer .info-widget .social-links li{
    position:relative;
    margin-right:8px;
    display:inline-block;
}

.main-footer .info-widget .social-links li:last-child{
    margin-right:0px;
}

.main-footer .info-widget .social-links li a{
    position:relative;
    color: #ffffff;
    width:50px;
    height:50px;
    line-height:50px;
    text-align:center;
    border-radius:50%;
    display:inline-block;
    -webkit-transition:all 300ms ease;
    -moz-transition:all 300ms ease;
    -ms-transition:all 300ms ease;
    -o-transition:all 300ms ease;
    transition:all 300ms ease;
}

.main-footer .info-widget .social-links li.google a{
    background-color:#dd4b39;
}

.main-footer .info-widget .social-links li.facebook a{
    background-color:#4a6fbe;
}

.main-footer .info-widget .social-links li.twitter a{
    background-color:#55acee;
}

.main-footer .info-widget .social-links li.instagram a{
    background-color:#ea4c89;
}

.main-footer .info-widget .social-links li.vimeo a{
    background-color:#1ab7ea;
}

.main-footer .footer-bottom{
    position:relative;
    padding:20px 0px;
    border-top:1px solid #ffffff;
}

.main-footer .footer-bottom .footer-nav{
    position:relative;
    text-align:right;
}

.main-footer .footer-bottom .footer-nav li{
    position:relative;
    padding-right:10px;
    margin-right:10px;
    line-height:1.1em;
    display:inline-block;
    border-right:1px solid #000000;
}

.main-footer .footer-bottom .footer-nav li:last-child{
    padding-right:0px;
    margin-right:0px;
    border-right:none;
}

.main-footer .footer-bottom .footer-nav li a{
    position:relative;
    color:#ffffff;
    font-size:15px;
    -webkit-transition:all 300ms ease;
    -moz-transition:all 300ms ease;
    -ms-transition:all 300ms ease;
    -o-transition:all 300ms ease;
    transition:all 300ms ease;
}

.main-footer .footer-bottom .footer-nav li a:hover{
    color:#ff6666;
    text-decoration:underline;
}
    </style>
  </style>
</head>

<body >
  <nav class="navbar navbar-expand-sm navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Pets Heaven</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/adopt">Adopt a Pet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/care">Care</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/events">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/our-gallery">Our Gallery</a>
          </li
        </ul>
        <a class="btn btn-dark" href="/donate" role="button">Donate</a>
      </div>
    </div>
  </nav>

  <div class="hero">
    <div class="text-center">
      <h1>Our Services</h1>
      <p>Comprehensive Care for Your Pets</p>
    </div>
  </div>

  <div class="container">
    <h1 style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: black; font-weight: bold">
      Explore Our Services</h1>
    <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: black; font-size: 20px">
      At Pets Heaven, we offer a wide range of services designed to keep your pet healthy, happy, and thriving. From professional grooming to veterinary care, we've got everything your pet needs.
    </p>
  </div>

  <div class="container">
    <div class="care-section">
      <img src="./img/yorkshire-terrier-getting-procedure-groomer-salon-young-woman-white-tshirt-combing-little-dog-yorkshire-terrier-puppy-blue-table.jpg" alt="Grooming Services">
      <h2>Grooming Services</h2>
      <p>Keep your pet looking and feeling their best with our professional grooming services.</p>
      
    </div>
    <div class="care-section">
      <img src="./img/veterinarian-taking-care-pet.jpg" alt="Veterinary Care">
      <h2>Veterinary Care</h2>
      <p>Our expert veterinarians provide the highest quality care to ensure your pet's well-being.</p>
      
    </div>
    <div class="care-section">
      <img src="./img/rescue.jpg" alt="Boarding Service">
      <h2>Boarding Services</h2>
      <p>Whether you're away for a weekend or an extended trip, we provide safe, comfortable boarding for your pets.</p>
     
    </div>
    <div class="care-section">
      <img src="./img/therapy-dog-giving-woman-paw.jpg" alt="Daycare Services">
      <h2>Daycare Services</h2>
      <p>Need a safe place for your pet during the day? Our daycare service is the perfect solution.</p>
     
    </div>
  </div>

    <footer class="main-footer">
      <div class="container">
          <!--Widgets Section-->
          <div class="widgets-section">
              <div class="row clearfix">
                  
                  <!--Column-->
                  <div class="big-column col-lg-6 col-md-12 col-sm-12">
                      <div class="row clearfix">
                      
                          <!--Footer Column-->
                          <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                              <div class="footer-widget about-widget">
                                  <div class="logo">
                                      <a href="#"><img src="./img/Black_and_Grey_Illustrative_Pet_Shop_Logo-removebg-preview (1).png" alt=""></a>
                                  </div>
                                  <div class="text">
                                      <p>Pets Heaven is dedicated to connecting loving families with adorable pets. Our mission is to ensure every pet finds a safe and happy home.</p>
                                      <p>We believe that every pet deserves a chance to be part of a loving family. That's why we work tirelessly to rescue and rehabilitate animals in need. Our team of passionate volunteers and professionals provides medical care, foster homes, and adoption services to give these animals a second chance at life.</p>
                                  </div>
                              </div>
                          </div>
                          
                          <!--Footer Column-->
                          <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                              <div class="footer-widget links-widget">
                                  <h2>Quick Links</h2>
                                  <ul class="footer-list">
                                      <li><a href="#">Adopt</a></li>
                                      <li><a href="#">About Us</a></li>
                                      <li><a href="#">Contact Us</a></li>
                                      <li><a href="#">Care</a></li>
                                      <li><a href="#">Privacy Policy</a></li>
                                  </ul>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                  
                   <!--Column-->
                  <div class="big-column col-lg-6 col-md-12 col-sm-12">
                      <div class="row clearfix">
                      
                          <!--Footer Column-->
                          <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                              <div class="footer-widget gallery-widget">
                                  <h2>Gallery</h2>
                                  <div class="widget-content">
                                      <div class="http://t.commonsupport.com/morris/images-outer clearfix">
                                          <!--Image Box-->
                                          <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="./img/close-up-beautiful-pet-cat.jpg" alt=""></a></figure>
                                          <!--Image Box-->
                                          <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="./img/img3.jpeg" alt=""></a></figure>
                                          <!--Image Box-->
                                          <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="./img/cat-dog-being-affectionate-showing-love-towards-each-other.png" alt=""></a></figure>
                                          <!--Image Box-->
                                          <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="./img/rural-life-lifestyle-growing-rabbits.jpg" alt=""></a></figure>
                                          <!--Image Box-->
                                          <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="./img/v2.png" alt=""></a></figure>
                                          <!--Image Box-->
                                          <figure class="image-box"><a href="#" class="lightbox-image" data-fancybox="footer-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="./img/siblings-spending-time-together-with-their-dog.jpg" alt=""></a></figure>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <!--Footer Column-->
                          <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                              <div class="footer-widget info-widget">
                                  <h2>Contact Info</h2>
                                  <ul class="info-list">
                                      <li>karachi,pakistan</li>
                                      <li>03262297233</li>
                                    
                                  </ul>
                                  <!-- Social Links -->
                                  <ul class="social-links">
                                      <li class="google"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                      <li class="facebook"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                      <li class="instagram"><a href="#"><span class="fab fa-instagram"></span></a></li>
                                      <li class="twitter"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                  </ul>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
  
      <!-- Footer Bottom -->
      <div class="footer-bottom">
          <div class="container">
              <div class="row clearfix">
                  
                  <div class="column col-lg-6 col-md-12 col-sm-12">
                      <div class="copyright"><span class="theme_color">Pets Heaven</span> &copy; 2024 All Right Reserved</div>
                  </div>
                  <div class="column col-lg-6 col-md-12 col-sm-12">
                      <ul class="footer-nav">
                          <li><a href="#">Terms of Service</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                      </ul>
                  </div>
                  
              </div>
          </div>
      </div>
  
  </footer>
  

  <!-- Back to Top Button -->
  <button id="backToTop" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- Smooth Scrolling and Back to Top Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var backToTopButton = document.getElementById('backToTop');

      window.addEventListener('scroll', function () {
        if (window.scrollY > 300) {
          backToTopButton.style.display = 'block';
        } else {
          backToTopButton.style.display = 'none';
        }
      });
    });

    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    document.getElementById('appointmentForm').addEventListener('submit', function (event) {
      event.preventDefault();
      // Add your validation logic here

      // If the form is valid, hide the modal
      var form = this;
      if (form.checkValidity()) {
        var modal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));
        l.hide();
        form.reset();
        alert('Your appointment has been booked successfully!');
      }
    });
  </script>
</body>

</html>
