<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
      .banner-img {
    position: relative;
    width: 100%;
    height: 550px; /* Adjust as needed */
    overflow: hidden;
}

.banner-img img {
    width: 100%;
    height: 100%;
   
    transition: transform 1s ease;
}

.banner-img:hover img {
    transform: scale(1.1); /* Slightly zooms in */
}

.slide-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.5) 50%, transparent 50%);
    transform: translateX(-100%) translateY(-100%);
    transition: transform 1s ease;
}

.banner-img:hover .slide-overlay {
    transform: translateX(0) translateY(0);
}

@media (max-width: 768px) {
    .banner-img {
        height: 300px;
    }
}

    </style>
  </head>

  <body >
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
    <div class="banner-img">
      <img src="./img/contact banner.jpg" alt="Contact Banner">
      <div class="slide-overlay"></div>
  </div>
  
  
    <!-- Contact 1 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5" style="background-image: url(./hand-drawn-your-dog-pattern-background.png); background-position: center; background-repeat: no-repeat;  background-size: cover;">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="mb-4 display-5 text-center" style="font-weight: bold;">Contact</h2>
            <p class="text-secondary mb-5 text-center" style="font-weight: bold;">The best way to contact us is to use our contact form below. Please fill out all of the required fields and we will get back to you as soon as possible.</p>
            <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-9">
            <div class="bg-white border rounded shadow-sm overflow-hidden">
              <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                  <form action="/insert" method="POST">
                    @csrf
                  <div class="col-12 col-md-6">  
                    <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fname" required>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                      </span>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                      </span>
                      <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>

<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    saveData();
  });

  function saveData() {
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var message = document.getElementById('message').value;

    if (fullname === "" || email === "" || phone === "" || message === "") {
      alert("Please fill all the fields");
    } else {
      localStorage.setItem("fullname", fullname);
      localStorage.setItem("email", email);
      localStorage.setItem("phone", phone);
      localStorage.setItem("message", message);
      alert('Contact details saved successfully. We will contact you soon!');
      window.location.href = "index.html";
    }
  }
</script>
