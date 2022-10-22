<?php include "header.php" ?>
<!-- header widhdraw -->
<header class="header_pas_chnge  position-fixed w-100  bg-white">
    <div class="px-3 py-3 border  shadow ">

        <img class="chevron-left-bank pt-1" src="img/left_back.png" alt="">
        <div class="text-center">
            <strong style="font-size: 1rem;">Change transaction password </strong>
        </div>
    </div>
</header>
<div class="vh_top"></div>
<section class="section_trans_pswd py-4">
    <div class="container">
        <div class="transaction_pswd">
            <div class=" text-center pb-3">
                <p class=""><span class="text_primary"> Current transaction password</span> </p>
            </div>

            <!-- code pin 1 -->
            <div class="phoneInput">
                <div class="field-wrapper">
                    <div class="form-group phone d-flex justify-content-center gap-2">

                        <input type="password" autocomplete="off" class="letter" maxlength="1">

                        <input type="password" autocomplete="off" class="letter" maxlength="1">

                        <input type="password" autocomplete="off" class="letter" maxlength="1">

                        <input type="password" autocomplete="off" class="letter" maxlength="1">

                    </div>
                </div>
            </div>
            <!-- code pin 2 -->
            <div class=" text-center pt-4 pb-3">
                <p class=""><span class="text_primary"> new transaction password</span> </p>
            </div>
            <div class="phoneInput">
                <div class="field-wrapper">
                    <div class="form-group phone d-flex justify-content-center gap-2">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">

                    </div>
                </div>
            </div>

            <!-- code pin 3 -->
            <div class=" text-center pt-4 pb-3">
                <p class=""><span class="text_primary"> Retype new transaction password</span> </p>
            </div>

            <div class="phoneInput">
                <div class="field-wrapper">
                    <div class="form-group phone d-flex justify-content-center gap-2">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">
                        <input type="password" autocomplete="off" class="letter" maxlength="1">

                    </div>
                </div>
            </div>

        </div>
        <div class="mt-4">
            <p>
                Tips: If you forget your password, please contact customer service
            </p>
        </div>
        <div class="text-center confirm_password pt-4">
            <a class="text-decoration-none" href="bankCard.php"><button>Submit</button></a>
        </div>
    </div>
</section>
<form>

</form>
<div class="vh_top mb-5"></div>




<!-- code pin 3 -->
<script>
$(function() {
    $('.phoneInput').letteringInput({
        inputClass: 'letter',
        onLetterKeyup: function($item, event) {
            
        },
        onSet: function($el, event, value) {
          
        }
    });
});
</script>
