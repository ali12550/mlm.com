<?php include 'header.php'?>

<!-- Deposit page start -->



<header class="header_deposit_usd position-fixed w-100 bg-white">
    <div class="px-3 py-3 border shadow ">

        <img class="chevron-left " src="img/left_back.png" alt="">
        <div class="text-center">
            <span>USDT</span>
        </div>

    </div>
</header>
<div class="vh_top "></div>
<section class="section_deposit_usdt  px-2 ">
    <div class="container-fluid bg-white pt-3 px-3 ">
        <p>Transfer Channel:</p>
        <h5 class="py-2">USDT Top-up</h5>
        <div class="input-group mb-3  usdt_field">
            <span class="input-group-text text-danger " id="basic-addon1">*</span>
            <input type="text" class="form-control enter_value bg-light py-3 px-2" placeholder="Username"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="pe-2">
            <div class="row usdt_top_up gap-2 w-100 justify-content-center m-auto text-center pt-3 ">
                <div class="col-2 px-0  mt-2">
                    <button type="submit" value="50" class="btn price-btn btn_dep_one price-btn">50</button>
                </div>
                <div class="col-2 px-0 ms-3 mt-2">
                    <button type="button" value="100" class="btn price-btn btn_dep_two price-btn">100</button>
                </div>
                <div class="col-2 px-0 ms-3 mt-2">
                    <button type="button" value="300" class="btn price-btn btn_dep_third">300</button>
                </div>
                <div class="col-2 px-0 ms-3 mt-2">
                    <button type="button" value="500" class="btn price-btn btn_dep_four">500</button>
                </div>
                <div class="col-2 px-0  mt-2">
                    <button type="button" value="1000" class="btn price-btn btn_dep_fifth">1000</button>
                </div>
                <div class="col-2 px-0 ms-3 mt-2">
                    <button type="button" value="3000" class="btn price-btn btn_dep_six">3000</button>
                </div>
                <div class="col-2 px-0 ms-3 mt-2">
                    <button type="button" value="5000" class="btn price-btn btn_dep_seven">5000</button>
                </div>
                <div class="col-2 px-0 ms-3 mt-2">
                    <button type="button" value="10000" class="btn price-btn btn_dep_eight">10000</button>
                </div>
            </div>
          
        </div>

        <div class="text-center confirm pt-5">
            <a class="text-decoration-none" href="upaydom.php"><button>Confirm</button></a>
            <div class="text_more text-center pb-3">

                <p class=" text-primary pt-4 pb-2">how to submit a deposit order</p>
                <img src="img/down-arrow.png" alt="">
            </div>
        </div>

    </div>
    <div class=" explore_box bg-white pt-4 pb-2  my-3 px-3 shadow border text-start">
        <p><strong>Since the amount of recharge information is too large, please carefully check the
                card number of this platform before recharging. If you have any questions, please click
                on the platform's online customer service consultation.</strong></p>

        <p><strong>The delivery amount is 10%-50% of the balance of the random default user account of
                the platform, and each account can deliver up to 30 orders per day. (Note: the amount of
                each order is different) Solemn reminder: In order to avoid network delay and other
                communication factors, if the order has been successfully delivered but not submitted in
                time and the order is frozen, please remember to end the automatic scheduling mode
                before leaving the order page; Please know! ! In order to improve the platform matching
                speed, the registration is successful within 7 days, and 0 scheduling records are
                cancelled.</strong></p>

        <p><strong>* Reminder: In order to prevent someone from malicious money laundering or cashing
                out a series of misdeeds, the member account must complete the minimum purchase order,
                if you do not complete the corresponding order number, you will not be able to start the
                withdrawal. Full withdrawal of 30 orders can be completed from the member account. After
                the successful withdrawal audit, the bank shall prevail! The withdrawal would arrive by
                24:00 the next day.</strong></p>

        <p><strong>Important: All cards in each member's name can only be tied to one member account. Do
                not use the same IP address to log in to multiple accounts to collect
                commissions.</strong></p>

        <div class="text-center pt-2 pb-1">
            <img class="arrow_up_box" src="img/down-up_box.png" alt="">
        </div>
    </div>
    <div class="container-fluid com_tip_box shadow border bg-white pt-4 px-3 pb-4  my-4">
        <div class="pb-2">
            <p class="com_tip_style">Friendly Reminders</p>
        </div>
        <div>
            <p>The amount of USDT for every single top-up: 30~1000000</p>
            <p class="">
                1. Please enter the correct amount of USDT and wallet address.<br>
                2. Please contact our online customer service if the amount is not shown or errors.<br>
                3. Please do not repeatedly submit the order after complete the transfer, submit only once.<br>
                4. Please keep your transfer voucher properly. We will not be responsible for any stolen transfer
                voucher.<br>
            </p>

        </div>
    </div>

</section>
<!-- Deposit page end -->

<div class="vh_top mb-5"></div>
<script>
$(document).ready(function() {
    $(".text_more").click(function() {

        $(".explore_box").css("display", "block");
        $(".text_more").css("display", "none");
        $(".confirm ").css("padding-bottom", "2rem");
    });
    $(".arrow_up_box").click(function() {

        $(".explore_box").css("display", "none");
        $(".text_more").css("display", "block");

    });
});
</script>
<script>
$(document).ready(function() {
    var pricebtn = $(".price-btn").val();
    $(".price-btn").click(function() {
        $(".enter_value").val($(this).val());
    });


});
</script>