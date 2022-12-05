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

        <!-- banner -->
        <div>
            <img class="w-full object-cover mx-auto" src="../../img/home_banner.png" alt="">
        </div>
        <!-- main -->
        <div class="max-w-[1280px] mx-auto mt-[64px] mb-[96px] flex gap-2">
            <!-- nav -->
            <div class="flex-[1]">
                <h2 class="font-semibold text-[24px] leading-[36px] mb-[32px]">Danh mục</h2>
                <ul class="flex flex-col">
                    <?php require_once "../../model/connect.php";
                    $query = "SELECT * FROM categories";
                    $categories = getAll($query);
                    foreach ($categories as $item) :
                    ?>
                    <li><a class="block font-semibold text-[16px] py-3 pl-1 rounded leading-[19px] hover:bg-[#F26F21] hover:text-white"
                            href="#"><?php echo $item['categoryName']; ?></a>
                    </li>
                    <?php endforeach ?>

                </ul>
            </div>
            <!-- content -->
            <div class="flex-[3]">
                <!-- search -->
                <div class="mb-8">
                    <form class="relative" action="">
                        <input
                            class="outline-none border border-[#CBD5E0] focus:border-blue-600 h-[40px] w-[400px] rounded pl-8 placeholder:text-[16px] placeholder:text-[#CBD5E0] placeholder:font-medium"
                            type="text" placeholder="Tìm kiếm">
                        <i class="fa-solid fa-magnifying-glass absolute text-blue-600 top-3 left-[10px] z-10"></i>
                        </input>
                    </form>
                </div>
                <!-- items -->
                <div class="grid grid-cols-3 gap-x-10 gap-y-8">
                    <?php
                    $query1 = "SELECT * FROM products";
                    $products = getAll($query1);

                    foreach ($products as $item) :
                    ?>
                    <div>
                        <a class="max-h-[310px]" href="./productDetail.php?id=<?php echo $item['id'] ?>">
                            <img class="w-[400px] h-[300px] object-cover "
                                src="../../img/<?php echo $item['productImage'] ?>" alt="">
                        </a>
                        <a href="./productDetail.php?id=<?php echo $item['id'] ?>">
                            <h3 class="text-black text-[24px] font-bold leading-[28px] mt-3 mb-2">
                                <?php echo $item['productName'] ?></h3>
                        </a>
                        <small
                            class="text-[#898989] font-normal text-[18px] leading-[27px] mb-1"><?php echo $item['productDesc'] ?></small>
                        <p class="text-[#F54748] font-normal text-[20px] leading-[30px]">
                            <?php echo '$' . $item['productPrice'] ?></p>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php require './footer.php';
        echo footerRender();
        ?>
    </div>

</body>

</html>