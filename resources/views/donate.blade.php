<!doctype html>
<html lang="en">

<head>
    <title>Donation Tracking System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- External CSS and Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

    <style>
        /* Global Styles */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2em;
            color: #333;
            animation: fadeInDown 1s;
        }

        .form-container {
            margin-bottom: 40px;
        }

        form input,
        form select {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        form input:focus,
        form select:focus {
            border-color: #4CAF50;
            outline: none;
        }

        form button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #45a049;
        }

        .donation-updates h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            font-size: 1.5em;
            color: #333;
        }

        .slide {
            display: none;
        }

        .slide.active {
            display: block;
        }

        .slide-content {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
            animation: fadeIn 1s;
        }

        .slide p {
            margin: 0;
            margin-bottom: 5px;
        }

        .donation-receipt {
            display: none;
            margin-bottom: 40px;
            border: 2px solid #333;
            padding: 20px;
            position: relative;
            background-color: #f9f9f9;
            animation: fadeIn 1s;
        }

        .donation-receipt h2 {
            border-bottom: 1px solid #333;
            color: #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
            position: relative;
        }

        .donation-receipt h2::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, #ff0000, #00ff00, #0000ff);
        }

        .print-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .print-button:hover {
            background-color: #45a049;
        }

        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 40px;
            color: rgba(0, 0, 0, 0.2);
            opacity: 0.5;
            pointer-events: none;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 1.5em;
            }

            form input,
            form select,
            form button {
                padding: 10px;
            }
        }

        /* Keyframes for Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

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

        /* Banner Styles */
        .donate-banner {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-height: 600px; /* Adjust as needed */
        }

        .donate-banner img {
            width: 100%;
            height: 600px;
            display: block;
            transition: transform 0.5s ease-out; /* Smooth transition */
        }

        .donate-banner:hover img {
            transform: scale(1.05); /* Scale up on hover */
        }

        @media (max-width: 768px) {
            .donate-banner img {
                max-width: 100%;
                height: auto;
            }
        }

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
      
    </style>
</head>

<body>
  
    <div class="donate-banner">
        <img src="./img/donate.jpg" alt="Donate Page Banner">
    </div>
    <div class="container">
        <h1 class="animate__animated animate__fadeInDown">Donation Tracking System</h1>

        <div class="form-container animate__animated animate__fadeInUp">
            <form action="/donate" method="POST">
                @csrf
                <input type="text" name="dname" placeholder="Donor Name" required>
                <input type="number" name="damount" placeholder="Donation Amount" required>
                <input type="tel" name="number" placeholder="Mobile Number" required>
                <select name="donationpurpose" required>
                    <option value="" selected disabled name="selectoption">Select Donation Purpose</option>
                    <option value="Shelter">Shelter</option>
                    <option value="Healthcare">Healthcare</option>
                    <option value="Food">Food</option>
                    <option value="Other Expenses">Other Expenses</option>
                    <!-- Add more options as needed -->
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>

        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>