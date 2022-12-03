<?php 
    require_once "../../model/connect.php";

    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    connect($query);
    header("location:../../view/admin/userManager.php");