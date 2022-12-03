<?php
require_once "../../model/connect.php";

if (isset($_POST['updateCategory'])) {
    $cateId = $_POST['categoryId'];
    $cateName = $_POST['categoryName'];
    $query = "UPDATE categories SET categoryName = '$cateName' WHERE categoryId = $cateId";
    connect($query);
    header("location:../../view/admin/categoryManager.php");
}