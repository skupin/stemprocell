<?php include "include/header.php"; ?>

<div class="container">
    <!-- example 6 - center on mobile -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
            <a class="navbar-brand d-none d-lg-inline-block" href="#">
                Navbar 6
            </a>
            <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                <img src="//placehold.it/40?text=LOGO" alt="logo">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
            <ul class="navbar-nav ml-auto flex-nowrap">
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item nav-active">Our Solution</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">How We Help</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link m-2 menu-item">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<?php include "include/footer.php"; ?>
