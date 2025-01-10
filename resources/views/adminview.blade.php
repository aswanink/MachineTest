
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
            <li class="nav-item font-weight-semibold d-none d-lg-block">contact : 9967554433 </li>
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


     
              <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/r2.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Stores.com</p>
              </div>
                
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
                  <p class="profile-name">stores.com</p>
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
                <span class="menu-title">List Stores</span>
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
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  
                </div>
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
           
            <div class="container-fluid view">
            <div class="row">
              <div class="col-md-12">

                <h2 class="text-center view-head">List of the Stores</h2>
                <div class="table-container mt-4">
                    <table class="table table-striped table-hover table-bordered table-responsive">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>LATITUDE</th>
                                <th>LONGITUDE</th>
                                <th>ADDRESS</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($stores as $store)
                        
                        <td>{{ $store->id }}</td>
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->latitude }}</td>
                        <td>{{ $store->longitude }}</td>
                        <td>{{ $store->address }}</td>

                
                
                
                <td><a button type="submit"  class="btn btn-danger btn-sm" href="{{ route('adminadd.edit', $store->id) }}">Edit</a></button></td>
                <td>
                <form action="{{ route('adminadd.destroy', $store->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
                </div>

                          </div>



                
                
               
                
                
                
                
              </div>
              <br>
                <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © renter.com 2024</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="#"></a> </span>
            </div>
          </footer>


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