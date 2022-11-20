<?php
include 'database.php';
if (isset($_POST['add_btn'])) add();
function add(){
    global $connexion;
    extract($_POST);
    $sql = "INSERT INTO `instruments`( `name_instrument`, `category_instrument`, `price_instrument`, `quantite`, `description`) 
    VALUES ('$instrument_name','$instrument_category','$instrument_price','$instrument_quantite','$instrument_description')";
    
    $query = mysqli_query($connexion, $sql);

}