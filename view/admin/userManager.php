<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Manager</title>
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
        <aside class="w-[300px] py-5 border-r min-h-screen">
            <a class="flex justify-center" href="#">
                <img src="../../img/logo.png" alt="">
            </a>
            <nav>
                <ul class="flex flex-col gap-4 mt-[52px]">
                    <li><a class="block px-5 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="./dashboard.php"><i class="mr-2 fa-solid fa-table-columns"></i> Dashboard</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="./productManager.php"><i class="mr-2 fa-sharp fa-solid fa-laptop"></i> Quản lý sản
                            phẩm</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="userManager.php"><i class="mr-2 fa-sharp fa-solid fa-laptop"></i> Quản lý user</a>
                    </li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="./categoryManager.php"><i class="mr-2 fa-brands fa-rocketchat"></i> Quản lý danh
                            mục</a></li>
                    <li><a class="block px-4 py-3 text-[#000000] hover:text-[#4A4A4A] hover:bg-orange-500 rounded font-[400] text-[16px] leading-[21px]"
                            href="#"><i class="mr-2 fa-regular fa-chart-bar"></i> Thống kê</a></li>
                </ul>
            </nav>
        </aside>
        <!-- article -->
        <article class="flex-[1] px-8 py-5">
            <div class="flex justify-end gap-5 items-center">
                <?php
                if (isset($_SESSION['username'])) {
                ?>
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
                <?php } else { ?>
                <a href="../user/login.php">
                    <button
                        class="border text-white text-[14px] font-[400] leading-[19px] rounded py-1 px-2 bg-blue-400 hover:opacity-90">Đăng
                        nhập</button>
                </a>
                <?php } ?>
            </div>
            <div class="mt-[56px] flex justify-center items-center h-[240px] rounded-2xl"
                style="background-image: url(../../img/PM_banner.png);">
                <h2 class="text-white text-[32px] font-bold leading-[40px]">Quản lý user</h2>
            </div>
            <div class="flex justify-between items-center mt-10 mb-5">
                <h3 class="text-[20px] font-bold leading-[27px]">Danh sách user</h3>
                <div class="flex gap-4 items-center">
                    <form class="relative" action="userManager.php" method="GET">
                        <input name="userSearch"
                            class="outline-none border border-[#CBD5E0] focus:border-blue-600 h-[40px] w-[400px] rounded pl-8 placeholder:text-[16px] placeholder:text-[#CBD5E0] placeholder:font-normal"
                            type="text" placeholder="Aspen Weste">
                        <button type="submit"><i
                                class="fa-solid fa-magnifying-glass absolute text-blue-600 top-3 left-[10px] z-10"></i></button>
                        </input>
                    </form>
                    <a href="./addNewUser.php">
                        <button
                            class="rounded text-[14px] font-[400] leading-[19px] bg-[#38A169] text-white h-[40px] w-[130px] hover:opacity-90">Add
                            New
                            User</button>
                    </a>
                </div>
            </div>
            <table class="border border-[#5B5B5B] w-full">
                <thead>
                    <tr>
                        <th
                            class="text-center border py-4 bg-[#4A4A4A] text-white font-semibold text-[12px] border-[#5B5B5B] w-[100px]">
                            id</th>
                        <th
                            class="text-center border py-4 bg-[#4A4A4A] text-white font-semibold text-[12px] border-[#5B5B5B]">
                            UserName</th>
                        <th
                            class="text-center border py-4 bg-[#4A4A4A] text-white font-semibold text-[12px] border-[#5B5B5B]">
                            Avatar</th>
                        <th
                            class="text-center border py-4 bg-[#4A4A4A] text-white font-semibold text-[12px] border-[#5B5B5B]">
                            Password</th>
                        <th
                            class="text-center border py-4 bg-[#4A4A4A] text-white font-semibold text-[12px] border-[#5B5B5B]">
                            Email</th>
                        <th
                            class="text-center border py-4 bg-[#4A4A4A] text-white font-semibold text-[12px] border-[#5B5B5B]">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require_once "../../model/connect.php"; ?>
                    <?php if (!isset($_GET['userSearch'])) {
                        $query = "SELECT * FROM users";
                        $users = getAll($query);
                        foreach ($users as $item) :
                    ?>
                    <tr>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B] w-[100px]">
                            <?php echo $item['id'] ?>
                        </td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <?php echo $item['userName'] ?></td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <img class="w-[100px] h-[100px] ml-[50%] translate-x-[-50%]"
                                src="../../img/<?php echo $item['avatar'] ?>" alt="">
                        </td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <?php echo $item['password'] ?></td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <?php echo $item['email'] ?>
                        </td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <a href="./updateUser.php?id=<?php echo $item['id'] ?>">
                                <button
                                    class="text-[14px] text-white font-[400] bg-[#1E74A4] rounded h-[30px] w-[70px] hover:opacity-90">Update</button>
                            </a>
                            <a onclick="return confirm('Are you sure?')"
                                href="../../controller/admin/deleteUser.php?id=<?php echo $item['id'] ?>">
                                <button
                                    class="text-[14px] text-white font-[400] bg-[#AC3131] rounded h-[30px] w-[70px] hover:opacity-90">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;
                    } else {
                        $userSearch = $_GET['userSearch'];
                        $query = "SELECT * FROM users WHERE userName LIKE '%$userSearch%'";
                        $users = getAll($query);
                        foreach ($users as $item) :
                        ?>
                    <tr>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B] w-[100px]">
                            <?php echo $item['id'] ?>
                        </td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <?php echo $item['userName'] ?></td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <img class="w-[100px] h-[100px] ml-[50%] translate-x-[-50%]"
                                src="../../img/<?php echo $item['avatar'] ?>" alt="">
                        </td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <?php echo $item['password'] ?></td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <?php echo $item['email'] ?>
                        </td>
                        <td class="text-center border py-4 px-3 text-[14px] font-[400] border-[#5B5B5B]">
                            <a href="./updateUser.php?id=<?php echo $item['id'] ?>">
                                <button
                                    class="text-[14px] text-white font-[400] bg-[#1E74A4] rounded h-[30px] w-[70px] hover:opacity-90">Update</button>
                            </a>
                            <a onclick="return confirm('Are you sure?')"
                                href="../../controller/admin/deleteUser.php?id=<?php echo $item['id'] ?>">
                                <button
                                    class="text-[14px] text-white font-[400] bg-[#AC3131] rounded h-[30px] w-[70px] hover:opacity-90">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;
                    } ?>

                </tbody>
            </table>
        </article>
    </div>
</body>

</html>