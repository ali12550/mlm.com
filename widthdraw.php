<?php include "header.php"?>
    <!-- header widhdraw -->
    <header class="header_deposit position-fixed w-100 bg-white">
        <div class="px-3 py-3 border shadow d-flex justify-content-between align-items-center">

            <img class="chevron-left" src="img/left_back.png" alt="">
            <span>Top up method</span>
            <i class="fa fa-file" aria-hidden="true"></i>
        </div>
    </header>
    <div class="vh_top"></div>
    <section class="section_widhdraw bg-light">
        <div class="container-fluid container_widthdraw w-100 bg-white">
            <div class="row py-3">
                <p class=""><span class="text_secondary"> Withdraw amount:</span> <span
                        class="text-danger ps-4">Handling
                        fee 5.00%</span> </p>
            </div>
            <div class="widthdraw_field">
                <input class="form-control ent_amoutn form-control-lg py-2 " type="text"
                    placeholder="Enter the withdrawal amount " aria-label=".form-control-lg example">
            </div>
            <div class="border-bottom py-3">
                <p class=""><span class="text_primary"> Balance 000.0</span> </p>
            </div>
            <div class="py-3 border-bottom">
                <p><span class="text_primary"> Orders completed today（5）：0</span> </p>
            </div>
            <div class="py-3 border-bottom">
                <p><span class="text_primary"> Number of withdrawals today：1</span> </p>
            </div>
            <div class="py-3 ">
                <p class=""><span class="text_primary"> Transaction password</span> </p>
            </div>
            <div class="pt-3 widthdraw_password px-5 d-flex gap-3 justify-content-center">
                <div class="password w-25">
                    <input class="form-control form-control-lg  " type="text"  aria-label=".form-control-lg example" >
                </div>
                <div class="password w-25">
                    <input class="form-control form-control-lg  " type="text"  aria-label=".form-control-lg example" >
                </div>
                <div class="password w-25">
                    <input class="form-control form-control-lg  " type="text"  aria-label=".form-control-lg example" >
                </div>
                <div class="password w-25">
                    <input class="form-control form-control-lg  " type="text"  aria-label=".form-control-lg example" >
                </div>

            </div>

            <div class="text-center confirm_draw pt-5">
                <a class="text-decoration-none" href="bankCard.php"><button>Confirm</button></a>
            </div>

        </div>
        <div class="container-fluid com_tip_box container_widthdraw shadow border bg-white pt-4 px-2 pb-4  my-4">
            <div class="pb-2">
                <p class="com_tip_style">Friendly Reminders</p>
            </div>
            <div>
                <p> 1. The amount of every single withdrawal is between <span class="text-danger">$50</span>~<span
                        class="text-danger">$1000000</span></p><br>
                <p class="">
                    2.
                     Every member will receive their funds within 24 hours after they make the withdrawal request at
                    the platform. There will be a transaction handling fee for every withdrawal and the minimum amount
                    for every withdrawal is <span class="text-danger">$50</span>.<br><br>
                    3. Every account must complete a minimum of <span class="text-danger">$5</span> orders daily in
                    order to make any withdrawal.<br>
                    4. Withdrawal time: <span class="text-danger">16:00-15:59</span> <br>
                </p>

            </div>
        </div>
        </div>
    </section>
    <div class="vh_top mb-5"></div>