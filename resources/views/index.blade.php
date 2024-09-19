<!doctype html>
<html lang="en">
<head>
    <title>Pets Heaven</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    
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
        /* Banner Styles */
        .banner {
            position: relative;
            overflow: hidden;
            perspective: 1000px;
            
        }
        .banner img {
            width: 100%;
            height: auto;
            transition: transform 1s;
        }
        .banner:hover img {
            transform: scale(1.05) rotateY(10deg);
        }

        /* CTA Section Styles */
      
        .cta-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            border-radius: 10px;
        }
        .cta-section:hover {
            transform: scale(1.02);
        }
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        .cta-section h2:hover {
            transform: translateY(-5px);
        }
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Video Container Styles */
        .video-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding-top: 56.25%; /* 16:9 aspect ratio */
            transition: transform 0.3s;
        }
        .video-container:hover {
            transform: scale(1.05) rotateY(5deg);
        }
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: solid 10px;
            transition: transform 0.3s;
        }
        .video-container video:hover {
            transform: scale(1.1);
        }

        /* Content Styles */
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .content:hover {
            transform: translateY(-10px) rotateX(5deg);
        }
        .content h1 {
            font-size: 50px;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: #000;
        }
        .content h3, .content h4 {
            font-size: 16px;
            margin-bottom: 15px;
        }
        .btn {
            display: inline-block;
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #ffcc00;
        }

        /* Features Section Styles */
        .feature-title {
            text-align: center;
            font-size: 32px;
            color: #000;
            margin: 40px 0;
        }
        .feature-video {
            transition: transform 0.3s;
            border: solid 10px;
        }
        .feature-video:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .col-lg-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .video-container {
                padding-top: 75%;
            }
            .content {
                margin-top: 20px;
            }
            .content h1 {
                font-size: 32px;
            }
            .content h3, .content h4 {
                font-size: 14px;
            }
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            color: #3F444C;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-in-out;
        }

        video {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        video:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .gallery-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .gallery-img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 767px) {
            video {
                width: 100%;
                height: auto;
            }

            .gallery-img {
                height: auto;
                margin-bottom: 20px;
            }
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
/* Newsletter Signup Section Styles */
.newsletter-section {
    background-image: url(./img/closeup-shot-snouts-cute-dog-cat-sitting-cheek-cheek.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

.newsletter-section h2 {
    font-size: 2rem;
    color: #ffcc00;
    margin-bottom: 20px;
}

.newsletter-section p {
    font-size: 1.2rem;
    color: #ffffff;
}

.newsletter-section .form-control {
    max-width: 400px;
}

.newsletter-section .btn-warning {
    background-color: #ffcc00;
    border: none;
    color: #000;
}
/* Testimonials Section Styles */
.testimonials-section {
    background-color: #f8f9fa;
}

.testimonials-section h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #3F444C;
    margin-bottom: 40px;
}

.testimonial {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s;
}

.testimonial p {
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 10px;
}

.testimonial h5 {
    font-size: 1.2rem;
    color: #000;
    margin-bottom: 5px;
}

.testimonial .text-muted {
    color: #777;
}

.testimonial:hover {
    transform: translateY(-5px);
}

    </style>
</head>

<body>
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
    <style>

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
/* Newsletter Signup Section Styles */
.newsletter-section {
    background-image: url(./img/closeup-shot-snouts-cute-dog-cat-sitting-cheek-cheek.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

.newsletter-section h2 {
    font-size: 2rem;
    color: #ffcc00;
    margin-bottom: 20px;
}

.newsletter-section p {
    font-size: 1.2rem;
    color: #ffffff;
}

.newsletter-section .form-control {
    max-width: 400px;
}

.newsletter-section .btn-warning {
    background-color: #ffcc00;
    border: none;
    color: #000;
}
/* Testimonials Section Styles */
.testimonials-section {
    background-color: #f8f9fa;
}

.testimonials-section h2 {
    font-size: 2rem;
    font-weight: bold;
    color: #3F444C;
    margin-bottom: 40px;
}

.testimonial {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s;
}

.testimonial p {
    font-size: 1.1rem;
    color: #333;
    margin-bottom: 10px;
}

.testimonial h5 {
    font-size: 1.2rem;
    color: #000;
    margin-bottom: 5px;
}

.testimonial .text-muted {
    color: #777;
}

.testimonial:hover {
    transform: translateY(-5px);
}

    </style>
</head>

<body>


    <!-- Banner Section -->
    <div class="banner">
        <img src="./img/banner.png" alt="Banner" class="img-fluid" />
    </div>
    
    <br><br>

    <!-- CTA Section -->
    <div class="cta-section">
        <div class="container">
            <h2>Join Us in Saving Pets</h2>
            <p>Over 10,000 pets have been adopted through our organization. Help us make a difference.</p>
            <div class="d-flex justify-content-center">
                <a href="./adopt.html" class="btn btn-dark me-3">Adopt a Pet</a>
                <a href="./donate.html" class="btn btn-outline-dark">Donate Now</a>
            </div>
        </div>
    </div>

    <br>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="video-container">
                    <video id="myVideo" style="border: solid 10px;" src="./img/5728456-uhd_2160_3840_24fps.mp4" controls></video>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="content">
                <h1>We Will Make Them Truly Happy</h1>
                <h3>At Pets Heaven, we are dedicated to the welfare and happiness of our furry friends. As a premier pets adoption, care, and donation center, our mission is to provide a loving and supportive environment for animals in need. Whether you're looking to adopt a new companion, contribute to our cause, or seek assistance in pet care, we are here to help.</h3>
                <h4>Explore our website to discover more about our services, upcoming events, and how you can contribute to our cause. Join us in creating a brighter future for animals everywhere.</h4>
                <a href="./about.html" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
        <h1 style="text-align: center;font: size 32px; color:#000000; font-weight: bold; ">Pets Features</h1>
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h1>Cats</h1>
    <video style="height: 500px; border: solid 5px; font-weight: bold;" src="./img/5968893-uhd_2160_3840_30fps.mp4" autoplay loop muted></video>
            </div>
            <div class="col-lg-3">
              <h1>Dogs</h1>
              <video style="height: 500px; border: solid 5px;  font-weight: bold;" src="./img/dogs.mp4" autoplay loop muted></video>
            </div>
            <div class="col-lg-3">
              <h1>Parrots</h1>
              <video style="height: 500px; border: solid 5px;  font-weight: bold;" src="./img/parrots.mp4" autoplay loop muted></video>
            </div>
            <div class="col-lg-3">
              <h1>Rabbits</h1>
              <video style="height: 500px; border: solid 5px;  font-weight: bold;" src="./img/rabbits.mp4" autoplay loop muted></video>
            </div>
          </div>
        </div>
        <div class="container">
            <h1 class="text-center" style="font-weight: bold;">Our Gallery</h1>
            <video src="./videos/Adopt a furry friend today! 🐶.mp4" autoplay loop muted></video>
            <div class="row mt-4">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <img class="gallery-img" src="https://www.nostrofiglio.it/site_stored/imgs/0005/041/babylabrador1.1500x1000.jpg" alt="">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <img class="gallery-img" src="https://i.tribune.com.pk/media/images/644797-cat-1386870813/644797-cat-1386870813.jpg" alt="">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <img class="gallery-img" src="https://i.brecorder.com/primary/2021/06/60d44b9e58281.jpg" alt="">
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <img class="gallery-img" src="https://ipet-au.com/cdn/shop/articles/Portrait_2048x.jpg?v=1650593323" alt="">
              </div>
            </div>
          </div>
          <div class="testimonials-section bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">What Our Clients Say</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial">
                            <p>"Pets Heaven helped us find the perfect companion for our family. The process was smooth, and the support was outstanding!"</p>
                            <h5>John Doe</h5>
                            <p class="text-muted">Satisfied Customer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial">
                            <p>"The team at Pets Heaven truly cares about the animals they rescue. Our new pet is healthy and happy thanks to their efforts."</p>
                            <h5>Jane Smith</h5>
                            <p class="text-muted">Happy Adopter</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="testimonial">
                            <p>"I was impressed with the level of care and commitment shown by Pets Heaven. It's clear they are passionate about their work."</p>
                            <h5>Emily Johnson</h5>
                            <p class="text-muted">Volunteer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Newsletter Signup Section -->
        <div class="newsletter-section bg-dark text-white py-5">
            <div class="container text-center">
                <h2 class="mb-4">Stay Updated with Our Newsletter</h2>
                <p>Subscribe to our newsletter to get the latest news, events, and updates from Pets Heaven.</p>
                <form class="d-flex justify-content-center mt-3">
                    <input type="email" class="form-control me-2" placeholder="Your email address" required />
                    <button type="submit" class="btn btn-warning">Subscribe</button>
                </form>
            </div>
        </div>
    <br>
      
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
