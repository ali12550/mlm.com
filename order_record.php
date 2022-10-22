<?php include "header.php" ?>
<div class="vh_top "></div>
<section class="section_order">
    <div class="container-fluid px-0 ">
        <div class="order_top position-relative text-center ">
            <h1 class="text-white py-4">Order record</h1>

            <div class="available_assests shadow border rounded-2 py-3 mx-3 bg-white">
                <div class="order_inner pb-4">


                    <p class="  fs-5">Remaining available assets</p>
                    <p class="pt-1 fs-1">
                        <span>00000</span>
                        <span><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </p>
                </div>
                <div class="commission_table fs-5 px-3">
                    <p>Accumulated Order Commission <span class="order_comision ps-3 fw-semibold">0.00</span> </p>

                    <p>Accumulated Team Commission <span class="team_comision ps-3 fw-semibold">0.00</span> </p>
                </div>


            </div>
        </div>


    </div>
    <div class="record_tab pt-5  ">
        <!-- Tab links -->
        <div class="tab_orders  d-flex justify-content-between align-items-center">
            <button class="tablinks_order" onclick="openCity(event, 'all_order')" id="defaultOpen">All</button>
            <button class="tablinks_order" onclick="openCity(event, 'pending_order')">Pending</button>
            <button class="tablinks_order" onclick="openCity(event, 'completed_order')">Completed</button>
            <button class="tablinks_order" onclick="openCity(event, 'cencel_order')">Cancelled</button>
        </div>

        <!-- Tab content -->
        <div id="all_order" class="tabcontent_order">
            <div class="all_order_box pt-3">
                <div class="d-flex align-items-center  gap-3 bg-white rounded-2 border shadow  mb-2 p-2">
                    <img src="img/company_profile.png" class="" alt="...">
                    <div>
                        <p class="fw-semibold product_name m-0">Product name</p>
                        <p class="product_id m-0">Product Id</p>

                    </div>
                </div>
              
                <div class="d-flex align-items-center  gap-3 bg-white rounded-2 border shadow  mb-2 p-2">
                    <img src="img/pr_bg_in.png" class="" alt="...">
                    <div>
                        <p class="fw-semibold product_name m-0">Product name</p>
                        <p class="product_id m-0">Product Id</p>

                    </div>
                </div>
              


            </div>
        </div>

        <div id="pending_order" class="tabcontent_order">
            <h3>pending_order</h3>
            <p>pending_order is the capital of France.</p>
        </div>

        <div id="completed_order" class="tabcontent_order">
            <h3>completed_order</h3>
            <p>completed_order is the capital of Japan.</p>
        </div>
        <div id="cencel_order" class="tabcontent_order">
            <h3>cencel_order</h3>
            <p>completed_order is the capital of Japan.</p>
        </div>
    </div>
</section>
<div class="vh_top mb-5"></div>

<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent_order, tablinks_order;

    // Get all elements with class="tabcontent_order" and hide them
    tabcontent_order = document.getElementsByClassName("tabcontent_order");
    for (i = 0; i < tabcontent_order.length; i++) {
        tabcontent_order[i].style.display = "none";
    }

    // Get all elements with class="tablinks_order" and remove the class "active"
    tablinks_order = document.getElementsByClassName("tablinks_order");
    for (i = 0; i < tablinks_order.length; i++) {
        tablinks_order[i].className = tablinks_order[i].className.replace(" active", "");
    }



    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    // Get the element with id="defaultOpen" and click on it
}
document.getElementById("defaultOpen").click();
</script>