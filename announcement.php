<?php include "header.php" ?>

<header class="header_deposit_usd position-fixed w-100 bg-white">
    <div class="px-3 py-3 border shadow ">

        <img class="chevron-left" src="img/left_back.png" alt="" style="float: left;">
        <div class="text-center">
            <span>Account details</span>
        </div>

    </div>
</header>
<div class="vh_top "></div>
<section class="section_announcement pt-5">
    <div class="contianer-fluid  px-0 ">
        <div class="announcement_box contianer-fluid pb-4  m-auto px-2 mx-2 bg-white rounded-3">
            <div>
                <h3 class="announcement_title pt-4"><span></span><span></span><span></span> 1 </h3>
            </div>
            <div class="bg-white ">
                <img class="w-100 " src="img/anouncement_pg.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<div class="vh_top mt-5"></div>

<script>
$(document).ready(function(params) {
    $(".announcement_box").click(function(params) {
        $(".announcement_box img").toggleClass("img-height");
    })
})
</script>