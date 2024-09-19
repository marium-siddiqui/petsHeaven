<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');
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
       

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .form-container h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bolder;
            color: #333;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container .form-group label {
            font-weight: bolder;
            color: #333;
        }

        .form-container .form-group input,
        .form-container .form-group select,
        .form-container .form-group textarea {
            font-size: 1rem;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            width: 100%;
            font-weight: bolder;
        }

        .form-container .form-group textarea {
            resize: none;
            height: 100px;
        }

        .form-container .btn {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
        }

        .form-container .btn:hover {
            background-color: #333;
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
<body style="  
  background-image: url('./img/view-funny-animals\ \(1\).jpg');
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  height: 100vh;
 
"
>
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
<main>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="form-container">
        <h1>Adoption Form</h1>
        <form id="adoptionForm" action="/adoptform" method="POST">
            @csrf
            <div class="form-group">
                <label for="petType">Pet Type</label>
                <select id="petType" name="pettype" required>
                    <option value="" disabled selected>Select a pet</option>
                    <option value="Labrador Retriever">Labrador Retriever</option>
                    <option value="Persian Cat">Persian Cat</option>
                    <option value="Dwarf Rabbit">Dwarf Rabbit</option>
                    <option value="Cockatiel">Cockatiel</option>
                    <option value="Husky">Husky</option>
                    <option value="Tabby Cat">Tabby Cat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text"  name="Fname" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="1234567890" name="number" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="adoptionReason">Reason for Adoption</label>
                <textarea id="adoptionReason" name="reason" required></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Previous Experience with Pets</label>
                <textarea id="experience" name="experience" required></textarea>
            </div>
            <div class="form-group">
                <label for="paymentMethod">Payment Method</label>
                <select id="paymentMethod" name="payment" required>
                    <option value="" disabled selected>Select a payment method</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
   
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
    <script>
        document.getElementById('paymentMethod').addEventListener('change', function() {
            const paymentMethod = this.value;
            document.getElementById('paymentDetails').style.display = paymentMethod === 'Credit Card' || paymentMethod === 'Debit Card' ? 'block' : 'none';
            document.getElementById('bankDetails').style.display = paymentMethod === 'Bank Transfer' ? 'block' : 'none';
        });

        
    </script>
</body>
</html>
