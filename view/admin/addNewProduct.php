<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
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
            <div class="max-w-[900px] flex flex-col items-center mt-10">
                <h2 class="font-bold text-[32px] mb-8">Thêm mới sản phẩm</h2>
                <form class="w-[80%] flex flex-col gap-8" action="../../controller/admin/addNewProduct.php"
                    method="POST" enctype="multipart/form-data">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Tên sản phẩm</label>
                        <input name="productName"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] h-[35px] outline-none pl-3"
                            type="text" placeholder="Nhập tên sản phẩm">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Giá sản phẩm</label>
                        <input name="productPrice"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] h-[35px] outline-none pl-3"
                            type="text" placeholder="Nhập giá sản phẩm">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Ảnh sản phẩm</label>
                        <input type="file" name="productImage">
                    </div>
                    <img src="" alt="">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Mô tả sản phẩm</label>
                        <textarea name="productDesc"
                            class="focus:border-blue-500 w-full rounded border border-[#CED4DA] outline-none pl-3 pt-4"
                            name="" id="" cols="30" rows="5" placeholder="Nhập mô tả sản phẩm ở đây"></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#212529] font-[400] text-[16px]" for="">Danh mục sản phẩm</label>
                        <select class="focus:border-blue-500 outline-none border border-[#CED4DA] rounded"
                            name="categoryId" id="">
                            <?php require_once "../../model/connect.php";
                            $query = "SELECT * FROM categories";
                            $categories = getAll($query);
                            foreach ($categories as $item) :
                            ?>
                            <option value="<?php echo $item['categoryId']; ?>"><?php echo $item['categoryName']; ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button name="addProduct"
                            class="rounded bg-[#38A169] text-[14px] text-white font-[400] w-[120px] h-[40px] hover:opacity-90"
                            type="submit">Add New Product</button>
                    </div>
                </form>
            </div>

        </article>
    </div>
</body>

</html>