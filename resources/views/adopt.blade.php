
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt a Pet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
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
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }

        .pet-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .pet-card:hover {
            transform: translateY(-10px);
        }

        .pet-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .pet-card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .pet-card:hover .overlay {
            opacity: 1;
        }

        .pet-card .overlay h4 {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .pet-card .overlay p {
            color: #fff;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .pet-card .overlay .btn {
            background-color: #dc3545;
            color: #fff;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease-in-out;
        }

        .pet-card .overlay .btn:hover {
            background-color: #c82333;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
        }

        .ban-img {
    overflow: hidden;
    position: relative;
    width: 100%;
    max-height: 700px;
}

.ban-img img {
    width: 100%;
    height: auto;
    max-height: 500px;
    transition: transform 1s ease, opacity 1s ease; /* Add opacity transition */
}

.ban-img img:hover {
    transform: scale(1.1); /* Slightly increased scale for more noticeable effect */
    opacity: 0.8; /* Slightly transparent on hover */
}

.ban-img::before {
    content: ""; /* Overlay effect */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Dark overlay */
    opacity: 0;
    transition: opacity 1s ease;
}

.ban-img:hover::before {
    opacity: 1;
}

@media (max-width: 768px) {
    .ban-img img {
        max-height: 300px;
    }
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
    <div class="ban-img">
        <img src="./img/adopt banner.jpg" alt="Adopt Page Banner">
    </div>
    <div class="container my-5">
        <h1 class="text-center mb-5">Adopt a Pet</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="pet-card">
                    <img src="./img/dog-labrador-retriever-lying-grass-chews-stick.jpg" alt="Dog">
                    <div class="overlay">
                        <h4>Labrador Retriever</h4>
                        <p>Age: 3 years<br>Price: PKR 35,000</p>
                        <button class="btn adopt-btn">Adopt</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pet-card">
                    <img src="./img/close-up-beautiful-pet-cat.jpg" alt="Cat">
                    <div class="overlay">
                        <h4>Persian Cat</h4>
                        <p>Age: 2 years<br>Price: PKR 25,000</p>
                        <button class="btn adopt-btn">Adopt</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pet-card">
                    <img src="./img/little-rabbit.jpg" alt="Rabbit">
                    <div class="overlay">
                        <h4>Dwarf Rabbit</h4>
                        <p>Age: 1 year<br>Price: PKR 15,000</p>
                        <button class="btn adopt-btn">Adopt</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="pet-card">
                    <img src="./img/vertical-shot-adorable-cockatiel.jpg" alt="Parrot">
                    <div class="overlay">
                        <h4>Cockatiel</h4>
                        <p>Age: 2 years<br>Price: PKR 10,000</p>
                        <button class="btn adopt-btn">Adopt</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pet-card">
                    <img src="./img/Posing Dog.jpeg" alt="Husky">
                    <div class="overlay">
                        <h4>Husky</h4>
                        <p>Age: 3 years<br>Price: PKR 30,000</p>
                        <button class="btn adopt-btn">Adopt</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pet-card">
                    <img src="./img/portrait-adorable-domestic-cat-removebg-preview.png" alt="Cat">
                    <div class="overlay">
                        <h4>Tabby Cat</h4>
                        <p>Age: 1 year<br>Price: PKR 12,000</p>
                        <button class="btn adopt-btn">Adopt</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <h1 class="text-center" style="font-size: 30px; font-weight: bolder;">>>>>>>>>>>>>>>>>>>>>>>>>>>More Comming Soon>>>>>>>>>>>>>>>>>>>>>>>>>></h1>
    <div id="labradorModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Labrador Retriever</h2>
            <p>Age: 3 years</p>
            <p>Price: PKR 35,000</p>
            <p>Description: Labrador Retrievers are known for their friendly, intelligent, and energetic personalities. They make excellent family pets and are often used as service dogs. Labradors are highly trainable and love to please their owners.</p>
            <button class="btn btn-dark" type="submit">Adopt</button>
        </div>
    </div>

    <h1 class="text-center" style="font-size: 30px; font-weight: bolder;">>>>>>>>>>>>>>>>>>>>>>>>>>>More Comming Soon>>>>>>>>>>>>>>>>>>>>>>>>>></h1>
 <div id="labradorModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Labrador Retriever</h2>
        <p>Age: 6 years</p>
        <p>Price: PKR 35,000</p>
        <p>Description: Labrador Retrievers are known for their friendly, intelligent, and energetic personalities. They make excellent family pets and are often used as service dogs. Labradors are highly trainable and love to please their owners.</p>
        <p>Medication:Cleared</p>
        <p>Vaccination: Completed</p>
        <form action="/adoptform">
            <button class="btn btn-dark" type="submit">Adopt</button>
        </form>
    </div>
</div>

<div id="persianModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Persian Cat</h2>
        <p>Age: 3 years</p>
        <p>Price: PKR 25,000</p>
        <p>Description: Persian cats are known for their long, fluffy coats and gentle, affectionate personalities. They are often described as calm and relaxed, making them great indoor pets. Persian cats require regular grooming to maintain their beautiful appearance.</p>
        <p>Medication:Cleared</p>
        <p>Vaccination: Completed</p>
        <form action="/adoptform">
            <button class="btn btn-dark" type="submit">Adopt</button>
        </form>
    </div>
</div>
<div id="rabbitModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Dwarf Rabbit</h2>
        <p>Age: 1.5 year</p>
        <p>Price: PKR 15,000</p>
        <p>Description: Dwarf rabbits are small, energetic, and have a friendly disposition. They are easy to care for and can live indoors, making them great pets for small spaces. Dwarf rabbits enjoy social interaction and require regular handling to stay tame.</p>
        <p>Medication: Cleared</p>
        <p>Vaccination: Completed</p>
        <form action="/adoptform">
            <button class="btn btn-dark" type="submit">Adopt</button>
        </form>
    </div>
</div>

    <div id="cockatelModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Cockatiel</h2>
            <p>Age: 2 years</p>
            <p>Price: PKR 10,000</p>
            <p>Description: Cockatiels are a type of parrot known for their friendly, gentle nature and ability to bond closely with their owners. They are relatively easy to care for and can be taught to perform various tricks. Cockatiels make great companions for those looking for an interactive and affectionate pet bird.</p>
            <p>Medication:Cleared</p>
            <p>Vaccination: Completed</p>
            <form action="/adoptform">
                <button class="btn btn-dark" type="submit">Adopt</button>
            </form>
        </div>
    </div>

    <div id="huskyModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Husky</h2>
            <p>Age:6 years</p>
            <p>Price: PKR 30,000</p>
            <p>Description: Huskies are a breed of working dog known for their striking appearance, intelligence, and high energy levels. They are often used as sled dogs and are known for their endurance and strength. Huskies make loyal and affectionate companions, but require regular exercise and mental stimulation to thrive.</p>
            <p>Medication:Cleared</p>
            <p>Vaccination: Completed</p>
            <form action="/adoptform">
                <button class="btn btn-dark" type="submit">Adopt</button>
            </form>
        </div>
    </div>

    <div id="tabbyModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Tabby Cat</h2>
            <p>Age: 4 year</p>
            <p>Price: PKR 12,000</p>
            <p>Description: Tabby cats are a type of domestic cat characterized by their distinctive striped or swirled coat patterns. They are known for their independent yet affectionate personalities and can make great indoor pets. Tabby cats are often easy to care for and can adapt well to a variety of living situations.</p>
            <p>Medication:Cleared</p>
            <p>Vaccination: Completed</p>
            <form action="/adoptform">
                <button class="btn btn-dark" type="submit">Adopt</button>
            </form>
        </div>
    </div>
    <script>
        const adoptBtns = document.querySelectorAll('.adopt-btn');
        const labradorModal = document.getElementById('labradorModal');
        const persianModal = document.getElementById('persianModal');
        const rabbitModal = document.getElementById('rabbitModal');
        const cockatelModal = document.getElementById('cockatelModal');
        const huskyModal = document.getElementById('huskyModal');
        const tabbyModal = document.getElementById('tabbyModal');
        const closeButtons = document.querySelectorAll('.close');

        adoptBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                switch (index) {
                    case 0:
                        labradorModal.style.display = 'block';
                        break;
                    case 1:
                        persianModal.style.display = 'block';
                        break;
                    case 2:
                        rabbitModal.style.display = 'block';
                        break;
                    case 3:
                        cockatelModal.style.display = 'block';
                        break;
                    case 4:
                        huskyModal.style.display = 'block';
                        break;
                    case 5:
                        tabbyModal.style.display = 'block';
                        break;
                }
            });
        });

        closeButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                labradorModal.style.display = 'none';
                persianModal.style.display = 'none';
                rabbitModal.style.display = 'none';
                cockatelModal.style.display = 'none';
                huskyModal.style.display = 'none';
                tabbyModal.style.display = 'none';
            });
        });

        window.addEventListener('click', (event) => {
            if (event.target == labradorModal || event.target == persianModal || event.target == rabbitModal || event.target == cockatelModal || event.target == huskyModal || event.target == tabbyModal) {
                labradorModal.style.display = 'none';
                persianModal.style.display = 'none';
                rabbitModal.style.display = 'none';
                cockatelModal.style.display = 'none';
                huskyModal.style.display = 'none';
                tabbyModal.style.display = 'none';
            }
        });

        function navigateToForm() {
            window.location.href = '/adoptform';
        }
    </script>
</body>
</html>
