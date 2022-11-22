<?php
  include "./script1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="signup.css">
    <title>Register</title>
</head>
<body>
<section class="form pt-2 mt-4 mx-5">
    <div class="container mt-5 text-center">
        <div class="row no-gutters">
            <div class="col-sm-12 col-md-12 col-lg-7 mt-4">
                <img id="logo" src="assets/img/logo.png" class="mt-3" alt="">
                <h4 class="fw-bold mt-2">Welcome to Our system !</h4>
                <h6 class="fst-lighter text-secondary mb-3">Create your account</h6>
                <form id="register" class="" method="POST">
                <?php if(!empty($email_exist)){echo $email_exist;}?>
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-11 col-lg-7">
                            <input id="firstname" name="firstname" type="text" placeholder="FirstName" class="form-control my-2 p-2">
                            <div id="errorFirstname" class="form-text text-start"></div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-11 col-lg-7">
                            <input id="lastname" name="lastname" type="text" placeholder="LastName" class="form-control my-2 p-2">
                            <div id="errorLastname" class="form-text text-start"></div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-11 col-lg-7">
                            <input id="email" name="email" type="email" placeholder=" Email Address" class="form-control my-2 p-2 shadow-none">
                            <div id="errorEmail" class="form-text text-start"></div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-11 col-lg-7">
                            <input id="password1" name="password1" type="password" placeholder="Password" class="form-control my-2 p-2">
                            <div id="errorPassword1" class="form-text text-start"></div>
                        </div>
                    </div>
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-11 col-lg-7">
                            <input id="password2" type="password" placeholder="Confirm Password" class="form-control my-2 p-2">
                            <div id="errorPassword2" class="form-text text-start"></div>
                        </div>
                    </div>
                    <div class="form-check d-flex justify-content-center">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                        <label class="form-check-label" for="form2Example3g">I agree all statements in <a href="#" class="text-body"><u>Terms of service</u></a></label>
                    </div>
                    <div class="form-row d-flex justify-content-center align-items-center">
                        <div class="col-sm-12 col-md-11 col-lg-7">
                            <button id="btn2" name="register" type="submit" class="btn btn-dark w-100 mt-3 p-2">Create Account</button>
                        </div>
                    </div>
                    <p class="text-center text-muted mt-2 mb-4 p-2">Have already an account? <a href="./login.php" class="fw-bold text-body text-decoration-none">Login here</a></p>
                </form>
            </div>
            <div class=" d-lg-flex justify-content-center align-items-center d-none d-lg-block col-lg-5 no-gutters">
                    <img id="imgRegister" src="assets/img/Register.jpg" class="img-fluid lg-me-5" alt="">
            </div>
         </div>
    </div>
</section>
</body>
<script src="signup.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>