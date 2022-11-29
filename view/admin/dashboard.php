<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- container -->
    <div class="max-w-[1440px] mx-auto flex">
        <!-- aside -->
        <aside class="w-[300px] py-5 border-r">
            <a class="flex justify-center" href="#">
                <img src="../../img/logo.png" alt="">
            </a>
            <nav>
                <ul class="flex flex-col gap-4 mt-[52px]">
                    <li><a class="block px-5 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="#"><i class="mr-2 fa-solid fa-table-columns"></i> Dashboard</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="#"><i class="mr-2 fa-sharp fa-solid fa-laptop"></i> Quản lý sản phẩm</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="#"><i class="mr-2 fa-sharp fa-solid fa-laptop"></i> Quản lý user</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="#"><i class="mr-2 fa-brands fa-rocketchat"></i> Quản lý danh mục</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="#"><i class="mr-2 fa-regular fa-chart-bar"></i> Thống kê</a></li>
                </ul>
            </nav>
        </aside>
        <!-- article -->
        <article class="flex-[1] px-8 py-5">
            <div class="flex justify-end gap-5 items-center">
                <div>
                    <i class="fa-regular fa-bell"></i>
                </div>
                <p class="text-[#8D8D8D] text-[14px] font-[400] leading-[19px]">Xin chào, <span
                        class="text-[#0066B2]">Nguyễn Hường</span></p>
                <a href="#">
                    <img src="../../img/user.png" alt="">
                </a>
            </div>
            <div class="mt-[56px] flex justify-center items-center h-[240px] rounded-2xl"
                style="background-image: url(../../img/dashboard_banner.png);">
                <h2 class="text-white text-[32px] font-bold leading-[40px]">Welcome to Dashboard</h2>
            </div>
        </article>
    </div>
</body>

</html>