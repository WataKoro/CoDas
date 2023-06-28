<?php $session = session();
$regCourse = $session->get('idCourse');
echo $regCourse;
$db = \Config\Database::connect();
$i = 0;
$query   = $db->query("SELECT coursePrice FROM course WHERE idCourse='$regCourse'");
$results = $query->getResult();

foreach ($results as $row) {
    $price = $row->coursePrice;
}
?>
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

        <table class="container">
            <tr class="row mb-3">
                <td class="col-6">Course Name</td>
                <td class="col-6">
                    <?php
                    echo $session->get('courseName');
                    ?>
                </td>
            </tr>
            <tr class="row mb-3">
                <td class="col-6">Price</td>
                <td class="col-6">
                    <?php
                    echo $price;
                    ?>
                </td>
            </tr>
            <tr class="row mb-3">
                <td class="col-6">Payment Mehods</td>
                <td class="col-6">
                    <a href="#">BCA</a>
                    <a href="#">BNI</a>
                    <a href="#">BRI</a>
                    <a href="#">Mandiri</a>
                    <a href="#">Gopay</a>
                    <a href="#">OVO</a>
                    <a href="#">Dana</a>
                    <a href="#">Paypal</a>
                    <a href="#">Visa</a>
                    <a href="#">Mastercard</a>
                </td>
            </tr>
        </table>
        <form class="container col-md-6 col-12" action="#" method="post">
            <button type="submit" class="btn btn-success col-12 mt-3 py-2">Checkout</button>
        </form>
    </section>
</body>

</html>