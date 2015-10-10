<!DOCTYPE html>
<html lang="zh-cn" class="no-js">
<head>
    <title>{{ $head['title'] }}</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="robots" content="none" />

    {!! Html::style('assets/admin/css/bootstrap.min.css') !!}
    {!! Html::style('assets/admin/css/bootstrap-responsive.min.css') !!}
    {!! Html::style('assets/admin/css/font-awesome.min.css') !!}
    {!! Html::style('assets/admin/css/style-metro.css') !!}
    {!! Html::style('assets/admin/css/style.css') !!}
    {!! Html::style('assets/admin/css/style-responsive.css') !!}
    {!! Html::style('assets/admin/css/themes/'.$head['style_color'].'.css', array('id' => 'style_color')) !!}
    {!! Html::style('assets/admin/css/uniform.default.css') !!}
    {{--end global css--}}
    {!! Html::style('assets/admin/css/login.css') !!}

    {!! Html::style('assets/admin/image/favicon.ico', array('rel' => 'shortcut icon')) !!}

</head>
<body class="login">
    <!-- BEGIN LOGO -->
    <div class="logo"></div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="form-vertical login-form" action="" method="post">
            {!! Form::token() !!}
            <h3 class="form-title">Login Before Enjoy</h3>
            <div class="alert alert-error hide">
                <button class="close" data-dismiss="alert"></button>
                <span>Enter any username and password.</span>
            </div>
            <div class="control-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        {!! Form::input('text', 'username', '', ['placeholder' => 'Username', 'class' => 'm-wrap placeholder-no-fix']) !!}
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        {!! Form::input('text', 'password', '', ['placeholder' => 'Password', 'class' => 'm-wrap placeholder-no-fix']) !!}
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    {!! Form::input('checkbox', 'remember', '1') !!} Remember me
                </label>
                <button type="submit" class="btn green pull-right">
                    Login <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
            <div class="forget-password">
                <p>
                    <a href="javascript:void(0);" id="forget-password">Forgot password ?</a>
                    or
                    <a href="javascript:void(0);" id="register-btn">Just Register Now !</a>
                </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="form-vertical forget-form" action="">
            {!! csrf_field() !!}
            <h3 class="">Forget Password ?</h3>
            <p>Enter your e-mail address below to reset your password.</p>
            <div class="control-group">
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-envelope"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn">
                    <i class="m-icon-swapleft"></i> Back
                </button>
                <button type="submit" class="btn green pull-right">
                    Submit <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
        <form class="form-vertical register-form" action="">
            {!! csrf_field() !!}
            <h3 class="">Sign Up</h3>
            <p>Enter your account details below:</p>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        <input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-ok"></i>
                        <input class="m-wrap placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="rpassword"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-envelope"></i>
                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                    <div id="register_tnc_error"></div>
                </div>
            </div>
            <div class="form-actions">
                <button id="register-back-btn" type="button" class="btn">
                    <i class="m-icon-swapleft"></i>  Back
                </button>
                <button type="submit" id="register-submit-btn" class="btn green pull-right">
                    Sign Up <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
        </form>
        <!-- END REGISTRATION FORM -->
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT -->
    <div class="copyright">
        {{ date('Y') }} &copy; Asx-e for experimental use.
    </div>

    {!! Html::script('assets/admin/js/global.js') !!}
    {!! Html::script('http://apps.bdimg.com/libs/jquery/1.10.1/jquery.min.js') !!}
    {!! Html::script('assets/admin/js/jquery-ui-1.10.1.custom.min.js') !!}
    {!! Html::script('http://apps.bdimg.com/libs/bootstrap/2.3.1/js/bootstrap.min.js') !!}
    {!! Html::script('assets/admin/js/jquery-migrate-1.2.1.min.js') !!}
    {!! Html::script('assets/admin/js/jquery.slimscroll.min.js') !!}
    {!! Html::script('assets/admin/js/jquery.blockui.min.js') !!}
    {!! Html::script('assets/admin/js/jquery.cookie.min.js') !!}
    {!! Html::script('assets/admin/js/jquery.uniform.min.js') !!}
    {!! Html::script('assets/admin/js/jquery.validate.min.js') !!}
    {!! Html::script('assets/admin/js/app.js') !!}
    {!! Html::script('assets/admin/js/login.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            App.init();
            Login.init();
        });
    </script>

</body>
</html>