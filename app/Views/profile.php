<?php $session = session(); ?>
<!DOCTYPE html>
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

    <section class="container">
        <h1 class="container-md my-md-5 mt-5 mb-3 text-center"><?= $session->get('name') ?>'s Profile</h1>

        <table class="container-fluid">
            <tr class="row mb-3">
                <td class="col-6">Email</td>
                <td class="col-6">
                    <?php
                    echo $session->get('email');
                    ?>
                </td>
            </tr>
            <tr class="row mb-3">
                <td class="col-6">Name</td>
                <td class="col-6">
                    <?php
                    echo $session->get('name');
                    ?>
                </td>
            </tr>
            <?php if ($session->get('isAdmin') == 0) {
                $course = $session->get('courseName');
                echo "
                <tr class='row mb-3'>
                    <td class='col-6'>Enrolled Course</td>
                        <td class='col-6'>
                            $course
                        </td>
                </tr>
                ";
            } ?>
        </table>
        <form class="container col-md-6 col-12" action="/payment" method="post">
            <button type="submit" class="btn btn-warning col-12 mt-3 py-2">Pay For Course</button>
        </form>
        <form class="container col-md-6 col-12" action="/login/logout" method="post">
            <button type="submit" class="btn btn-danger col-12 mt-3 py-2">Logout</button>
        </form>
        <?php $i = 1;
        if ($session->get('isAdmin') == 1) { ?>
            <h3>Daftar Akun</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Course</th>
                        <th scope="col">Admin (1=YES, 2=No)</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($regis as $r) : ?>
                        <tr style="line-height: auto;">
                            <!-- no registrasi -->
                            <th scope="row"><?= $i++; ?></th>

                            <!-- nama lengkap -->
                            <td><?= $r['fname']; ?> <?= $r['name']; ?></td>

                            <!-- email -->
                            <td><?= $r['email']; ?></td>

                            <!-- sekolah -->
                            <td><?= $r['course']; ?></td>

                            <td><?= $r['isAdmin']; ?></td>

                            <!-- aksi registrasi -->
                            <td>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        <?php } ?>
    </section>
</body>

</html>