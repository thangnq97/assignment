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
        <div class="max-w-[1280px] mx-auto mt-[64px] mb-[96px]">
            <!-- items 1 -->
            <div>
                <a class="text-center " href="#">
                    <h2 class="text-[#3A3A3A] mb-[48px] font-bold text-4xl leading-[43px] hover:text-red-500">Our
                        Products
                    </h2>
                </a>
                <div class="grid grid-cols-4 gap-10">
                    <?php require_once "../../model/connect.php";
                    $query = "SELECT * FROM products";
                    $products = getAll($query);
                    foreach ($products as $item) :
                    ?>
                    <div class="mb-16">
                        <a class="h-full max-h-[310px]" href="./productDetail.php?id=<?php echo $item['id'] ?>">
                            <img class="w-full h-full object-cover" src="../../img/<?php echo $item['productImage'] ?>"
                                alt="">
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
            <!-- load more -->
            <div class="flex items-center justify-center mt-16 mb-[96px]">
                <input
                    class="border border-[#F26F21] w-[245px] h-[48px] text-[#F26F21] text-[18px] font-bold cursor-pointer hover:bg-[#F26F21] hover:text-white"
                    type="submit" value="Show More">
            </div>
            <!-- items 2 -->
            <div>
                <a class="flex justify-center" href="#">
                    <h2 class="text-[#3A3A3A] font-bold text-[36px] leading-[43px] hover:text-red-500 mb-8">Tips &
                        Tricks
                    </h2>
                </a>
                <div class="grid grid-cols-3 gap-10">
                    <div>
                        <a class="max-w-[400px]" href="#">
                            <img class="w-full object-cover" src="../../img/home21.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="mt-8 mb-3 text-[#3A3A3A] font-semibold text-[24px] leading-[28px]">How to create
                                a living room to love</h3>
                        </a>
                        <p class="text-[#898989] text-[14px] font-normal leading-[21px]">20 jan 2020</p>
                    </div>

                    <div>
                        <a class="max-w-[400px]" href="#">
                            <img class="w-full object-cover" src="../../img/home22.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="mt-8 mb-3 text-[#3A3A3A] font-semibold text-[24px] leading-[28px]">Solution for
                                clean look working
                                space</h3>
                        </a>
                        <p class="text-[#898989] text-[14px] font-normal leading-[21px]">10 jan 2020</p>
                    </div>

                    <div>
                        <a class="max-w-[400px]" href="#">
                            <img class="w-full object-cover" src="../../img/home23.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="mt-8 mb-3 text-[#3A3A3A] font-semibold text-[24px] leading-[28px]">Make your
                                cooking activity
                                more fun with good setup</h3>
                        </a>
                        <p class="text-[#898989] text-[14px] font-normal leading-[21px]">20 jan 2020</p>
                    </div>
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