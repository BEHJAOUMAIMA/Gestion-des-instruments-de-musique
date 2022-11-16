<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login.css">
    <title>Log in</title>
</head>

<body>
    <section class="form pt-2 mt-5 mx-5">
        <div class="container mt-5 text-center">
            <div class="row no-gutters">
                <div class="col-lg-5 d-flex justify-content-center align-items-center">
                    <img id="imgLogin" src="assets/img/login.jpg" class="img-fluid lg-ms-5" alt="">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <img id="logo" src="assets/img/logo.png" class="pt-5 pb-2" alt="">
                    <h4 class="fw-bold py-2">Hello Again !</h4>
                    <h6 class="fst-italic text-secondary pb-2">Sign into your account</h6>
                    <form id="login" class="" method="POST" >
                        <div class="form-row d-flex justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-11 col-lg-7">
                                <input id="email" type="email" placeholder=" Email Adress" class="form-control my-3 p-3">
                                <div id="errorEmail" class="form-text text-start text-danger"></div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-11 col-lg-7">
                                <input id="password" type="password" placeholder="Password" class="form-control my-3 p-3">
                                <div id="errorPassword" class="form-text text-start text-danger"></div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-center align-items-center">
                            <div class="col-sm-12 col-md-11 col-lg-7">
                                <button id="btn1" name="login" type="submit" class="btn btn-dark w-100 mt-2 mb-4 p-2"> Login</button>
                            </div>
                        </div>
                        <a class="text-decoration-none" href="#">Forgot password ?</a>
                        <p>Don't have an account ?
                            <a class="text-decoration-none pb-2" href="#"> Register Here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="login.js"></script>
</body>



</html>