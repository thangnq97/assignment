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
        <?php require './header.php';
        echo headerRender();
        ?>

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
                        <a class="h-full max-h-[310px]" href="#">
                            <img class="w-full h-full object-cover" src="../../img/<?php echo $item['productImage'] ?>"
                                alt="">
                        </a>
                        <a href="#">
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