<?php include "header.php" ?>
    <header class="header_deposit_usd position-fixed w-100 bg-white">
        <div class="px-3 py-3 border shadow ">

            <img class="chevron-left " src="img/left_back.png" alt="">
            <div class="text-center">
                <span>Account details</span>
            </div>

        </div>
    </header>
    <div class="vh_top "></div>
    <section class="section_account_detail  pt-5">
        <div class="container-fluid">
            <div class="input-group mb-3 ">
                <input type="date" name="" id="">
                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                <button class="search_account border-0 rounded-5 " type="button"
                    id="button-addon2">Search</button>
            </div>
        </div>
       
        <div class="record_tab mx-3">
            <!-- Tab links -->
            <div class="tab_account bg-white d-flex justify-content-between align-items-center ">
                <button class="tablinks_account " onclick="openCity(event, 'all_account')" id="defaultOpen">All</button>
                <button class="tablinks_account" onclick="openCity(event, 'withdraw_account')"> Withdraw</button>
                <button class="tablinks_account" onclick="openCity(event, 'deposit_account')"> Deposit</button>
                <button class="tablinks_account" onclick="openCity(event, 't_commision')"> Team commission</button>
            </div>

            <!-- Tab content -->
            <div class="bg-white mt-3 rounded-2">
                <div id="all_account" class="tabcontent_account">
                <div class="deposit_status pt-3">
            <div class="d-flex align-items-center justify-content-between  bg-white rounded-2 border shadow  mb-2 p-2">
                <div>
                    <p class="fw-semibold product_price m-0">$100</p>
                    <p class="peposit_date m-0">Start date</p>
                </div>
                <button type="button" class="">status</button>
            </div>



        </div>
                </div>

                <div id="withdraw_account" class="tabcontent_account">
                    <h3>withdraw_account</h3>
                    <p>withdraw_account is the capital of France.</p>
                </div>

                <div id="deposit_account" class="tabcontent_account">
                    <h3>deposit_account</h3>
                    <p>deposit_account is the capital of Japan.</p>
                </div>
                <div id="t_commision" class="tabcontent_account">
                    <h3>t_commision</h3>
                    <p>deposit_account is the capital of Japan.</p>
                </div>
            </div>
        </div>

    </section>

    <div class="vh_top mb-5"></div>

    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent_account, tablinks_account;

            // Get all elements with class="tabcontent_account" and hide them
            tabcontent_account = document.getElementsByClassName("tabcontent_account");
            for (i = 0; i < tabcontent_account.length; i++) {
                tabcontent_account[i].style.display = "none";
            }

            // Get all elements with class="tablinks_account" and remove the class "active"
            tablinks_account = document.getElementsByClassName("tablinks_account");
            for (i = 0; i < tablinks_account.length; i++) {
                tablinks_account[i].className = tablinks_account[i].className.replace(" active", "");
            }



            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            // Get the element with id="defaultOpen" and click on it
        }
        document.getElementById("defaultOpen").click();
    </script>
