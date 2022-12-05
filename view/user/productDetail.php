<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- conatiner -->
    <div class="max-w-[1920px] mx-auto">
        <!-- header -->
        <div class="max-w-[1280px] mx-auto flex justify-between py-8 items-center">
            <a href="#">
                <img src="../../img/logo.png" alt="">
            </a>
            <ul class="flex justify-between items-center gap-8">
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="./home.php">Trang
                        Chủ</a></li>
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="./products.php">Sản
                        Phẩm</a></li>
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="#">Về Chúng Tôi</a>
                </li>
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="#">Liên Hệ</a></li>
            </ul>
            <?php
            if (isset($_SESSION['username'])) {
            ?>
            <div class="flex gap-3 items-center">
                <div>
                    <i class="fa-regular fa-bell"></i>
                </div>
                <p class="text-[#8D8D8D] text-[14px] font-[400] leading-[19px]">Xin chào, <span
                        class="text-[#0066B2]"><?php echo $_SESSION['username']['userName'] ?></span></p>
                <a href="#">
                    <img class="w-[40px] h-[40px]" src="../../img/<?php echo $_SESSION['username']['avatar'] ?>" alt="">
                </a>
                <a href="../../controller/user/logout.php">
                    <button
                        class="border text-white text-[14px] font-[400] leading-[19px] rounded py-1 px-2 bg-blue-400 hover:opacity-90">Đăng
                        xuất</button>
                </a>
            </div>
            <?php } else { ?>
            <div class="flex items-center gap-4">
                <a href="./login.php">
                    <button
                        class="border border-[#0066B2] text-[#0066B2] bg-white px-3 py-1 rounded hover:bg-[#0066B2] hover:text-white">Đăng
                        Nhập</button>
                </a>
                <a href="./register.php">
                    <button
                        class="border border-[#0066B2] text-[#0066B2] bg-white px-3 py-1 rounded hover:bg-[#0066B2] hover:text-white">Đăng
                        Ký</button>
                </a>
            </div>
            <?php } ?>

        </div>

        <!-- main -->
        <?php require_once "../../model/connect.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id = $id";
        $product = getOne($query);
        ?>
        <div class="max-w-[1280px] mx-auto mt-[64px] mb-[320px] grid grid-cols-2 gap-10">
            <div class="flex justify-center flex-col">
                <a href="#">
                    <h2 class="text-[#111928] font-[900] text-[40px] leading-[48px]">
                        <?php echo $product['productName'] ?>
                    </h2>
                </a>
                <p class="text-[#F54748] font-semibold text-[40px] leading-[48px] mt-5 mb-[30px]">
                    <?php echo '$' . $product['productPrice'] ?></p>
                <p class="text-[#111928] text-[18px] font-[400] leading-[21px] mb-8">Pellentesque habitant morbi
                    tristique
                    senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                    amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <form action="./home.php">
                    <input class="border border-[rgba(0, 0, 0, 0.1)] h-[42px] w-[180px] rounded" type="text">
                    <button type="submit"
                        class="bg-[#111928] rounded ml-5 text-white text-[14px] font-semibold leading-[17px] h-[42px] w-[110px] hover:bg-opacity-90">Add
                        To
                        Cart</button>
                </form>
            </div>
            <div class="h-full max-h-[700px]">
                <a href="#">
                    <img class="w-[90%] h-[70%] object-cover my-[50%] translate-y-[-50%]"
                        src="../../img/<?php echo $product['productImage'] ?>" alt="">
                </a>
            </div>
        </div>
        <!-- footer -->
        <?php require './footer.php';
        echo footerRender();
        ?>
    </div>

</body>

</html>