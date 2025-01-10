

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
        <title>login</title>
        <!-- <style>
        .gradient-custom {
    /* fallback for old browsers */
    background: #6a11cb;
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
		</style>
     -->
     <style>
  .custom-height {
    height: 60vh; /* Adjust to desired height */
  }
</style>
    
</head>
    <body>

    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " href="home"></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="login"></a>
                </li>
                
    </ul>


 
    <div style="background-image: url(images/img32.jpg); height: 100vh; background-size: cover; background-position: center;">
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-6 col-lg-4 col-xl-3">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-4 text-center">

            <div class="mb-md-4 mt-md-3 pb-3">
              <h2 class="fw-bold mb-3 text-uppercase">Login</h2>
              <p class="text-white-50 mb-4">Please enter your username and password!</p>

              <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="form-outline form-white mb-3">
                  <input type="text" id="typeUsernameX" class="form-control" name="email" />
                  <label class="form-label" for="typeUsernameX">Username</label>
                </div>

                <div class="form-outline form-white mb-3">
                  <input type="password" id="typePasswordX" name="password" class="form-control" />
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <button class="btn btn-outline-light btn-md px-4" type="submit">Login</button>
              </form>
              
              @if (session('error'))
                <div class="alert alert-danger mt-3">{{ session('error') }}</div>
              @endif
            </div>
              
            <div class="d-flex justify-content-center text-center mt-3">
              <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-3"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>













	
	
		
</body>
</html>
    