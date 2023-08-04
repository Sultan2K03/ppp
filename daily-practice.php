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
  </head>
  <style>
    .tabcontent {
      display: none;
      padding: 6px 12px;
    }.tabcontent {
      animation: fadeEffect 1s; /* Fading effect takes 1 second */
    }

    /* Go from zero to full opacity */
    @keyframes fadeEffect {
      from {opacity: 0;}
      to {opacity: 1;}
    }
  </style>
  <body>
    <!--start wrapper-->
    <div class="wrapper">
      <!--start to header-->
      <header
        class="top-header fixed-top border-bottom d-flex align-items-center"
      >
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
          <div class="nav-button col-1" onclick="history.back()">
            <a href="javascript:;"><i class="bi bi-arrow-left"></i></a>
          </div>
          <div class="shop-category col-10" style="text-align: center">
            <h6 class="mb-0 fw-bold text-dark">Daily Practice</h6>
          </div>
          <div class="col-1"></div>
        </nav>
      </header>
      <!--end to header-->

      <div class="page-content">
        <div class="row">
          <h1 class="text-center"><b>Your Daily Practice Questions</b></h1>
          <hr style="margin-top:1rem; opacity:.5;">
          <div class="tab-row">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <button
                  class="btn btn-sm"
                  style="color:black; background-color: antiquewhite"
                  onclick="openQues(event, 'mdq')"
                >
                  Mains Daily Questions
                </button>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <button
                  class="tablinks btn btn-sm"
                  style="color:black; background-color: antiquewhite"
                  onclick="openQues(event, 'pdq')"
                >
                  Prelims Daily Questions
                </button>
              </div>
            </div>
          </div>

          <hr style="margin-top:1rem; opacity:.5;">

          <div id="mdq" class="tabcontent">
            <!-- <h3>Mains Daily Questions</h3>
            <p> Mains Questions will appear here.</p> -->
            <div class="row">
              <div class="col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">
                      Q. Lorem ipsum dolor sit amet consectetur adipisicing
                      elit. Eos, repellendus?
                    </h5>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">
                      Q. Lorem ipsum dolor, sit amet consectetur adipisicing
                      elit. Vero excepturi id nesciunt
                    </h5>
                    <p class="card-text"> With supporting text below as a natural lead-in to
                      additional content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div id="pdq" class="tabcontent">
            <h3>Prelims Daily Questions</h3>
            <p>Prelims Questions will appear here.</p>
          </div>
        </div>
      </div>

      <!-- end page content -->
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

    <script>
      function openQues(evt, quesName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(quesName).style.display = "block";
        evt.currentTarget.className += "";
      }
    </script>
  </body>

  <!-- Mirrored from codervent.com/mobile/synrok/demo/category-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2023 13:59:03 GMT -->
</html>
