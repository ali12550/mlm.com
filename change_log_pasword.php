<?php include 'header.php' ?>
    <!-- header widhdraw -->
    <header class="header_pas_chnge  position-fixed w-100  bg-white">
        <div class="px-3 py-3 border  shadow ">

            <img class="chevron-left-bank pt-1" src="img/left_back.png" alt="">
            <div class="text-center">
                <strong style="font-size: 1rem;">Change login password </strong>
            </div>
        </div>
    </header>
    <div class="vh_top"></div>
    <section class="section_chng_pswd py-4">
        <div class="container">
            <div class="identify_noti bg-white px-3 rounded-3 border shadow">
                <div class="input-group py-2  border-bottom">
                    <div class="  px-0 border-0 bg-white chang_pass w-25 " id="">
                        Current login password</div>
                    
                        <input type="password" class="form-control w-75  border-0"
                            placeholder="Please enter original login password">
                    
                </div>
                <div class="input-group py-2  border-bottom">
                    <div class="  px-0 border-0 bg-white chang_pass w-25 " id="">
                        New login password
                    </div>
                    
                        <input type="password" class="form-control w-75 border-0"
                            placeholder="Please enter new login password">
                    
                </div>
                <div class="input-group py-2  border-bottom">
                    <div class="  px-0 border-0 bg-white chang_pass w-25 " id="">
                        Retype new login password
                    </div>
                    
                        <input type="password" class="form-control w-75 border-0"
                            placeholder="Please confirm new login password">
                    
                </div>


            </div>
            <div class="mt-4 px-3">
                <p class="text-left">
                    Tips: If you forget your password, please contact customer service
                </p>
            </div>
            <div class="text-center confirm_password pt-5">
                <a class="text-decoration-none" href="bankCard.php"><button>Submit</button></a>
            </div>
        </div>
    </section>

    <div class="vh_top mb-5"></div>
