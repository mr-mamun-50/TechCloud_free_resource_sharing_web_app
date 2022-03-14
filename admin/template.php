<?php

include("./class/function.php");
$obj = new TechCloud();
session_start();
$id = $_SESSION['admin_id'];
if ($id == null) {
    header("location: index.php");
}
if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == 'logout') {
        $obj->admin_logout();
    }
}

include("./includes/head.php");

?>

<body class="g-sidenav-show  bg-gray-200">

    <!-- Sidenav -->
    <?php include_once("./includes/sidenav.php") ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        <!-- Navbar -->
        <?php include_once("./includes/topnav.php") ?>

        <div class="container-fluid py-3">

            <?php

            if (isset($view)) {
                if ($view == "dashboard") {
                    include_once("./views/dash_view.php");
                } else if ($view == "software_category") {
                    include_once("./views/software_category_view.php");
                }
            }

            ?>

            <!-- Footer -->
            <?php include_once("./includes/footer.php") ?>
        </div>

    </main>

    <!-- Fixed Plugin -->
    <?php include_once("./includes/fixed_plugin.php") ?>

    <!-- Scripts -->
    <?php include_once("./includes/scripts.php") ?>

</body>

</html>