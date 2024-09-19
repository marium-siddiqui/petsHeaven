<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <style>
      
      

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
            color: rgb(0, 0, 0);
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
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
  
}

header {
    background: #151414fc;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

main {
    padding: 1rem;
}

.faq-container {
    max-width: 800px;
    margin: auto;
}

.accordion {
    background-color: #ede7e78e;
    color: rgb(0, 0, 0);
    cursor: pointer;
    padding: 1rem;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
    border-radius: 5px;
    margin-top: 10px;
    font-weight: bold;
}

.accordion:hover {
    background-color: #398da7;
}

.panel {
    padding: 0 1rem;
    background-color: rgba(255, 255, 255, 0.87);
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    border: 1px solid #ddd;
    border-top: none;
    border-radius: 0 0 5px 5px;
}

.panel p {
    margin: 1rem 0;
}


/* Accordion styles omitted for brevity */

.testimonials {
    background: #ffffff84;
    padding: 2rem;
    margin: 2rem auto;
    max-width: 800px;
    border: 5px solid #000000;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    position: relative;
}

.testimonials h2 {
    text-align: center;
    color: #000000;
    margin-bottom: 1.5rem;
    font-weight: bolder;
}

.testimonial-slider {
    display: flex;
    overflow: hidden;
    position: relative;
}

.testimonial-slide {
    min-width: 100%;
    transition: transform 0.5s ease;
}

.testimonial-content {
    background: #f9f9f9;
    border-left: 5px solid #000000;
    padding: 1.5rem;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    margin-right: 1rem;
    
    
}

.testimonial-content p {
    margin: 0;
}

.author {
    font-weight: bold;
    margin-top: 1rem;
    color: #555;
}

.testimonial-nav {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}

.testimonial-nav button {
    background: #1a1b1c;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
    margin: 0 0.5rem;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.testimonial-nav button:hover {
    background-color: #000000;
}
a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
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
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
            <a style="color: #fff;" class="navbar-brand" href="#">Pets Heaven</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link active" href="/index" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li  class="nav-item">
                        <a  style="color: #fff;" class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link" href="/adopt">Adopt a pet</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link" href="/care">Care</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #ffffff;" class="nav-link" href="/donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link" href="/events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link" href="/rescue">Rescue</a>
                    </li>
                </ul>
                <a class="btn btn-dark" href="#" role="button">Donate </a>
            </div>
        </div>
    </nav>
   
    <header>
        <h1>Pets Heaven - Frequently Asked Questions</h1>
    </header>
    <main style="  background-image: url(./img/chubby-domestic-cat-leaning-brown-puppy-lying-white-surface.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
        <section class="faq-container">
            <div class="faq">
                <button class="accordion">What is Pets Heaven?</button>
                <div class="panel">
                    <p>Pets Heaven is your one-stop destination for all things pet-related. We offer a variety of pet supplies, grooming services, and advice to help you take the best care of your furry friends.</p>
                </div>
            </div>
           
            <div class="faq">
                <button class="accordion">How can I adopt a pet from Pets Heaven?</button>
                <div class="panel">
                    <p>To adopt a pet from Pets Heaven, visit our Adoption Center page where you can view available pets and their profiles. You can then fill out an adoption application form and our team will guide you through the process.</p>
                </div>
            </div>
            <div class="faq">
                <button class="accordion">What is the adoption process like?</button>
                <div class="panel">
                    <p>Our adoption process involves several steps: filling out an application, a review of your application, a meet-and-greet with the pet, and finally, an adoption fee payment. We aim to ensure a good match between you and your new pet.</p>
                </div>
            </div>
            <div class="faq">
                <button class="accordion">How do you care for the pets before adoption?</button>
                <div class="panel">
                    <p>Before adoption, our pets receive thorough health checks, vaccinations, and any necessary treatments. They are also provided with proper nutrition and socialization to ensure they are happy and healthy.</p>
                </div>
            </div>
            <div class="faq">
                <button class="accordion">Do you offer any post-adoption support?</button>
                <div class="panel">
                    <p>Yes, we offer post-adoption support to help you with any questions or concerns you may have after bringing your new pet home. We provide resources and guidance on pet care and behavior.</p>
                </div>
            </div>
           
            </div>
        </section>
        <section class="faq-container">
            <!-- FAQs code as previously provided -->
        </section>
        <br>
        <br>
        <section class="testimonials">
            <h2>What Our Customers Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p>"Pets Heaven has been a lifesaver for me and my furry friends! The quality of the products is top-notch, and the customer service is outstanding. Highly recommended!"</p>
                        <p class="author">- Jane Doe</p>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p>"I love shopping at Pets Heaven. They always have exactly what I need, and their delivery is super fast. My pets are always happy with their new toys!"</p>
                        <p class="author">- John Smith</p>
                    </div>
                </div>
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <p>"The grooming services at Pets Heaven are fantastic. My dog always comes back looking and feeling great. The staff is friendly and professional. A+!"</p>
                        <p class="author">- Emily Davis</p>
                    </div>
                </div>
                <!-- Add more testimonial slides as needed -->
            </div>
            <div class="testimonial-nav">
                <button class="prev">&lt;</button>
                <button class="next">&gt;</button>
            </div>
        </section>
        </main>
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
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    // Testimonial Slider Functionality
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var slides = document.getElementsByClassName("testimonial-slide");
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.transform = 'translateX(' + (-slideIndex * 100) + '%)';
        }
    }

    document.querySelector(".next").addEventListener("click", function() {
        var slides = document.getElementsByClassName("testimonial-slide");
        slideIndex = (slideIndex + 1) % slides.length;
        showSlides();
    });

    document.querySelector(".prev").addEventListener("click", function() {
        var slides = document.getElementsByClassName("testimonial-slide");
        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlides();
    });
});

</script>
