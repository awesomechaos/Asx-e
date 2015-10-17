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
            @if (isset($validated))
                <div class="alert alert-success" style="margin-bottom: 2px;">
                    <button class="close" data-dismiss="alert"></button>
                    <span>账号已验证, 请登录</span>
                </div>
            @endif
            @if (isset($resetPassword))
                <div class="alert alert-success" style="margin-bottom: 2px;">
                    <button class="close" data-dismiss="alert"></button>
                    <span>密码已重置, 请登录</span>
                </div>
            @endif
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-error" style="margin-bottom: 2px;">
                        <button class="close" data-dismiss="alert"></button>
                        <span>{{ $error }}</span>
                    </div>
                @endforeach
            @endif
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
                        {!! Form::input('password', 'password', '', ['placeholder' => 'Password', 'class' => 'm-wrap placeholder-no-fix']) !!}
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
        <form class="form-vertical forget-form" action="" method="post">
            {!! csrf_field() !!}
            <h3 class="">Forget Password ?</h3>
            <p>Enter your e-mail address below to reset your password.</p>
            <div class="alert alert-error hide" style="margin-bottom: 2px;" id="forget-error">
                <button class="close" data-dismiss="alert"></button>
                <span></span>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-envelope"></i>
                        {!! Form::input('text', 'email', '', ['placeholder' => 'Email', 'class' => 'm-wrap placeholder-no-fix']) !!}
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
        <form class="form-vertical register-form" action="" method="post">
            {!! csrf_field() !!}
            {!! Form::input('hidden', 'isChecked') !!}
            <h3 class="">Sign Up</h3>
            <p>Enter your account details below:</p>
            <div class="alert alert-error hide" style="margin-bottom: 2px;" id="register-error">
                <button class="close" data-dismiss="alert"></button>
                <span></span>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-user"></i>
                        {!! Form::input('text', 'username', '', ['placeholder' => 'Username Using Email', 'class' => 'm-wrap placeholder-no-fix']) !!}
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-lock"></i>
                        {!! Form::input('password', 'password', '', ['placeholder' => 'Password', 'id' => 'register_password', 'class' => 'm-wrap placeholder-no-fix']) !!}
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-ok"></i>
                        {!! Form::input('password', 'password_confirmation', '', ['placeholder' => 'Re-type Your Password', 'class' => 'm-wrap placeholder-no-fix']) !!}
                    </div>
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