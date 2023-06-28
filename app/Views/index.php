<?php $session = session(); ?>
<!DOCTYPE html>

<!--
        Nama  : Irfan Mochamad Esa
        NIM   : 2005568
        Kelas : Ilmu Komputer - KOM-4C2
-->

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Learn How To <span class="text-warning"> Code </span></h1>
                    <p class="lead my-4">
                        We focus on teaching our students the fundamentals of the latest
                        and greatest technologies to prepare them for their first dev role
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light" style="height: 20rem;">
                        <div class="card-body text-center">
                            <h3 class="card-title mb-3 p-3">Enhance Problem Solving Skills</h3>
                            <div class="h1 mb-3">
                                <img class="w-100 mx-auto d-block" src="https://asktraining.com.sg/wp-content/uploads/2021/03/8-ways-to-improve-your-problem-solving-skills-1024x523.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center" style="height: 20rem;">
                            <div class="h1 mb-3">
                                <h3 class="card-title mb-3 p-3">Complement Your Creativity</h3>
                                <img class="w-100 mx-auto d-block" src="https://info.ehl.edu/hubfs/Blog-EHL-Insights/Blog-Header-EHL-Insights/business-creativity.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center" style="height: 20rem;">
                            <div class="h1 mb-3">
                                <h3 class="card-title mb-3 p-3">Improve Career Prospects</h3>
                                <img class="w-100 mx-auto d-block" src="https://insights.dice.com/wp-content/uploads/2019/11/cropped-cropped-shutterstock_699634498-1200x676-1024x576.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center" style="height: 20rem;">
                            <div class="h1 mb-3">
                                <h3 class="card-title mb-3 p-3">Join a Large Community</h3>
                                <img class="w-100 mx-auto d-block" src="http://unknews.unk.edu/wp-content/uploads/2017/09/CoderDojo2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Learn Sections -->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="https://content.techgig.com/photo/84143376/7-best-programming-languages-for-beginners-to-learn-in-2021.jpg?236746" class="img-fluid" alt="" />
                </div>
                <div class="col-md p-5">
                    <h2>Learn The Fundamentals</h2>
                    <p class="lead">
                        Start learning from scratch today!
                    </p>
                    <p>
                        Enroll in one of our courses depending on which subject you would like to learn
                    </p>
                    <a href="/programs" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
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

    <!-- Modal -->
    <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollLabel">Enrollment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">Fill out this form and we will get back to you</p>
                    <form>
                        <div class="mb-3">
                            <label for="first-name" class="col-form-label">
                                First Name:
                            </label>
                            <input type="text" class="form-control" id="first-name" />
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="col-form-label">Last Name:</label>
                            <input type="text" class="form-control" id="last-name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone:</label>
                            <input type="tel" class="form-control" id="phone" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close </button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-71.060982, 42.35725],
            zoom: 18,
        })
    </script>
</body>

</html>