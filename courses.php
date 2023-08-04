<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from codervent.com/mobile/synrok/demo/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2023 13:58:55 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   

    <!-- Plugins -->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/metismenu/metisMenu.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/metismenu/mm-vertical.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/plugins/slick/slick-theme.css"
    />

    <!--CSS Files-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&amp;display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
    />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/dark-theme.css" rel="stylesheet" />

     <!-- Font Awesome CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>

    <!--start wrapper-->
    <div class="wrapper">
      <!--start to header-->
      <header
        class="top-header fixed-top border-bottom d-flex align-items-center"
      >
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
          <!-- <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav"><a href="javascript:;"><i class="bi bi-list"></i></a></div> -->
          <div class="nav-button col-1" onclick="history.back()">
          <a href="javascript:;"><i class="bi bi-arrow-left"></i></a>
          </div>
          <div class="shop-category col-10" style="text-align: center">
            <h6 class="mb-0 fw-bold text-dark">Courses</h6>
          </div>
          <div class="col-1"></div>
        </nav>
      </header>
      <!--end to header-->

      <!--start to page content-->
      <div class="page-content">
        <div class="row row-cols-sm-12 row-cols-md-3">
          <div class="col">
            <a href="courses-detail.php" style="display: flex; justify-content: center">
                <div class="card" style="width: 18rem; margin-bottom: 1.5rem">
                  <div class="card-img d-flex justify-content-center">
                    <img src="assets/images/current-affairs/CA.jpg" style="background: white; height: 8rem; object-fit: contain;" class="card-img-top" alt="..."/>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Course Detail</h5>
                    <p class="mb-0" style="color: purple; font-size: larger;">
                      ₹1000
                      <span class="mb-0" style="color: grey; text-decoration-line: line-through; font-size: small;" >₹4000</span>
                    </p>
                  </div>
                </div>
            </a>
          </div>
          <div class="col">
            <a href="courses-detail.php" style="display: flex; justify-content: center">
                <div class="card" style="width: 18rem; margin-bottom: 1.5rem">
                  <div class="card-img d-flex justify-content-center">
                    <img src="assets/images/current-affairs/CA.jpg" style="background: white; height: 8rem; object-fit: contain;" class="card-img-top" alt="..."/>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Course Detail</h5>
                    <p class="mb-0" style="color: purple; font-size: larger;">
                      ₹1000
                      <span class="mb-0" style="color: grey; text-decoration-line: line-through; font-size: small;" >₹4000</span>
                    </p>
                  </div>
                </div>
            </a>
          </div>
          
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
                <div class="icon"><i class="bi bi-book-fill"></i></div>
                <!-- <div class="name">Category</div> -->
              </div>
            </a>
            <a class="nav-link" href="current-affairs.php">
              <div class="d-flex flex-column align-items-center">
                <div class="icon"><i class="fa-regular fa-newspaper"></i></div>
                <!-- <div class="name">Current Affairs</div> -->
              </div>
            </a>
            <a class="nav-link" href="profile.php">
              <div class="d-flex flex-column align-items-center">
                <div class="icon"><i class="bi bi-person"></i></div>
                <!-- <div class="name">Profile</div> -->
              </div>
            </a>

          </div>
        </nav>
       </footer>
       <!--end to footer-->

     
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

  <!-- Mirrored from codervent.com/mobile/synrok/demo/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2023 13:59:03 GMT -->
</html>
