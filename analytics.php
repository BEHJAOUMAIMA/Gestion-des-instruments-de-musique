<?php
include 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Analytics</title>
</head>
<body>
<nav class="navbar container navbar-expand-lg bg-white mb-5 pb-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="w-25" src="assets/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " style="justify-content:end ;" id="navbarNavDropdown">
                    <ul class="navbar-nav" style=" margin-right: 0;">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./dash.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./analytics.php">Statistics</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Insturments</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">logout</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mb-5">
    <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4" style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Instruments Musicales</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("category_instrument").'  Categories'; ?></p>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4"style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Etat Stock</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("stock").' Instruments'; ?></p>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4" style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Prix Maximum</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("price").' MAD'; ?></p>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4" style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Utilisateurs</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("users").' Users'; ?></p>
        </div>
        </div>
    </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>