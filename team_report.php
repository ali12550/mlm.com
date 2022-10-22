<?php include "header.php" ?>
<header class="header_deposit_usd position-fixed w-100 bg-white">
    <div class="px-3 py-3 border shadow ">

        <img class="chevron-left " src="img/left_back.png" alt="">
        <div class="text-center">
            <span>Team reports</span>
        </div>

    </div>
</header>
<div class="vh_top "></div>
<section class="section_account_detail   pt-5">
    <div class="container-fluid">
        <div class="input-group mb-3 ">
            <!-- <input type="date" name="" id=""> -->
            <!-- <div class="input-group-append"><button type="button" class="btn btn-outline-secondary" data-toggle="datepicker"><i class="far fa-calendar-alt"></i></button></div> -->
            <!-- <input type="text" id="start_date" class="form-control" aria-label="Dollar amount (with dot and two decimal places)"> -->

            <input id="datepicker" type="text" class="form-control rounded-pill" data-zdp_readonly_element="false">
            <button class="border-0  search_account  rounded-5 " type="button" id="button-addon2">Search</button>
        </div>
    </div>

    <div class="t_balance_container container-fluid bg-white py-3">
        <div class="row justify-content-center align-items-center text-center gap-3">
            <div class=" text-center rounded-2 px-0 py-3  t_box">
                <div class="">
                    <p class="fw-bold report_primary">Team balance</p>
                    <p class="fw-semibold report_secondary">
                        00.0
                    </p>
                </div>
            </div>
            <div class=" text-center rounded-2 px-0 py-3  t_box">
                <div class="">
                    <p class="fw-bold report_primary">Team cash flow</p>
                    <p class="fw-semibold report_secondary">
                        00.0
                    </p>
                </div>
            </div>
            <div class=" text-center rounded-2 px-0 py-3  t_box">
                <div class="">
                    <p class="fw-bold report_primary">Team deposit</p>
                    <p class="fw-semibold report_secondary">
                        00.0
                    </p>
                </div>
            </div>
            <div class=" text-center rounded-2 px-0 py-3  t_box">
                <div class="">
                    <p class="fw-bold report_primary">Team withdrawal</p>
                    <p class="fw-semibold report_secondary">
                        00.0
                    </p>
                </div>
            </div>
            <div class=" text-center rounded-2 px-0 py-3  t_box">
                <div class="">
                    <p class="fw-bold report_primary">Team order commission</p>
                    <p class="fw-semibold report_secondary">
                        00.0
                    </p>
                </div>
            </div>
            <div class=" text-center rounded-2 px-0 py-3  t_box">
                <div class="">
                    <p class="fw-bold report_primary">First time depositor</p>
                    <p class="fw-semibold report_secondary">
                        00.0
                    </p>
                </div>
            </div>


        </div>
    </div>

</section>

<div class="vh_top mb-5"></div>
<!-- date picker -->
<script>
$('#datepicker').Zebra_DatePicker({
    direction: 1
});
</script>