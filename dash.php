<?php
    $page = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="dash.css" />
    <title>DashBoard</title>
</head>

<body class="bg-light">
    <div class="main-container d-flex">
        <div class="sidebar col-3" id="side-nav">
            <div class="content">
                <div class="header-box px-4 pt-3 pb-4">
                    <h1 class="fs-4"><span class="bg-white text-dark rounded-shadow px-2 mx-1">Rock</span><span class="text-white">Stars</span></h1>
                    <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fas fa-stream"></i></button>
                </div>
                <ul class="list-unstyled px-2 d-flex align-items-start justify-content-center flex-column">
                    <li class="<?php if(str_contains($page,'dash.php')){echo 'bg-white';} ?> w-100 rounded-3 mb-3 p-2">
                        <a class="text-decoration-none fs-5 <?php if(str_contains($page,'dash.php')){echo 'text-dark';}else{echo 'text-white';} ?>" href="#"><i class='bx bxs-home' ></i><span class="ms-2">Dashboard</span> </a>
                    </li>
                    <li class="<?php if(str_contains($page,'analytics.php')){echo 'bg-white';} ?> w-100 rounded-3 mb-3 p-2">
                        <a class="text-decoration-none fs-5 <?php if(str_contains($page,'analytics.php')){echo 'text-dark';}else{echo 'text-white';} ?>" href="#"><i class='bx bxs-pie-chart-alt-2'></i><span class="ms-2">Analytics</span></a>
                    </li>
                    <li class="<?php if(str_contains($page,'instruments.php')){echo 'bg-white';} ?> w-100 rounded-3 mb-3 p-2">
                        <a class="text-decoration-none fs-5 <?php if(str_contains($page,'instruments.php')){echo 'text-dark';}else{echo 'text-white';} ?>" href="#"><i class='bx bxs-piano'></i><span class="ms-2">Instruments</span></a>
                    </li>
                    <li class="<?php if(str_contains($page,'messages.php')){echo 'bg-white';} ?> w-100 rounded-3 mb-3 p-2">
                        <a class="text-decoration-none  fs-5 <?php if(str_contains($page,'messages.php')){echo 'text-dark';}else{echo 'text-white';} ?>" href="#"><i class='bx bx-message-dots' ></i><span class="ms-2">Messages</span></a>
                    </li>
                    <hr class="ms-3 ">
                </ul>
            </div>
        </div>
        <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid d-flex justify-content-end">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu me-auto" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>