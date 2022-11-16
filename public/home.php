<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./cover.css">
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
            <img class="w-full object-cover mx-auto" src="../img/home_banner.png" alt="">
        </div>
        <!-- main -->
        <div class="home_main max-w-[1280px] mx-auto">
            <!-- items 1 -->
            <div>
                <a class="text-center " href="#">
                    <h2 class="text-black mb-[48px] font-bold text-4xl leading-[43px] hover:text-red-500">Our Products
                    </h2>
                </a>
                <div class="grid grid-cols-4 gap-10">
                    <div>
                        <a class="max-h-[310px]" href="#">
                            <img class="w-full object-cover" src="../img/home11.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="text-black text-[24px] font-bold leading-[28px] mt-3 mb-2">Product 1</h3>
                        </a>
                        <small class="text-[#898989] font-normal text-[18px] leading-[27px] mb-1">description
                            1</small>
                        <p class="text-[#F54748] font-normal text-[20px] leading-[30px]">$100</p>
                    </div>

                    <div>
                        <a class="max-h-[310px]" href="#">
                            <img class="w-full object-cover" src="../img/home12.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="text-black text-[24px] font-bold leading-[28px] mt-3 mb-2">Product 2</h3>
                        </a>
                        <small class="text-[#898989] font-normal text-[18px] leading-[27px] mb-1">description
                            2</small>
                        <p class="text-[#F54748] font-normal text-[20px] leading-[30px]">$200</p>
                    </div>

                    <div>
                        <a class="max-h-[310px]" href="#">
                            <img class="w-full object-cover" src="../img/home13.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="text-black text-[24px] font-bold leading-[28px] mt-3 mb-2">Product 3</h3>
                        </a>
                        <small class="text-[#898989] font-normal text-[18px] leading-[27px] mb-1">description
                            3</small>
                        <p class="text-[#F54748] font-normal text-[20px] leading-[30px]">$300</p>
                    </div>

                    <div>
                        <a class="max-h-[310px]" href="#">
                            <img class="w-full object-cover" src="../img/home14.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="text-black text-[24px] font-bold leading-[28px] mt-3 mb-2">Product 4</h3>
                        </a>
                        <small class="text-[#898989] font-normal text-[18px] leading-[27px] mb-1">description
                            4</small>
                        <p class="text-[#F54748] font-normal text-[20px] leading-[30px]">$400</p>
                    </div>
                </div>
            </div>
            <!-- load more -->
            <div>
                <input type="submit" value="Show More">
            </div>
            <!-- items 2 -->
            <div>
                <h2>Tips & Tricks</h2>
                <div>
                    <div>
                        <a href="#">
                            <img src="../img/home21.png" alt="">
                        </a>
                        <h3>How to create a living room to love</h3>
                        <p>20 jan 2020</p>
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