<?php $session = session();
$db = \Config\Database::connect();
$i = 0;
$query   = $db->query('SELECT coursePrice FROM course ORDER BY idCourse ASC');
$results = $query->getResult();

foreach ($results as $row) {
    $price[$i] = $row->coursePrice;
    $i = $i + 1;
}
$i = 1; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
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
                    <h1>Our Courses </span></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Boxes -->
    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-c-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">C</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-cplusplus-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">C++</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-csharp-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">C#</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-html5-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">HTML5</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <p class="card-text">
                                <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-java-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">Java</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-javascript-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">Javascript</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-matlab-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">Matlab</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-mysql-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">Mysql</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-php-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">PHP</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <p class="card-text">
                                <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-python-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">Python</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-r-original"></i>
                            </div>
                            <h3 class="card-title mb-3">R</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="devicon-ruby-plain"></i>
                            </div>
                            <h3 class="card-title mb-3">Ruby</h3>
                            <h5 class="card-title mb-3">RP.<?php echo $price[$i];
                                                            $i = $i + 1; ?></h5>
                            <a href="/register" class="btn btn-primary">Enroll Me</a>
                        </div>
                    </div>
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