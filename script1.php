<?php
include "./database.php";
// register
if(isset($_POST['register'])){
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
  
    // check if email already exist
    $email_check = mysqli_query($connexion, "SELECT * FROM users WHERE Email = '{$email}' ");
    $rowCount = mysqli_num_rows($email_check);
    if($rowCount > 0){
      $email_exist = '
                      <div class="alert alert-danger" role="alert">
                          User with email already exist!
                      </div>
                  ';
    }else{
      $email_exist ="";
      $sql = "INSERT INTO `users`  VALUES (NULL,'$firstName','$lastName','$email','$password_hash')";
      mysqli_query($connexion, $sql);
      //SQL INSERT
      $_SESSION['message'] = "Account has been added successfully !";
          header('location: login.php');
    }
  }
  //login
  if(isset($_POST['login'])){
    // check email already exist
  $email=$_POST['email'];
  $email_check = mysqli_query($connexion,"SELECT * FROM users WHERE Email = '$email'");
  $result = mysqli_fetch_assoc($email_check);
  if (!isset($result)) {
    $_SESSION['message'] = "Email doesn't Exist !";
    header('location: login.php');
  }else{
    // var_dump($result);
    // die;
    $password = $_POST['password'];
    $pass_verify= password_verify($password,$result['Password']);
    $_SESSION['user'] = $result; 
    header('location: dash.php');

  }
  }
 //logout Session :

 if(isset($_GET['logout'])){
  session_destroy();
  header('location: login.php');
}
