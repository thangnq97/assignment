<?php
require_once "../../model/connect.php";

if (isset($_POST['updateUser'])) {
    $id = $_POST['id'];
    $username = $_POST['userName'];
    $email = $_POST['email'];
    if (empty($_FILES['newAvatar']['name'])) {
        $avatar = $_POST['oldAvatar'];
    } else {
        $avatar = $_FILES['newAvatar']['name'];
        move_uploaded_file($_FILES['newAvatar']['tmp_name'], '../../img' . $_FILES['newAvatar']['name']);
    }
    $password = $_POST['password'];

    $query = "UPDATE users SET userName = '$username', email = '$email', avatar = '$avatar', password = '$password' WHERE id = $id";
    connect($query);
    header("location:../../view/admin/userManager.php");
}