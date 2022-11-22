<?php
 
    include './script1.php';
    include './crud.php';
    if(!isset($_SESSION['user'])) {
        header('location: login.php');
    }
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
    <link rel="stylesheet" href="dash.css"/>
    <title>DashBoard</title>
</head>

<body class="bg-white">
        <nav class="navbar container navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="" src="assets/img/logo.png" alt="" style="width:170px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " style="justify-content:end ;" id="navbarNavDropdown">
                    <ul class="navbar-nav" style=" margin-right: 0;">
                        <li class="nav-item" style="margin-right: 20px; font-weight: bold; font-size:large;">
                        <a class="nav-link active" aria-current="page" href="./dash.php">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['user']['Firstname'].' '.$_SESSION['user']['Lastname']?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <form name="logout" method="GET" action="script1.php">
                            <li><button class="dropdown-item" type="submit" name="logout">logout</button></li>
                            </form>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
  <?php if (isset($_SESSION["message"] )) :?>
  <div class="alert alert-success container" role="alert">
  <?php
  echo $_SESSION["message"];
  unset($_SESSION["message"]);  
  ?>
</div>
<?php endif ?>
<!-- Button trigger modal -->
<div class="d-flex justify-content-end container">
    <button onclick="add()" type="button" class="btn btn-dark fs-semibold my-4 px-4 py-3 text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class='bx bx-plus me-1'></i> Ajouter un nouveau Instrument</button>
</div>
<section class=" mx-2 my-3 ">
<div class="container mb-5">
    <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4 shadow" style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Instruments Musicales</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("category_instrument").'  Categories'; ?></p>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4 shadow"style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Etat Stock</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("stock").' Instruments'; ?></p>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4 shadow" style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Prix Maximum</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("price").' MAD'; ?></p>
        </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card mb-4 shadow" style="background: linear-gradient(90deg, rgba(152,145,132,1) 0%, rgba(16,70,98,1) 100%);">
        <div class="card-body">
            <h6 class="card-title mb-4 fs-6 fw-bold text-white">Utilisateurs</h6>
            <p class="card-text text-end fs-6 fw-semibold text-white"><?php echo statistics("users").' Users'; ?></p>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form id="form" method="post" action="crud.php" >
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout d'instrument musical</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" value="" id="hideId" name="hideId">
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom d'Instrument</label>
  <input type="text" class="form-control" name="instrument_name" id="instrument_name" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Catégorie</label>
    <select class="form-select mb-3" id="instrument_category" name="instrument_category" aria-label="Default select example" required>
        <option value="">Séléctionner</option>
        <option value="5">Bois</option>
        <option value="6">Claviers</option>
        <option value="7">Cordes</option>
        <option value="8">Cuivres</option>
        <option value="9">Percussions</option>
    </select>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Prix</label>
        <input type="number" class="form-control" name="instrument_price" id="instrument_price " required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label">Quantité</label>
        <input type="number" class="form-control" name="instrument_quantite" id="instrument_quantite" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea2" class="form-label">Description</label>
        <textarea type="Text" class="form-control" name="instrument_description" id="instrument_description" rows="3"></textarea>
     </div>
</div>     
</div>
      <div class="modal-footer">
   
        <button type="submit" name="add_btn" id="add_btn" class="btn btn-dark">Ajouter</button>
        <div class="d-flex" >
            <button  type="submit" name="edit_btn" id="edit_btn" class="btn btn-success me-3">Modifier</button>
            <button type="submit" name="delete_btn" id="delete_btn" class="btn btn-danger">Supprimer</button>
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

      </div>
    </div>
  </div>
  </form>
</div>
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <?php
            $data = show();
            while($row = mysqli_fetch_assoc($data)){
                echo "
                    <div class='col mb-3'>
                        <div class='card shadow' style='height : 320px'>
                            <button id='{$row['id_instrument']}' onclick='edit({$row['id_instrument']})' data-name='{$row['name_instrument']}' data-category='{$row['category_instrument']}' data-price='{$row['price_instrument']}' data-quantite='{$row['quantite']}' data-description='{$row['description']}'
                             class='card-body rounded text-center border-0' style=' background-color: rgb(200, 200, 179);' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                                <h6 class='card-title mb-4 fw-bold fs-6 text-truncate'>Instrument : {$row['name_instrument']}</h6>
                                <p class='card-text fw-semibold'>Catégorie : {$row['category_name']}</p>
                                <p class='card-text fw-semibold'>Prix : {$row['price_instrument']} MAD</p>
                                <p class='card-text fw-semibold'> Quantité : {$row['quantite']}</p>
                                <p class='card-text fw-italic text-truncate'>{$row['description']}</p>
                            </button>
                        </div>
                    </div>
                ";
            }?>
        
    </div>
    </div>
</section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="./dashboard.js">

</script>

</html>