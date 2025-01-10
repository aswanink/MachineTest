<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard Admin</title>


    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/style_1.css">

    <link rel="shortcut icon" href="assets/images/favicon.icon" />

  

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  </head>
  <body>


    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Contact : 9967554433 </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                    
              </div>
            </li>

        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              
        <!-- <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

        </button>

          <img class="img-xs rounded-circle" src="image/logo2.jpg" alt="Profile image">
          
          <i class="fa fa-caret-square-o-down" style="font-size:20px"></i>
        </a> -->
               
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">


     
              <!-- <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="image/logo2.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Renters.com</p>
              </div> -->
                
              <!-- <a class="dropdown-item" href="index">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a> -->
              </div>

            </li>
          </ul>
          
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <!--   <i class="mdi mdi-menu"></i> -->
            <i class="fa fa-bars"></i>

          </button>

        </div>
      </nav>
      <!-- partial -->
      <!-- Section-1 End -->



      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
      
      <!--Nav Start-->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="images/home3.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Stores.com</p>
                  <!-- <p class="designation">Rooms</p> -->
                </div>
              </a>
            </li>


            <li class="nav-item nav-category">Menus</li>
            
            
            <li class="nav-item">
              <a class="nav-link" href="adminadd">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Add Stores</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminview">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Store List</span>
              </a>
            </li>
          
          </ul>
        </nav>
        <!--Nav End--->



      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
              <div class="col-12">
                <!-- <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  
                </div> -->
              </div>


              <div class="col-md-12">
                <div class="page-header-toolbar">
                 
                  <div class="filter-wrapper">
                    <div class="dropdown toolbar-item">
                     
                      <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                        <a class="dropdown-item" href="#">Last Day</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                    </div>
                   
                  </div>


                 
                </div>
              </div>
            </div>




            <!-- Page Title Header Ends-->
           
            <div class="row">
              <div class="col-md-12">
                
                <main class="container-fluid add-content flex-grow-1 p-4 bg-light">
                  <h2>Add Stores</h2>
                  <form action="{{ route('adminadd.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                      <div class="mb-3">
                          <label class="form-label">Name:</label>
                          <input name="name" class="form-control" type="text" placeholder="Enter name of the Store" required>
                      </div>
      
                      <div class="mb-3">
                          <label class="form-label">Latitude:</label>
                          <input name="latitude" class="form-control" type="number" step="0.000001" required>
                      </div>  

                      <div class="mb-3">
                          <label class="form-label">Longitude:</label>
                          <input name="longitude" class="form-control" type="number" step="0.000001" required>
                      </div> 
      
                      <div class="mb-3">
                          <label class="form-label">Address:</label>
                          <centre><input name="address" type="text" class="form-control" required></center>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
              </main>

              <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_API_KEY&callback=initMap&libraries=places" async defer></script>


              <br><br>

              </div>



          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © renters.com 2024</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="#"></a> </span>
            </div>
          </footer> -->
        

         
       </div>
      </div>
    </div></div>  

  </div>


    <!-- plugins:js -->
    <script src="js/vendor.bundle.base.js"></script>
    
    <script src="js/vendor.bundle.addons.js"></script>

    <script src="js/off-canvas.js"></script>

    <script src="js/misc.js"></script>
    
    <script src="js/dashboard.js"></script>
 <!--  
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>  -->


  </body>
</html>