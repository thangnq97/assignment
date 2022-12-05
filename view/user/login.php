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

        <!-- main -->
        <div>
            <div class="max-w-[864px] mx-auto mt-[64px] mb-[320px] ml-[320px] flex justify-around gap-[64px]">
                <div class="flex-[1]">
                    <a href="#">
                        <img src="../../img/login.png" alt="">
                    </a>
                </div>
                <div class="flex-[1]">
                    <h2 class="text-center text-[#37A9CD] font-bold text-[30px] leading-[36px]">Đăng nhập</h2>
                    <form class="mt-6 mb-8" method="POST" action="../../controller/user/login.php"
                        onsubmit="return check()">
                        <div class="mb-2">
                            <label class="form-label text-[#4A5568] font-normal text-[16px] mb-3">Email</label>
                            <input type="email" name="email"
                                class="border border-[#37A9CD] rounded w-full h-[50px] outline-none pl-4"
                                placeholder="John.snow@gmail.com">
                        </div>
                        <div class="mb-8">
                            <label class="form-label text-[#4A5568] font-normal text-[16px] mb-3">Mật khẩu</label>
                            <input type="password" name="password"
                                class="border border-[#37A9CD] rounded w-full h-[50px] outline-none pl-4"
                                placeholder="*********">
                        </div>
                        <?php if (isset($_GET['check'])) {
                            echo "<p class='mb-3 text-red-500'>Sai tên đăng nhập hoặc mật khẩu</p>";
                        } ?>
                        <button type="submit" name="login"
                            class="w-full h-[50px] bg-[#37A9CD] rounded text-white font-bold text-[16px] hover:bg-[#4fcdf3] mb-4">Đăng
                            nhập
                            ngay</button>
                        <button class="w-full flex items-center justify-center gap-3 h-[50px] bg-[#2D3748] rounded">
                            <div>
                                <img src="../img/google.png" alt="">
                            </div>
                            <p class="text-white font-bold text-[16px]">Đăng nhập với tài khoản Google</p>
                        </button>
                    </form>
                    <div class="text-center">
                        <a href="#">
                            <p class="text-[#37A9CD] font-normal text-[14px] mb-4">Quên mật khẩu?</p>
                        </a>
                        <p class="text-[#616161] font-normal text-[16px]">Bạn chưa có tài khoản? <a
                                href="./register.php"><span class="text-[#37A9CD]">Đăng ký ngay</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/login.js"></script>
</body>

</html>