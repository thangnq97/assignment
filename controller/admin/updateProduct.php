<?php
require_once "../../model/connect.php";

if (isset($_POST['updateProduct'])) {
    $id = $_POST['id'];
    $productName = $_POST['productName'];
    $productDesc = $_POST['productDesc'];
    if (empty($_FILES['newImage']['name'])) {
        $productImage = $_POST['oldImage'];
    } else {
        $productImage = $_FILES['newImage']['name'];
        move_uploaded_file($_FILES["newImage"]["tmp_name"], "../../img/" . $_FILES["newImage"]["name"]);
    }
    $productPrice = $_POST['productPrice'];
    $categoryId = $_POST['categoryId'];

    $query = "UPDATE products SET productName = '$productName', productDesc = '$productDesc', productImage = '$productImage', productPrice = $productPrice, categoryId = $categoryId WHERE id = $id";
    connect($query);
    header("location:../../view/admin/productManager.php");
}