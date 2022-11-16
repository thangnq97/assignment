<?php
    function footerRender() {
        return '
        <div class="max-w-[1280px] mx-auto flex justify-between py-8 items-center border-t border-t-[rgba(0, 0, 0, 0.1)]">
            <a href="#">
                <img src="../img/logo.png" alt="">
            </a>
            <ul class="flex justify-between items-center gap-8">
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold" href="#">Home</a></li>
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold" href="#">Products</a></li>
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold" href="#">About Us</a></li>
                <li><a class="text-[#5D5D5D] text-[18px] font-semibold" href="#">Contact Us</a></li>
            </ul>
        </div>
        ';
    }