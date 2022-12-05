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
                    <h2 class="text-center text-[#F26F21] font-bold text-[30px] leading-[36px]">Đăng ký</h2>
                    <form class="mt-6 mb-8" method="POST" action="../../controller/user/register.php"
                        enctype="multipart/form-data">
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

</body>

</html>