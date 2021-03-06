<?php
require_once './core/user_header.php';
Session::init();
//$db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
$db = new Database();
?>

<!-- header -->


<!-- banner -->
<div class="clearfix"> </div>
<!-- login -->
<div class="farmous_login login_head">
    <h3>Login to Your Account</h3>
    <div class="farmous_login_module">
        <div class="module form-module">
            <div class="toggle toggle_hide"><i class="fa fa-user"></i>

            </div>
            <div class="form">
                <h2>Login to your account</h2>

                <input type="text" id="Username" placeholder="Username">
                <input type="password" id="Password" placeholder="Password">
                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                <div class="g-recaptcha re_captcha_align" data-sitekey="6LfW_EAUAAAAAPo30MtsIpDlK7YnuNjmOXik5XlX"></div>
                <!--remember_me-->
                <div id="remember_container">
<!--                    <input type="checkbox"  id="stremember" data-toggle="toggle">Remember me-->
                    <input type="checkbox" id="stremember">Remember me
                    <!--stop_remember_me--> 
                </div>
                <br>
                <input type="submit" id="login" value="Login" >

            </div>
            <div class="cta"><a id="contact_us_cursor" data-toggle="modal" data-target="#modal_reset_psw">Forgot your password?</a></div>

            <div id="modal_reset_psw" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">


                        <div class="modal-body">
                            <div class="col-md-12" id="modal_phone_bl">
                                <div class="clsmodal col-md-8">
                                    <input type="text" id="modal_get_phone" class="form-module" maxlength="10" placeholder="Enter Mobile Number">
                                </div>
                                <div class="clsmodal col-md-4">
                                    <button type="button"  id="contact_get_otp" class="btn btn-default">Get OTP</button>
                                </div>
                                <div class="clsmodal col-md-12">
                                    <p id="notif_phone"></p>
                                    <p id="notif_phone_error"></p>
                                </div>

                            </div>

                            <div class="col-md-12" id="modal_otp_bl">
                                <div class="clsmodal col-md-8">
                                    <input type="text" id="modal_get_otp" class="form-module" maxlength="6" placeholder="Enter OTP">
                                </div>
                                <div class="clsmodal col-md-4">
                                    <button type="button"  id="submit_otp" class="btn btn-default">Verify</button>
                                </div>
                                <div class="clsmodal col-md-12">
                                    <p id="notif_otp"></p>
                                    <p id="notif_otp_error"></p>
                                </div>

                            </div>

                            <div class="col-md-12" id="modal_pass_bl">
                                <div class="clsmodal col-md-8">
                                    <input type="password" id="modal_txt_pass" class="form-module" placeholder="Enter Password" onchange="otp_pass()">
                                </div>


                            </div>
                            <div class="clsmodal col-md-12">
                                <p id="pass_change_notif"></p>

                            </div>

                            <button type="button"  id="submit_frgt_psw" class="btn btn-default" data-dismiss="modal">SAVE</button>
                            <button type="button" id="modal_cancel" class="btn btn-default" data-dismiss="modal">CANCEL</button>


                        </div>









                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal_pass_status" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><p id="con_status_tick">&#10004;</p></h4>
                        </div>
                        <div class="modal-body">
                            <p>Your Password has been changed</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- //login -->

<div class="clearfix"></div>


<?php
require_once './core/user_footer.php';
?>