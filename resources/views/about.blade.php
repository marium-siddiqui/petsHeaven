<!doctype html>
<html lang="en">
<head>
    <title>Pets Heaven - About</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Navbar Styles */
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white;
            transition: color 0.3s, transform 0.3s;
        }
        .navbar-brand:hover {
            color: #ffcc00 !important;
            transform: scale(1.1);
        }
        .nav-link {
            font-size: 1.1rem;
            color: white;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }
        .nav-link:hover {
            color: #ffcc00 !important;
            transform: translateY(-2px);
        }
        .btn-dark {
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }
        .btn-dark:hover {
            background-color: #f5990f !important;
            color: #fff !important;
            transform: scale(1.1);
        }
        /* About Styles */
        body {
            font-family: 'Poppins', sans-serif;
            color: white;
        }
        .hero-section {
            background-image: url('./img/about\ banner\ copy.jpg');
            background-size: cover;
            background-position: center;
            height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeIn 1s;
        }
        @media (max-width: 767px) {
            .hero-section {
                height: 400px;
            }
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to bottom, rgba(125, 122, 116, 0.6) 0%, rgba(0, 0, 0, 0) 100%);
            transition: background-image 0.5s ease;
        }
        .hero-section:hover .hero-overlay {
            background-image: linear-gradient(to bottom, rgba(125, 122, 116, 0.8) 0%, rgba(0, 0, 0, 0) 100%);
        }
        .hero-content {
            z-index: 1;
            max-width: 800px;
            padding: 0 20px;
            animation: fadeInUp 1s;
        }
        .hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInDown 1s;
        }
        @media (max-width: 767px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
        }
        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s;
        }
        @media (max-width: 767px) {
            .hero-content p {
                font-size: 1.2rem;
            }
        }
        .hero-content .btn-dark {
            padding: 0.75rem 1.5rem;
            font-size: 1.25rem;
            border-radius: 50px;
            animation: fadeInUp 1.2s;
        }
        .about-section, .services-section, .faq-section {
            padding: 80px 20px;
            animation: fadeIn 1s;
        }
        .about-content, .services-content, .faq-content {
            max-width: 800px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            animation: fadeIn 1s;
        }
        @media (max-width: 767px) {
            .about-content, .services-content, .faq-content {
                grid-template-columns: 1fr;
            }
        }
        .about-text h2, .services-text h2, .faq-text h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInDown 1s;
        }
        .about-text p, .services-text p, .faq-text p {
            line-height: 1.6;
            margin-bottom: 2rem;
            animation: fadeInUp 1s;
        }
        .about-image img, .services-image img, .faq-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0.1);
            transition: transform 0.5s;
        }
        .about-image img:hover, .services-image img:hover, .faq-image img:hover {
            transform: scale(1.05);
        }
        .services-content {
            animation: slideInLeft 1s;
        }
        .faq-content {
            animation: zoomIn 1s;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
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
</head>
<body style="background-image: url('./img/sideways-cute-dog-standing.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
<nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Pets Heaven</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link active" href="/index" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/adopt">Adopt a pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/care">Care</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rescue">Rescue</a>
                    </li>
                </ul>
                <a href="/about" class="btn btn-dark">Donate</a>
            </div>
        </div>
    </nav>
<main style="background-image: url('./img/sideways-cute-dog-standing.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>About Pets Heaven</h1>
            <p>Welcome to Pets Heaven, where we believe every pet deserves a loving home. We are a dedicated team of animal enthusiasts committed to providing the best care for our furry friends and helping them find their forever homes.</p>
            <a href="./adopt.html" class="btn btn-dark">Adopt a Pet</a>
        </div>
    </section>

    <section class="about-section">
        <div class="about-content">
            <div class="about-text">
                <h2>Who We Are</h2>
                <p>Pets Heaven is a non-profit organization that aims to rescue, rehabilitate, and rehome animals in need. Our dedicated team of volunteers and professionals works tirelessly to ensure every pet receives the love, care, and attention they deserve. We partner with local shelters and rescue groups to maximize our impact and reach.</p>
            </div>
            <div class="about-image">
                <img src="https://tns.world/wp-content/uploads/2023/09/0-44.jpg" alt="About Us">
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="services-content">
            <div class="services-image">
                <img src="https://static.thehoneycombers.com/wp-content/uploads/sites/2/2015/09/pet-adoption-singapore-animal-shelters-singapore-Kitten-Sanctuary-via-Facebook-900x643.png" alt="Our Services">
            </div>
            <div class="services-text">
                <h2>Our Services</h2>
                <p>We offer a range of services to support pet owners and their furry friends. From adoption events and pet care workshops to veterinary services and behavioral training, we are here to assist you in providing the best possible care for your pets. Join us at our upcoming events or contact us to learn more about how we can help you and your pet.</p>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="faq-content">
            <div class="faq-text">
                <h2>Frequently Asked Questions</h2>
                <p>Have questions about our organization or the adoption process? Check out our FAQ section to find answers to the most common queries. From how to adopt a pet to what to expect during the adoption process, we provide all the information you need to make informed decisions and ensure a smooth transition for your new family member.</p>
            </div>
            <div class="faq-image">
                <img src="https://st3.depositphotos.com/1032808/12618/i/450/depositphotos_126187284-stock-photo-funny-cat-on-a-white.jpg" alt="FAQ">
            </div>
        </div>
    </section>
</main >
   
 <!-- Footer -->
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

    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBogGz1CNUQOVQNPhT3X1BI9SnuD7Kj8k5jk5R8cvhZpHYGm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0ey1VzHdM1vhS0aTXMOY0vQ5h5GZfF1TwTTq7lAUdflmKp7A5Y5gCI8C" crossorigin="anonymous"></script>
</body>
</html>
