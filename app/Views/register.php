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
    <br />
    <br />
    <br />
    <br />

    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <section class="border-bottom p-5">
        <div class="card container w-25 p-5 mr-3">
            <h2 class="card-title">Register Your Account</h2>
            <form action="/register/save" method="post">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="tname">Full Name</label>
                        <input type="text" class="form-control" name="name" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="tname">E-mail</label>
                        <input type="text" class="form-control" name="email" required />
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label for="tname">Password</label>
                        <input type="text" class="form-control" name="password" required />
                    </div>
                </div>

                <div class="form-row">
                    <label for="course" class="form-label">Course</label>
                    <select class="form-select" aria-label="idCourse" name="idCourse courseName" id="idCourse courseName" required>
                        <option value="0 NULL" selected>NONE</option>
                        <option value="1 C" selected>C</option>
                        <option value="2 C++">C++</option>
                        <option value="3 C#">C#</option>
                        <option value="4 HTML5">HTML5</option>
                        <option value="5 Java">Java</option>
                        <option value="6 Javascript">Javascript</option>
                        <option value="7 Matlab">Matlab</option>
                        <option value="8 MySQL">MySQL</option>
                        <option value="9 PHP">PHP</option>
                        <option value="10 Python">Python</option>
                        <option value="11 R">R</option>
                        <option value="12 Ruby">Ruby</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </section>

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">CoDas - Basic Programming For Dummies</p>

            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>