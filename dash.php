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
    <!-- <div class="main-container d-flex">
        <div class="sidebar col-3" id="side-nav">
            <div class="content">
                <div class="header-box px-4 pt-3 pb-4 d-flex justify-content-between">
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
                </ul>
                <hr class="ms-3 ">
                <ul class="list-unstyled px-2 d-flex align-items-start justify-content-center flex-column">
                    <li class="<?php if(str_contains($page,'settings.php')){echo 'bg-white';} ?> w-100 rounded-3 mb-3 p-2">
                        <a class="text-decoration-none fs-5 <?php if(str_contains($page,'settings.php')){echo 'text-dark';}else{echo 'text-white';} ?>" href="#"><i class='bx bxs-cog' ></i></i><span class="ms-2">Settings</span> </a>
                    </li>
                    <li class="<?php if(str_contains($page,'notifications.php')){echo 'bg-white';} ?> w-100 rounded-3 mb-3 p-2">
                        <a class="text-decoration-none fs-5 <?php if(str_contains($page,'notifications.php')){echo 'text-dark';}else{echo 'text-white';} ?>" href="#"><i class='bx bx-bell' ></i><span class="ms-2">Notifications</span></a>
                    </li>
                        
                </ul>
            </div>
        </div> -->
        <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-center">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <a class="navbar-brand ms-3" href="#">Rock Stars</a>
                                <button class="btn px-1 py-0 open-btn"><i class="fas fa-stream"></i></button>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                                <li class="nav-item list-unstyled">
                                    <a class="nav-link" aria-current="page" href="./dash.php">Dashboard</a>
                                </li>
                                <li class="nav-item list-unstyled">
                                    <a class="nav-link" aria-current="page" href="./analytics.php">Analytics</a>
                                </li>
                                <li class="nav-item list-unstyled">
                                    <a class="nav-link" aria-current="page" href="#">Instruments</a>
                                </li>
                                <li class="nav-item list-unstyled">
                                    <a class="nav-link" aria-current="page" href="#">Settings</a>
                                </li>
                                <li class="nav-item dropdown list-unstyled me-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Nom Prénom
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </div>
        <div>

</div>
<section class=" mx-2 my-4 p-4">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary my-4 px-4 py-3 text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class='bx bx-plus me-1'></i> Add a new musical instrument</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Musical Instrument</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Instrument Name</label>
  <input type="text" class="form-control" name="instrument_name" id="instrument_name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Category</label>
    <select class="form-select mb-3" aria-label="Default select example">
        <option selected>Select</option>
        <option value="1">Bois</option>
        <option value="2">Claviers</option>
        <option value="3">Cordes</option>
        <option value="3">Cuivres</option>
        <option value="3">Percussions</option>
    </select>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Price</label>
        <input type="number" class="form-control" name="instrument_price" id="instrument_price">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label">Quantite</label>
        <input type="number" class="form-control" name="instrument_quantite" id="instrument_quantite">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label">Description</label>
        <textarea type="Text" class="form-control" name="instrument_description" id="instrument_description" rows="3"></textarea>
     </div>
</div>     
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col mb-3">
            <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="./dashboard.js">

</script>

</html>