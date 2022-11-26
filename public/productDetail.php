<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- conatiner -->
    <div class="max-w-[1920px] mx-auto">
        <!-- header -->
        <?php require './header.php';
        echo headerRender();
        ?>

        <!-- main -->
        <div class="max-w-[1280px] mx-auto mt-[64px] mb-[320px] grid grid-cols-2 gap-10">
            <div class="flex justify-center flex-col">
                <a href="#">
                    <h2 class="text-[#111928] font-[900] text-[40px] leading-[48px]">Big and Juicy Wagyu Beef
                        Cheeseburger
                    </h2>
                </a>
                <p class="text-[#F54748] font-semibold text-[40px] leading-[48px] mt-5 mb-[30px]">$30</p>
                <p class="text-[#111928] text-[18px] font-[400] leading-[21px] mb-8">Pellentesque habitant morbi
                    tristique
                    senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit
                    amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <form action="">
                    <input class="border border-[rgba(0, 0, 0, 0.1)] h-[42px] w-[180px] rounded" type="text">
                    <button
                        class="bg-[#111928] rounded ml-5 text-white text-[14px] font-semibold leading-[17px] h-[42px] w-[110px] hover:bg-opacity-90">Add
                        To
                        Cart</button>
                </form>
            </div>
            <div>
                <a href="#">
                    <img src="../img/product_detail.png" alt="">
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