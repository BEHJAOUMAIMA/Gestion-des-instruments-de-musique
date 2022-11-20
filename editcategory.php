<?php
    $page = $_SERVER['REQUEST_URI'];
    include "./functions.php"
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
        </div>
        <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between d-md-none d-block">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                            <a class="navbar-brand" href="#">Rock Stars</a>
                            <button class="btn px-1 py-0 open-btn"><i class="fas fa-stream"></i></button>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                             
                        <!-- Button trigger modal -->
<?php 
    if(isset($_GET['added'])){
        echo '<div class="alert alert-success" role="alert">Category was added successfully</div>';
    }
    if(isset($_GET['error'])){
        echo '<div class="alert alert-danger" role="alert">Please fill in all the inputs</div>';
    }
?>
                        
                    </div>
                </nav>
                <div class="container">
                    <?php 
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM category WHERE c_id=$id";
                        $record = mysqli_query($connexion, $sql);
                        $row = mysqli_fetch_array($record, MYSQLI_ASSOC);
                    ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">category name</label>
                        <input type="text" hidden name="id"  value="<?php echo $row['c_id']; ?>">
                        <input type="text" class="form-control" name="name"  value="<?php echo $row['name']; ?>"  placeholder="category name">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
                </div>    
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="./dashboard.js">

</script>

</html>