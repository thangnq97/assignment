<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Manager</title>
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
                            href="./userManager.php"><i class="mr-2 fa-sharp fa-solid fa-laptop"></i> Quản lý user</a>
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
            <div class="max-w-[900px] flex flex-col items-center mt-10">
                <h2 class="font-bold text-[32px] mb-8">Cập nhật sản phẩm</h2>
                <?php require_once "../../model/connect.php";
                $id = $_GET['id'];
                $query = "SELECT * FROM products WHERE id=$id";
                $product = getOne($query);
                ?>
                <form class="w-[80%] flex flex-col gap-8" action="../../controller/admin/updateProduct.php"
                    method="POST" enctype="multipart/form-data" onsubmit="return checkUpdate()">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Id</label>
                        <input value="<?php echo $product['id'] ?>" name="id"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] h-[35px] outline-none pl-3"
                            type="text">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Tên sản phẩm</label>
                        <input value="<?php echo $product['productName'] ?>" name="productName"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] h-[35px] outline-none pl-3"
                            type="text" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Giá sản phẩm</label>
                        <input value="<?php echo $product['productPrice'] ?>" name="productPrice"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] h-[35px] outline-none pl-3"
                            type="text" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Ảnh sản phẩm</label>
                        <input type="file" name="newImage">
                    </div>
                    <div class="flex flex-col gap-2">
                        <input value="<?php echo $product['productImage'] ?>" name="oldImage"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] h-[35px] outline-none pl-3 hidden"
                            type="text">
                    </div>
                    <img class="my-2 w-[200px] h-[200px]" src="../../img/<?php echo $product['productImage'] ?>" alt="">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Mô tả sản phẩm</label>
                        <textarea name="productDesc"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] outline-none pl-3 pt-3"
                            cols="30" rows="5"
                            placeholder="Nhập mô tả sản phẩm ở đây"><?php echo $product['productDesc'] ?></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Danh mục sản phẩm</label>
                        <select class="focus:border-blue-500 outline-none border border-[#CED4DA] rounded"
                            name="categoryId" id="">
                            <?php
                            $id = $product['categoryId'];
                            $query = "SELECT * FROM categories";
                            $categories = getAll($query);
                            foreach ($categories as $item) :
                            ?>
                            <option value="<?php echo $item['categoryId'] ?>" <?php if ($item['categoryId'] == $id) : ?>
                                selected <?php endif ?>>
                                <?php echo $item['categoryName'] ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button name="updateProduct"
                            class="rounded bg-[#1E74A4] text-[14px] text-white font-[400] w-[120px] h-[40px] hover:opacity-90"
                            type="submit">Update
                            Product</button>
                    </div>
                </form>
            </div>

        </article>
    </div>


    <script src="../js/newProduct.js"></script>
</body>

</html>