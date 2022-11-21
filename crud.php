<?php
include 'database.php';
if (isset($_POST['add_btn'])) add();
if (isset($_POST['edit_btn'])) update();
if (isset($_POST['delete_btn'])) delete();

function add(){
    global $connexion;
    extract($_POST);
    $sql = "INSERT INTO `instruments`( `name_instrument`, `category_instrument`, `price_instrument`, `quantite`, `description`) 
    VALUES ('$instrument_name','$instrument_category','$instrument_price','$instrument_quantite','$instrument_description')";
    
    mysqli_query($connexion, $sql);
    header("location: dash.php");
    $_SESSION["message"] ="Instrument was added successfuly !";
}
function show(){
global $connexion;
$query ="SELECT instruments.*, category.name as category_name FROM instruments INNER join category on instruments.category_instrument = category.c_id";
$result = mysqli_query($connexion,$query);
return $result;
}

function update(){
    global $connexion;
    extract($_POST);
   $query ="UPDATE `instruments` SET `name_instrument`='$instrument_name',`category_instrument`='$instrument_category',`price_instrument`='$instrument_price',`quantite`='$instrument_quantite',`description`='$instrument_description' WHERE id_instrument = '$hideId'";
    mysqli_query($connexion, $query);
    header("location: dash.php");
    $_SESSION["message"] ="Instrument was updated successfuly !";
}

function delete(){
    global $connexion;
    $hideId =$_POST['hideId'];
    $query="DELETE FROM `instruments` WHERE id_instrument = '$hideId'";
    mysqli_query($connexion, $query);
    header("location: dash.php");
    $_SESSION["message"] ="Instrument was deleted successfuly !";
}

function statistics($column){
   global $connexion;
   switch($column){
    case "stock" :
        $sql ="SELECT SUM(quantite) FROM `instruments`";
        break;
    case "category_instrument":
        $sql ="SELECT COUNT(category_instrument) FROM `instruments`";
        break;
    case "price":
        $sql ="SELECT Max(price_instrument) FROM `instruments`";
        break;
    case "users":
        $sql ="SELECT COUNT(UserID) FROM `users`";
        break;
    default:
        return;

   }

   $result = mysqli_query($connexion,$sql);
   $result=mysqli_fetch_column($result);
   return $result;

}