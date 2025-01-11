<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Stores.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Custom styles for the homepage */
        .hero-section {
            background-image: url('images/home2.jpg'); /* Set your own image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .feature-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .feature-card {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <h2 class="text-primary">Stores.com</h2>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="home">HOME</a>
                </li>
     
                <!-- <li class="nav-item">
                    <a class="nav-link " href="nearbyStores">Nearby Stores</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link bg-primary" href="login">LOGIN</a>
                </li>
                
            </ul>
            <!-- <form action="{{ route('login') }}" method="POST">
    @csrf
    <button type="submit">LOGIN</button>
</form>
    </center> -->
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-section" style="background-image: url('images/home3.jpg'); background-size: cover; background-position: center;">
    <div class="text-center text-white">
        <h1 style="color:red;">Welcome to Stores.com</h1>
        <p style="color:black;">Find the nearest stores to your location</p>
        <a href="login" class="btn btn-warning btn-lg">Discover Nearby Stores</a>
    </div>
</div>

      

<!-- Feature Section -->
<section class="feature-section">
    <div class="container text-center">
        <h2>Our Features</h2>
        <p class="lead">Find stores based on your location and much more!</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card feature-card">
                    <img src="images/home3.jpg" class="card-img-top" alt="Feature 1">
                    <div class="card-body">
                        <h5 class="card-title">Find Nearby Stores</h5>
                        <p class="card-text">Discover stores close to you with just a few clicks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card">
                    <img src="images/home4.webp" class="card-img-top" alt="Feature 2">
                    <div class="card-body">
                        <h5 class="card-title">Store Listings</h5>
                        <p class="card-text">Browse a wide range of stores by name or location.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card">
                    <img src="images/home3.jpg" class="card-img-top" alt="Feature 3">
                    <div class="card-body">
                        <h5 class="card-title">Store Details</h5>
                        <p class="card-text">Get store details, including address, contact, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
  <br><br>
    <p>&copy; 2025 Stores.com | All rights reserved</p>
    <p>Contact: support@stores.com</p>

    <br><br><br>
</footer>


</body>
</html>
