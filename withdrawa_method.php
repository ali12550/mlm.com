<?php include 'header.php' ?>

<!-- header widhdraw -->
<header class="header_bankcard position-fixed w-100  bg-white">
    <div class="px-3 py-3 border  shadow ">

        <img class="chevron-left-bank pt-1" src="img/left_back.png" alt="">
        <div class="text-center">
            <strong style="font-size: 1rem;">Add Withdrawal Method </strong>
        </div>


    </div>
</header>
<div class="vh_top"></div>
<section class="withdrawal_wrap px-3  pt-5">
    <div class="identity_container">
        <div class="text-left fw-semibold fs-5 py-2 mb-1"><span>Identity Information</span></div>
        <div class="identify_noti bg-white px-3 rounded-3 border shadow">
            <div class="input-group py-2  border-bottom">
                <span class="input-group-text px-0 border-0 bg-white lbe_withdrawal " id=""><span
                        class="text-danger fs-5 pe-4">*</span> Real
                    name</span>
                <div class="">
                    <input type="text" class="form-control  border-0" placeholder="Please enter real name">
                </div>
            </div>
            <div class="input-group py-2  border-bottom">
                <span class=" input-group-text px-0 border-0 bg-white lbe_withdrawal " id=""><span
                        class="text-danger fs-5 pe-4">*</span> Email
                </span>
                <div class="">
                    <input type="email" class="form-control border-0" placeholder="Please enter E-mail address">
                </div>
            </div>

            <div class="input-group   border-bottom">
                <span class="input-group-text px-0 border-0 bg-white lbe_withdrawal " id="">
                    <!-- Default dropend button -->
                    <div class="btn-group py-1 dropend border-0">
                        <button type="button"
                            class="btn btn-secondary dropdown-toggle bg-white border-0 ps-4 pe-0 text-dark"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Phone +44
                        </button>
                        <ul class="dropdown-menu">
                            <li> click me</li>
                            <li> click me</li>
                            <li> click me</li>
                            <li> click me</li>
                        </ul>
                    </div>
                </span>
                <div class="">
                    <input type="text" class="form-control  border-0" placeholder="Please enter phone number">
                </div>
            </div>
            <div class="input-group  py-2 border-bottom">
                <span class="input-group-text px-0 border-0 bg-white lbe_withdrawal ps-4 " id="">Address</span>
                <div class="">
                    <input type="text" class="form-control  border-0" placeholder="Please enter home address">
                </div>
            </div>
        </div>
    </div>
    <div class="identity_container py-3">
        <div class="text-left fw-semibold fs-5 py-2 mb-1"><span>Withdrawal method information</span></div>
        <div class="identify_noti bg-white px-3 rounded-3 border shadow">
            <div class="input-group py-2  border-bottom">
                <span class="input-group-text px-0 border-0 bg-white lbe_withdrawal " id=""><span
                        class="text-danger fs-5 pe-4">*</span> Add
                    type</span>
                <div class="">
                    <input type="text" class="form-control  border-0" placeholder="Please choose the type">
                </div>
            </div>
            <div class="input-group py-2  border-bottom">
                <span class=" input-group-text px-0 border-0 bg-white lbe_withdrawal " id=""><span
                        class="text-danger fs-5 pe-4">*</span> Email
                </span>
                <div class="">
                    <input type="email" class="form-control border-0" placeholder="Please enter E-mail address">
                </div>
            </div>

            <div class="input-group py-2  border-bottom">

                <!-- Default dropend button -->
                <select class="form-select px-0 ps-4 w-100 border-0 bg-white  "
                    aria-label="Default select example  border-0">
                    <option selected>Network
                    </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>


            </div>
            <div class="input-group  py-2 border-bottom">
                <span class="input-group-text px-0 border-0 bg-white lbe_withdrawal " id="">
                    <span class="text-danger fs-5 pe-4">*</span> USDT-ERC20</span>
                </span>
                <div class="">
                    <input type="text" class="form-control  border-0" placeholder="Please enter network address">
                </div>
            </div>
        </div>
    </div>
    <div class="identity_container py-3">

        <div class="identify_noti bg-white px-3 py-4 rounded-3 border shadow">
            <div class="text-center fw-semibold fs-5 py-2 mb-1">
                <span>Transaction password</span>
            </div>
            <div class="pt-3 widthdraw_password px-4 d-flex gap-3 justify-content-center">
                <div class="password ">
                    <input class="form-control form-control-lg  " type="text" aria-label=".form-control-lg example"
                        min="1" max="1">
                </div>
                <div class="password ">
                    <input class="form-control form-control-lg  " type="text" aria-label=".form-control-lg example"
                        min="1" max="1">
                </div>
                <div class="password ">
                    <input class="form-control form-control-lg  " type="text" aria-label=".form-control-lg example"
                        min="1" max="1">
                </div>
                <div class="password ">
                    <input class="form-control form-control-lg  " type="text" aria-label=".form-control-lg example"
                        min="1" max="1">
                </div>

            </div>
            
            <div class="text-center confirm_draw pt-5">
                <a class="text-decoration-none" href="bankCard.php"><button>Submit</button></a>
            </div>
        </div>
    </div>
</section>
<div class="vh_top mb-5"></div>