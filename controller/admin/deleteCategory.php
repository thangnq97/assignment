<?php 
    require_once "../../model/connect.php";

    $id = $_GET['id'];
    $query = "DELETE FROM categories WHERE categoryId = $id";
    connect($query);
    header("location:../../view/admin/categoryManager.php");