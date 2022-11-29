<?php
function headerRender()
{
    return '
        <div class="max-w-[1280px] mx-auto flex justify-between py-8 items-center">
        <a href="#">
            <img src="../../img/logo.png" alt="">
        </a>
        <ul class="flex justify-between items-center gap-8">
            <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="#">Trang Chủ</a></li>
            <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="#">Sản Phẩm</a></li>
            <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="#">Về Chúng Tôi</a></li>
            <li><a class="text-[#5D5D5D] text-[18px] font-semibold hover:text-[#F26F21]" href="#">Liên Hệ</a></li>
        </ul>
        <div class="flex items-center gap-4">
            <a href="#">
                <button
                    class="border border-[#0066B2] text-[#0066B2] bg-white px-3 py-1 rounded hover:bg-[#0066B2] hover:text-white">Đăng
                    Nhập</button>
            </a>
            <a href="#">
                <button
                    class="border border-[#0066B2] text-[#0066B2] bg-white px-3 py-1 rounded hover:bg-[#0066B2] hover:text-white">Đăng
                    Ký</button>
            </a>
        </div>
        </div>
        ';
}