<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">

    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 justify-content-start d-flex" href="#">
            <i class="fas fa-cloud-meatball fa-2x text-white"> </i>
            <h4 class="ms-1 text-white"> TechCloud</h4>
        </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">

    <div class="w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($view == 'dashboard') echo "active bg-gradient-info" ?>" href="dashboard.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a id="soft_cat" class="nav-link text-white <?php if ($view == 'software_category') echo "active bg-gradient-info" ?>" href="software_category.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Software category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($view == 'manage_software') echo "active bg-gradient-primary" ?>" href="category.php">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">webhook</i>
                    </div>
                    <span class="nav-link-text ms-1">Manage software</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?php if ($view == 'tutorial_category') echo "active bg-gradient-primary" ?>" href="../pages/billing.html">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">cast_for_education</i>
                    </div>
                    <span class="nav-link-text ms-1">Tutorial category</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="#" type="button">Upgrade to
                pro</a>
        </div>
    </div> -->
</aside>