<?php

include("class/function.php");
$obj = new TechCloud();

if (isset($_POST['admin_login'])) {
  $obj->admin_login($_POST);
}

session_start();
if (isset($_SESSION['admin_id'])) {
  $id = $_SESSION['admin_id'];
  if ($id) {
    header("location: dashboard.php");
  }
}

include("./includes/head.php");

?>


<body class="bg-gray-200">

  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <a class="navbar-brand m-0 justify-content-center d-flex" href="#">
                    <i class="fas fa-cloud-meatball fa-2x text-white"> </i>
                    <h4 class="ms-1 text-white"> TechCloud</h4>
                  </a>
                  <hr class="horizontal light mt-0 mb-2">
                  <h6 class="text-white font-weight-bolder text-center mt-2 mb-0">Admin Login</h6>
                </div>
              </div>
              <div class="card-body">
                <form role="form" class="text-start" method="POST" action="">
                  <div class="input-group input-group-outline my-3">
                    <!-- <label class="form-label">Email</label> -->
                    <input name="admin_email" type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <!-- <label class="form-label">Password</label> -->
                    <input name="admin_pass" type="password" class="form-control" placeholder="Password">
                  </div>
                  <!-- <div class="form-check form-switch d-flex align-items-center mb-3">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                  </div> -->
                  <div class="text-center">
                    <button name="admin_login" type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
                  </div>
                  <!-- <p class="mt-4 text-sm text-center">
                    Don't have an account?
                    <a href="../pages/sign-up.html" class="text-primary text-gradient font-weight-bold">Sign up</a>
                  </p> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Developed by
                <a href="https://github.com/mr-mamun-50" class="font-weight-bold text-white" target="_blank">Mamunur Rashid Mamun</a>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://github.com/mr-mamun-50?tab=repositories" class="nav-link text-white" target="_blank">Our Projects</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link text-white" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/mr-mamun-50" class="nav-link text-white" target="_blank">Github</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-white" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>