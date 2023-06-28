<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <title>CoDas - Basic Programming For Dummies</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">CoDas</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/programs" class="nav-link">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <?php
                    if ($session->get('name') != NULL && $session->get('isAdmin') == 0) {
                        echo "<li class='nav-item'><a href='/profile' class='nav-link'>Profile</a></li>";
                    } else if ($session->get('name') != NULL && $session->get('isAdmin') == 1) {
                        echo "<li class='nav-item'><a href='/profile' class='nav-link'>Admin</a></li>";
                    } else {
                        echo
                        "<li class='nav-item'><a href='/register' class='nav-link'>Register</a></li>
                         <li class='nav-item'><a href='/login' class='nav-link'>Login</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    </br>
    </br>

    <!-- Showcase -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center text-align-center justify-content-between">
                <div>
                    <h1>About Us </span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Learn Sections -->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="http://photos.wikimapia.org/p/00/03/07/34/73_big.jpg" class="img-fluid h-75" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Company Profile</h2>
                    <p class="lead">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Similique deleniti possimus magnam corporis ratione facere!
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
                        reiciendis eius autem eveniet mollitia, at asperiores suscipit
                        quae similique laboriosam iste minus placeat odit velit quos,
                        nulla architecto amet voluptates?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Map -->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Alamat:</span> Kecamatan Buahbatu Kota Bandung
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Phone:</span> (022) XXXXXXXXXXX
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Whatsapp:</span> +62-XXXXXXXXXXX
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Email:</span>support@CoDas.id
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">CoDas - Basic Programming For Dummies</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
</body>

</html>