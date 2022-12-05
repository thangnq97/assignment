<?php
require_once "../../model/connect.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $avatar = $_FILES['avatar']['name'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (userName, email, avatar, password) VALUES ('$username', '$email', '$avatar', '$password')";
    move_uploaded_file($_FILES['avatar']['tmp_name'], '../../img/' . $_FILES['avatar']['name']);
    connect($query);
    header("location:../../view/user/login.php");
}