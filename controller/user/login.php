<?php
session_start();
require_once "../../model/connect.php";

$query = "SELECT * FROM users";
$users = getAll($query);
foreach ($users as $item) {
    if (isset($_POST['login'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            if ($_POST['email'] == $item['email'] && $_POST['password'] == $item['password']) {
                if ($_POST['email'] == 'thangnqph28950@fpt.edu.vn' && $_POST['password'] == '123456') {
                    $_SESSION['username'] = $_POST['email'];
                    header("location:../../view/admin/dashboard.php");
                    die;
                    // echo 'test';
                    // die;
                    // $_SESSION['admin'] = $_POST['email'];
                } else {
                    $_SESSION['username'] = $_POST['email'];
                    header("location:../../view/user/home.php");
                    die;
                }
            } else {
                header("location:../../view/user/login.php");
                echo "Không đúng tài khoản hoặc mật khẩu!";
            }
        } else {
            header("location:../../view/user/login.php");
        }
    }
}