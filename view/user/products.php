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
        <?php require '../header.php';
        echo headerRender();
        ?>

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
                    <li><a class="block font-semibold text-[16px] py-3 pl-1 rounded leading-[19px] hover:bg-[#F26F21] hover:text-white"
                            href="#">Danh mục 1</a></li>
                    <li><a class="block font-semibold text-[16px] py-3 pl-1 rounded leading-[19px] hover:bg-[#F26F21] hover:text-white"
                            href="#">Danh mục 2</a></li>
                    <li><a class="block font-semibold text-[16px] py-3 pl-1 rounded leading-[19px] hover:bg-[#F26F21] hover:text-white"
                            href="#">Danh mục 3</a></li>
                    <li><a class="block font-semibold text-[16px] py-3 pl-1 rounded leading-[19px] hover:bg-[#F26F21] hover:text-white"
                            href="#">Danh mục 4</a></li>
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
                    <div>
                        <a class="max-h-[310px]" href="#">
                            <img class="w-full object-cover" src="../../img/home11.png" alt="">
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
                            <img class="w-full object-cover" src="../../img/home12.png" alt="">
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
                            <img class="w-full object-cover" src="../../img/home13.png" alt="">
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
                            <img class="w-full object-cover" src="../../img/home11.png" alt="">
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
                            <img class="w-full object-cover" src="../../img/home12.png" alt="">
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
                            <img class="w-full object-cover" src="../../img/home13.png" alt="">
                        </a>
                        <a href="#">
                            <h3 class="text-black text-[24px] font-bold leading-[28px] mt-3 mb-2">Product 3</h3>
                        </a>
                        <small class="text-[#898989] font-normal text-[18px] leading-[27px] mb-1">description
                            3</small>
                        <p class="text-[#F54748] font-normal text-[20px] leading-[30px]">$300</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php require '../footer.php';
        echo footerRender();
        ?>
    </div>

</body>

</html>