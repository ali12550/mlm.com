
    <?php include "header.php" ?>
    <header class="header_deposit_usd position-fixed w-100 bg-white">
        <div class="px-3 py-3 border shadow ">

            <img class="chevron-left " src="img/left_back.png" alt="">
            <div class="text-center">
                <span>Vip Events</span>
            </div>

        </div>
    </header>
    <div class="vh_top "></div>
    <section class="vip_events  pt-5">

        <div class="record_tab mx-3">
            <!-- Tab links -->
            <div class="tab_account bg-white d-flex justify-content-between align-items-center ">
                <button class="tablinks_account " onclick="openCity(event, 'all_account')" id="defaultOpen">All</button>
                <button class="tablinks_account" onclick="openCity(event, 'withdraw_account')"> In progress</button>
                <button class="tablinks_account" onclick="openCity(event, 'deposit_account')"> No started</button>
                <button class="tablinks_account" onclick="openCity(event, 't_commision')"> Ended</button>
            </div>

            <!-- Tab content -->
            <div class="bg-white mt-3 rounded-2">
                <div id="all_account" class="tabcontent_account">
               amount
                </div>

                <div id="withdraw_account" class="tabcontent_account">
                   
                </div>

                <div id="deposit_account" class="tabcontent_account">
                  
                </div>
                <div id="t_commision" class="tabcontent_account">
                
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
