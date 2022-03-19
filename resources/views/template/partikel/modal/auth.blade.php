<div id="modal" class="popupContainer"
    style="display: none; width:80%;  opacity: 1; z-index: 11000; left: 50%; margin-left: -165px; top: 100px;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                {{-- <a href="#" class="social_box fb">
                    {{-- <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a> --}}

                {{-- <a href="#" class="social_box google">
                    {{-- <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span> 
                </a> --}}
            </div>

            {{-- <div class="centeredText">
                <span>Or use your Email address</span>
            </div> --}}

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label>Username</label>
                        <input type="text" name="username">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>
                </div>


                <div class="row">
                    <div class="action_btns">
                        <div class="col-md-6">
                            <div class="one_half">
                                <a href="#" class="btn back_btn">
                                    <i class="fa fa-angle-double-left"></i> Back
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="one_half last">
                                <button type="submit" class="btn btn_red btn block">Login</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            {{-- <a href="#" class="forgot_password">Forgot password?</a> --}}
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <label>NIK</label>
                        <input type="text">
                    </div>
                    <div class="col-md-6">
                        <label>Nama</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Nomor Telpon</label>
                        <input type="number" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Password</label>
                        <input type="password" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control">
                    </div>
                </div>



                {{-- <div class="checkbox">
                    <input id="send_updates" type="checkbox">
                    <label for="send_updates">Send me occasional email updates</label>
                </div> --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="action_btns">
                            <div class="one_half"><a href="#" class="btn back_btn"><i
                                        class="fa fa-angle-double-left"></i> Back</a></div>
                            <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
