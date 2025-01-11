<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stores Nearby</title>
    <link href="css/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <li class="nav-item">
    <a class="nav-link " href="login"></a>
    </li>
    <style>
        /* Hero section styling */
        .hero {
            background-image: url(images/near2.jpg);
            background-size: cover;
            background-position: center;
            height: 600px;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        /* Navbar styling */
        .navbar {
            padding: 1rem 2rem;
        }

        .navbar h2 {
            font-size: 1.8rem;
            color: #ff6f00;
        }

        .navbar a {
            font-size: 1.1rem;
        }

        /* Store cards */
        .store-card {
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .store-card:hover {
            transform: scale(1.05);
        }

        .store-card .card-body {
            background-color: #fff;
            padding: 20px;
        }

        .store-card .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .store-card .card-text {
            font-size: 1.1rem;
        }

        /* Padding for the store list */
        #store-list {
            margin-top: 60px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h2 class="text-primary">stores.com</h2>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                        <a class="nav-link " href="home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href=#>Nearby Stores</a>
                    </li>
                    
                   


                    
                </ul>
                <center>
                    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" style="background:blue";>Logout</button>
</form>
    </center>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Overlay -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-text">Find Nearby Stores</div>
    </div>

    <br><br><br>

    <div id="store-list" class="container">
        <!-- Stores will be dynamically loaded here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        navigator.geolocation.getCurrentPosition(function (position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            axios.post('/nearbyStores', {
                    latitude: latitude,
                    longitude: longitude
                }, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(function (response) {
                    const stores = response.data;
                    const storeList = document.getElementById('store-list');
                    storeList.innerHTML = ''; // Clear previous content

                    stores.forEach(function (store) {
                        storeList.innerHTML += `
                            <div class="col-md-4">
                            
                                <div class="card store-card mb-4">
                                    <div class="card-body">
                                        <h5 class="card-title">${store.name}</h5>
                                        <p class="card-text">Latitude: ${store.latitude}, Longitude: ${store.longitude}</p>
                                        <p class="card-text">Address: ${store.address}</p>
                                        <p class="card-text">${store.distance.toFixed(2)} km away</p>
                                    </div>
                                </div>
                            </div>`;
                    });
                })
                .catch(function (error) {
                    console.error('Error fetching nearby stores:', error);
                });
        }, function (error) {
            console.error('Error getting location:', error);
        });
    </script>
</body>

</html>
