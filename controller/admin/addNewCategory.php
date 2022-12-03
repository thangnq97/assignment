<?php
require_once "../../model/connect.php";

if (isset($_POST['newCategory'])) {
    $categoryName = $_POST['categoryName'];
    $query = "INSERT INTO categories (categoryName) VALUES ('$categoryName')";
    connect($query);
    header("location:../../view/admin/categoryManager.php");
}