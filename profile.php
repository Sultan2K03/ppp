<!doctype html>
<html lang="en">
  
<!-- Mirrored from codervent.com/mobile/synrok/demo/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2023 13:59:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synrok - Mobile HTML Template</title>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/metismenu/mm-vertical.css" />
     <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css" />
     <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />

    <!--CSS Files-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/dark-theme.css" rel="stylesheet"/>

     <!-- Font Awesome CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>


   <!--start wrapper-->
    <div class="wrapper">

       <!--start to header-->
       <header class="top-header fixed-top border-bottom d-flex align-items-center">
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
          <!-- <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav"><a href="javascript:;"><i class="bi bi-list"></i></a></div> -->
            <div class="nav-button col-1" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <div class="account-profile col-10" style="text-align:center;">
              <h6 class="mb-0 fw-bold text-dark">Profile</h6>
            </div>
            <div class="col-1"></div>
            <!-- <form class="searchbar">
              <div class="position-absolute top-50 translate-middle-y search-icon start-0 ms-4"><i class="bi bi-search"></i></div>
              <input class="form-control px-5" type="text" placeholder="Search for anything">
              <div class="position-absolute top-50 translate-middle-y end-0 search-close-icon me-4"><i class="bi bi-x-lg"></i></div>
            </form>
            <ul class="navbar-nav ms-auto d-flex align-items-center top-right-menu">
              <li class="nav-item mobile-search-button">
                <a class="nav-link" href="javascript:;"><i class="bi bi-search"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="wishlist.html"><i class="bi bi-heart"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link position-relative" href="cart.html">
                  <div class="cart-badge">8</div>
                  <i class="bi bi-bag"></i>
                </a>
              </li>
            </ul> -->
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

        <div class="profile-img mb-3 border p-3 text-center rounded-3 bg-light">
           <img src="assets/images/avatars/01.webp" width="90" height="90" class="rounded-circle" alt="">
           <h6 class="mb-0 fw-bold mt-3">Michael Clarke</h6>
        </div>

      <div class="mb-3">
        <a class="profile-item" href="my-profile.php">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-person"></i></div>
                 <div class="flex-grow-1">My Profile</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       <div class="mb-3">
        <a class="profile-item" href="my-orders.html">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-basket3"></i></div>
                 <div class="flex-grow-1">My Order</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       <div class="mb-3">
        <a class="profile-item" href="addresses.html">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-geo"></i></div>
                 <div class="flex-grow-1">Addresses</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       <div class="mb-3">
        <a class="profile-item" href="notification.html">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-bell"></i></div>
                 <div class="flex-grow-1">Notification</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       <div class="mb-3">
        <a class="profile-item" href="wishlist.html">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-heart"></i></div>
                 <div class="flex-grow-1">Wishlist</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       <div class="mb-3">
        <a class="profile-item" href="authentication-log-in.html">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-box-arrow-right"></i></div>
                 <div class="flex-grow-1">Logout</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       </div>
     <!--end to page content-->


   <!--start to footer-->
   <footer class="page-footer fixed-bottom border-top d-flex align-items-center">
        <nav class="navbar navbar-expand p-0 flex-grow-1">
          <div class="navbar-nav align-items-center justify-content-between w-100">
            <a class="nav-link" href="home.php">
              <div class="d-flex flex-column align-items-center">
                <div class="icon"><i class="bi bi-house"></i></div>
                <!-- <div class="name">Home</div> -->
              </div>
            </a>
            <a class="nav-link" href="courses.php">
              <div class="d-flex flex-column align-items-center">
                <div class="icon"><i class="bi bi-book"></i></div>
                <!-- <div class="name">Courses</div> -->
              </div>
            </a>
            <a class="nav-link" href="current-affairs.php">
              <div class="d-flex flex-column align-items-center">
                <div class="icon"><i class="fa-regular fa-newspaper"></i></div>
                <!-- <div class="name">Current Affairs</div> -->
              </div>
            </a>
            <a class="nav-link" href="">
              <div class="d-flex flex-column align-items-center">
                <div class="icon"><i class="bi bi-person-fill"></i></div>
                <!-- <div class="name">Profile</div> -->
              </div>
            </a>

          </div>
        </nav>
       </footer>
       <!--end to footer-->



      <!--start sidenav-->
      <!-- <div class="sidenav">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidenav">
         <div class="offcanvas-header bg-dark border-bottom border-light">
            <div class="hstack gap-3">
                <div class="">
                  <img src="assets/images/avatars/01.webp" width="45" class="rounded-3 p-1 bg-white" alt=""/>
                </div>
                <div class="details">
                  <h6 class="mb-0 text-white">Hi! Jhon Deo</h6>
                </div>
            </div>
           <div data-bs-dismiss="offcanvas"><i class="bi bi-x-lg fs-5 text-white"></i></div>
         </div>
         <div class="offcanvas-body p-0">
           <nav class="sidebar-nav">
             <ul class="metismenu" id="sidenav">
               <li>
                 <a href="home.html">
                    <i class="bi bi-house-door me-2"></i>
                     Home
                  </a>
               </li>
               <li>
                 <a class="has-arrow" href="javascript:;">
                   <i class="bi bi-person-circle me-2"></i>
                     Account
                 </a>
                 <ul>
                   <li><a href="profile.php">Profile</a></li>
                   <li><a href="my-orders.html">My Orders</a></li>
                   <li><a href="my-profile.php">My Profile</a></li>
                   <li><a href="addresses.html">Addresses</a></li>
                   <li><a href="notification.html">Notification</a></li>
                 </ul>
               </li>
               <li>
                 <a class="has-arrow" href="javascript:;">
                    <i class="bi bi-basket3 me-2"></i>
                    Shop Pages
                  </a>
                 <ul>
                   <li><a href="shop.html">Shop</a></li>
                   <li><a href="cart.html">Cart</a></li>
                   <li><a href="wishlist.html">Wishlist</a></li>
                   <li><a href="product-details.html">Product Details</a></li>
                   <li><a href="checkout.html">Checkout</a></li>
                   <li><a href="order-tracking.html">Order Tracking</a></li>
                 </ul>
               </li>
               <li>
                 <a class="has-arrow" href="javascript:;">
                    <i class="bi bi-credit-card me-2"></i>
                    Payment
                  </a>
                 <ul>
                   <li><a href="payment-method.html">Payment Method</a></li>
                   <li><a href="payment-error.html">Payment Error</a></li>
                   <li><a href="payment-completed.html">Payment Completed</a></li>
                 </ul>
               </li>
               <li>
                 <a class="has-arrow" href="javascript:;">
                    <i class="bi bi-grid me-2"></i>
                    Category
                  </a>
                 <ul>
                   <li><a href="category-grid.html">Category Grid</a></li>
                   <li><a href="category-list.html">Category List</a></li>
                 </ul>
               </li>
               <li>
                 <a class="has-arrow" href="javascript:;">
                    <i class="bi bi-lock me-2"></i>
                    Authentication
                  </a>
                 <ul>
                   <li><a href="authentication-log-in.html">Log In</a></li>
                   <li><a href="authentication-sign-up.html">Sign Up</a></li>
                   <li><a href="authentication-otp-varification.html">Verification</a></li>
                   <li><a href="authentication-change-password.html">Change Password</a></li>
                   <li><a href="authentication-splash.html">Splash</a></li>
                   <li><a href="authentication-splash-2.html">Splash 2</a></li>
                 </ul>
               </li>
               <li>
                 <a class="has-arrow" href="javascript:;">
                    <i class="bi bi-star me-2"></i>
                    Customer Reviews
                  </a>
                 <ul>
                  <li><a href="reviews-and-ratings.html">Ratings & Reviews</a></li>
                  <li><a href="write-a-review.html">Write a Review</a></li>
                 </ul>
               </li>
               <li>
                 <a href="about-us.html">
                    <i class="bi bi-emoji-smile me-2"></i>
                    About Us
                  </a>
               </li>
               <li>
                 <a href="contact-us.html">
                    <i class="bi bi-headphones me-2"></i>
                    Contact Us
                  </a>
               </li>
 
             </ul>
           </nav>
         </div>
         <div class="offcanvas-footer border-top p-3">
           <div class="form-check form-switch">
             <input class="form-check-input" type="checkbox" role="switch" id="DarkMode" onchange="toggleTheme()">
             <label class="form-check-label" for="DarkMode">Dark Mode</label>
           </div>
         </div>
       </div>
     </div> -->
    <!--end sidenav-->
     

    </div>
   <!--end wrapper-->


    <!--JS Files-->  
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/cookies-theme-switcher.js"></script>
    <script src="assets/plugins/metismenu/metisMenu.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/loader.js"></script>
  </body>

<!-- Mirrored from codervent.com/mobile/synrok/demo/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2023 13:59:03 GMT -->
</html>