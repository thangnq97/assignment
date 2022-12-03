<?php
require_once "../../model/connect.php";
if (isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_FILES['productImage']['name'];
    $productDesc = $_POST['productDesc'];
    $categoryId = $_POST['categoryId'];

    $query = "INSERT INTO products (productName, productDesc, productImage, productPrice, categoryId) VALUES ('$productName', '$productDesc', '$productImage', $productPrice, $categoryId)";
    move_uploaded_file($_FILES["productImage"]["tmp_name"], "../../img/" . $_FILES["productImage"]["name"]);
    connect($query);
    header("location:../../view/admin/productManager.php");
}