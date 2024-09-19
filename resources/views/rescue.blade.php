<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      color: #333;
    }
    
    header {
      background: #111111;
      color: #fff;
      padding: 20px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    nav ul {
      list-style: none;
      padding: 0;
    }
    
    nav ul li {
      display: inline;
      margin: 0 15px;
    }
    
    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    
    .hero {
      background: url('https://via.placeholder.com/1920x600') no-repeat center center/cover;
      color: #fff;
      padding: 80px 20px;
      text-align: center;
    }
    
    .hero-content {
      max-width: 600px;
      margin: 0 auto;
    }
    
    .hero h2 {
      font-size: 3em;
      margin: 0 0 20px;
    }
    
    .hero p {
      font-size: 1.2em;
      margin-bottom: 20px;
    }
    
    .btn-primary {
      background: #fff;
      color: #4CAF50;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s, color 0.3s;
    }
    
    .btn-primary:hover {
      background: #f1f1f1;
      color: #333;
    }
    
    .rescue-info {
      padding: 40px 20px;
      background: #f4f4f4;
      text-align: center;
    }
    
    .rescue-info h2 {
      font-size: 2.5em;
      margin-bottom: 20px;
    }
    
    .rescue-steps {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    
    .step {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 220px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .step-icon {
      font-size: 2.5em;
      margin-bottom: 10px;
    }
    
    .step h3 {
      margin: 10px 0;
    }
    
    .step p {
      font-size: 1em;
      color: #666;
    }
    
    .step:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    
    .rescue-gallery {
      padding: 40px 20px;
      background: #fff;
      text-align: center;
    }
    
    .gallery-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    
    .gallery-item {
      position: relative;
      width: 300px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s;
    }
    
    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
      transition: transform 0.3s;
    }
    
    .gallery-item:hover {
      transform: scale(1.05);
    }
    
    .gallery-item:hover img {
      transform: scale(1.1);
    }
    
    .info {
      position: absolute;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      width: 100%;
      padding: 10px;
      text-align: center;
      opacity: 0;
      transition: opacity 0.3s;
    }
    
    .gallery-item:hover .info {
      opacity: 1;
    }
    
    .call-to-action {
      background: #000000;
      color: #fff;
      text-align: center;
      padding: 40px 20px;
    }
    
    .call-to-action p {
      font-size: 1.2em;
      margin-bottom: 20px;
    }
    
    .btn-secondary {
      background: #fff;
      color: #000000;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background 0.3s, color 0.3s;
    }
    
    .btn-secondary:hover {
      background: #f1f1f1;
      color: #333;
    }
  </style>
</head>

<body>
<header>
  <h1>Welcome to Our Pet Rescue</h1>
</header>

<main>
  <section class="hero">
    <div class="hero-content">
      <h2>Meet Our Rescued Pets</h2>
      <p>Discover the incredible stories of the pets we’ve rescued and how you can help make a difference.</p>
      <a href="#rescue-info" class="btn-primary">Learn More</a>
    </div>
  </section>

  <section id="rescue-info" class="rescue-info">
    <h2>How We Rescue</h2>
    <div class="rescue-steps">
      <div class="step">
        <div class="step-icon">🕵️‍♂️</div>
        <h3>Identify</h3>
        <p>We identify pets in need through community reports and collaborations with local shelters.</p>
      </div>
      <div class="step">
        <div class="step-icon">🚑</div>
        <h3>Rescue</h3>
        <p>Our trained team conducts safe rescues and provides immediate medical attention.</p>
      </div>
      <div class="step">
        <div class="step-icon">🏡</div>
        <h3>Rehabilitate</h3>
        <p>Pets receive care, love, and rehabilitation in our facilities to prepare them for adoption.</p>
      </div>
      <div class="step">
        <div class="step-icon">❤️</div>
        <h3>Adopt</h3>
        <p>We find loving forever homes for our rescued pets, ensuring they have a happy life.</p>
      </div>
      <!-- New Rescue Steps -->
      <div class="step">
        <div class="step-icon">🦜</div>
        <h3>Bird Rescue</h3>
        <p>We specialize in rescuing birds, providing them with safe environments and medical care.</p>
      </div>
      <div class="step">
        <div class="step-icon">🐒</div>
        <h3>Monkey Rescue</h3>
        <p>We offer sanctuary to rescued monkeys, focusing on their physical and psychological well-being.</p>
      </div>
    </div>
  </section>

  <section class="rescue-gallery">
    <h2>Our Rescued Pets</h2>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img style="height: 300px;" src="https://static.independent.co.uk/2022/06/29/14/GettyImages-1229039488.jpg" alt="Pet 1">
        <div class="info">
          <h3>Fluffy</h3>
          <p>Fluffy is a loving cat who was rescued from the streets and is now thriving in a new home.</p>
        </div>
      </div>
      <div class="gallery-item">
        <img src="https://www.acfanimalrescue.org/wp-content/uploads/2023/08/ayesha-7459.jpeg" alt="Pet 2">
        <div class="info">
          <h3>Buddy</h3>
          <p>Buddy is a playful dog who found a new home with us and enjoys a lot of love and attention.</p>
        </div>
      </div>
      <div class="gallery-item">
        <img style="height: 300px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD2HC77mTHWMJv0NVYOZA6QtJsIcIcnyp72g&s" alt="Pet 3">
        <div class="info">
          <h3>Max</h3>
          <p>Max is a gentle donkey who loves to cuddle and is now a cherished part of a loving family.</p>
        </div>
      </div>
      <!-- New Gallery Items -->
      <div class="gallery-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVsNdS-dCxmbB75KsjKMfNahfMHDdu9d6Utw&s" alt="Bird">
        <div class="info">
          <h3>Chirpy</h3>
          <p>Chirpy, a rescued parrot, enjoys a vibrant life in our sanctuary.</p>
        </div>
      </div>
      <div class="gallery-item">
        <img src="https://static.vecteezy.com/system/resources/thumbnails/009/257/916/small_2x/golden-monkey-macaque-photo.jpg" alt="Monkey">
        <div class="info">
          <h3>Bongo</h3>
          <p>Bongo, a rescued monkey, now lives happily in our specialized care facility.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="call-to-action">
    <h2>How You Can Help</h2>
    <p>Your support makes a significant difference in the lives of these animals. Find out how you can get involved and make an impact.</p>
    <a href="#" class="btn-secondary">Donate Now</a>
  </section>
</main>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
  integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>
