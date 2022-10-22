<?php include "header.php" ?>


    <!-- login page start -->
    <section class="section_login">
        <div class="container_logn ">
            <div class="login-wrap">
                <div class="lang_wrap">
                    <img src="img/langrwp.png" alt="">
                </div>
                <!--login content-->
                <div class="login_content  m-auto ">
                    <div class="container">


                        <div class="row ">
                            <div class="wrapper_login shadow border">

                                <div class="logo text-center">
                                    <img src="img/logo_mlm_dark.png" alt="">
                                </div>

                                <form class="p-2 mt-4">
                                    <div class="form-field d-flex align-items-center ">
                                        <span class="far fa-user"></span>
                                        <input type="text" name="userName" id="userName"
                                            placeholder="Please enter username">
                                    </div>
                                    <div class="form-field d-flex align-items-center mt-5 mb-1">
                                        <span class="fas fa-key"></span>
                                        <input type="password" name="password" id="pwd"
                                            placeholder="Please enter login password">
                                    </div>
                                    <div class="form-check rem_password  mt-3 mb-4 pb-2">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2">
                                        <label class="form-check-label px-2" for="exampleRadios2">
                                            remember username/password
                                        </label>
                                    </div>
                                    <button class="btn mt-4">Log In</button>
                                </form>
                                <div class="text-center py-2 my-1">
                                    <a href="#">Forget password?</a>
                                </div>
                            </div>
                            <div class="text-center bg-white   box-reg border shadow py-4  
                            ">
                                <a class="text-decoration-none text-dark" href="#">No account? <span
                                        class="text-reg">Register</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login page end -->
