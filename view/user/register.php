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
        </div>

        <!-- main -->
        <div>
            <div class="max-w-[864px] mx-auto mt-[64px] mb-[320px] ml-[320px] flex justify-around gap-[64px]">
                <div class="flex-[1]">
                    <a href="#">
                        <img src="../../img/login.png" alt="">
                    </a>
                </div>
                <div class="flex-[1]">
                    <h2 class="text-center text-[#F26F21] font-bold text-[30px] leading-[36px]">Đăng ký</h2>
                    <form class="mt-6 mb-8" method="POST" action="../../controller/user/register.php"
                        enctype="multipart/form-data" onsubmit="return checkLogin()">
                        <div class="mb-2 flex flex-col gap-[10px]">
                            <label class="form-label text-[#4A5568] font-normal text-[16px]">Họ và tên</label>
                            <input type="text" name="username"
                                class="border border-[#F26F21] rounded w-full h-[50px] outline-none pl-4 placeholder:text-[#C4C4C4]"
                                placeholder="Nguyễn Hoàng Tiến">
                        </div>
                        <div class="mb-2 flex flex-col gap-[10px]">
                            <label class="form-label text-[#4A5568] font-normal text-[16px]">Email</label>
                            <input type="text" name="email"
                                class="border border-[#F26F21] rounded w-full h-[50px] outline-none pl-4 placeholder:text-[#C4C4C4]"
                                placeholder="tiennh21@gmail.com">
                        </div>
                        <div class="mb-2 flex flex-col gap-[10px]">
                            <label class="form-label text-[#262727] font-normal text-[16px]">Avatar</label>
                            <input name="avatar" type="file" class="h-[50px]">
                        </div>
                        <div class="mb-2 flex flex-col gap-[10px]">
                            <label class="form-label text-[#4A5568] font-normal text-[16px]">Mật khẩu</label>
                            <input type="password" name="password"
                                class="border border-[#F26F21] rounded w-full h-[50px] outline-none pl-4 placeholder:text-[#C4C4C4]"
                                placeholder="*********">
                        </div>
                        <div class="mb-5 flex flex-col gap-[10px]">
                            <label class="form-label text-[#4A5568] font-normal text-[16px]">Nhập lại mật khẩu</label>
                            <input type="password" name="rePassword"
                                class="border border-[#F26F21] rounded w-full h-[50px] outline-none pl-4 placeholder:text-[#C4C4C4]"
                                placeholder="*********">
                        </div>
                        <a href="">
                            <button type="submit" name="register"
                                class="w-full h-[50px] bg-[#F26F21] rounded text-white font-bold text-[16px] hover:bg-[#f37f3d] mb-4">Đăng
                                ký</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/register.js"></script>
</body>

</html>