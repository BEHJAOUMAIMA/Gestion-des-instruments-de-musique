<?php
include "./database.php";
if (isset($_POST['add'])) {
    $name =  $_POST['name'];
    if(empty($name)){
        header('location: category.php?error=true');
    }else{
        $sql = "INSERT INTO `category` VALUES (NULL, '$name')";
        if(mysqli_query($connexion, $sql)){
            header('location: category.php?added=true');
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($connexion);
        }
    }
}
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `category` WHERE c_id='$id'";
    mysqli_query($connexion,$sql);
    header('location: category.php?deleted=true');
}
if (isset($_POST['update'])) {
    $id= $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE category SET name='$name' WHERE c_id=$id";
    mysqli_query($connexion, $sql);
    header('location: category.php?updated=true');
}