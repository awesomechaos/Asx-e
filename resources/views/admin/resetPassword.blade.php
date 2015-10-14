<!DOCTYPE html>
<html lang="zh-cn" class="no-js">
<head>
    <title>找回密码</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="robots" content="none" />

    {!! Html::style('assets/admin/css/bootstrap.min.css') !!}
    {!! Html::style('assets/admin/css/bootstrap-responsive.min.css') !!}
    {!! Html::style('assets/admin/css/font-awesome.min.css') !!}
    {!! Html::style('assets/admin/css/style-metro.css') !!}
    {!! Html::style('assets/admin/css/style.css') !!}
    {!! Html::style('assets/admin/css/style-responsive.css') !!}
    {!! Html::style('assets/admin/css/themes/default.css', array('id' => 'style_color')) !!}
    {!! Html::style('assets/admin/css/uniform.default.css') !!}
    {{--end global css--}}
    {!! Html::style('assets/admin/css/login.css') !!}

    {!! Html::style('assets/admin/image/favicon.ico', array('rel' => 'shortcut icon')) !!}

</head>
<body class="page-header-fixed">
    <div class="page-content" style="margin-left:0">
        <div class="container-fluid" style="margin:auto;width:400px;">
            <br/>
            <br/>
            <div style="text-align: center;margin:auto;font-size: 30px;width:200px;font-weight:bold;">重置密码</div>
            <br/>
            <br/>
            <div class="row-fluid profile">
                <div style="height: auto;" class="accordion in collapse">
                    <form action="/admin/resetPassword" method="post">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-error" style="margin-bottom: 2px;">
                                    <button class="close" data-dismiss="alert"></button>
                                    <span>{{ $error }}</span>
                                </div>
                                <br/>
                            @endforeach
                        @endif
                        {!! Form::token() !!}
                        <div class="control-group" id="password">
                            <label class="control-label" for="password">New Password</label>
                            <div class="controls">
                                <input type="password" class="m-wrap span12" name="password">
                                <span class="help-block" style="display: none;">Invalid password.</span>
                            </div>
                        </div>
                        <div class="control-group" id="password_confirm">
                            <label class="control-label" for="password_confirm">Re-type New Password</label>
                            <div class="controls">
                                <input type="password" class="m-wrap span12" name="password_confirmation">
                                <span class="help-block" style="display: none;">Password doesn't match.</span>
                            </div>
                        </div>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="submit-btn">
                            <a href="javascript:void(0);" class="btn green">Change Password</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright" >
                {{ date('Y') }} &copy; Asx-e for experimental use.
            </div>
        </div>
    </div>

    {!! Html::script('assets/admin/js/global.js') !!}
    {!! Html::script('http://apps.bdimg.com/libs/jquery/1.10.1/jquery.min.js') !!}
    <script type="text/javascript">
        $(document).ready(function() {
            Glo.resetPasswordCheck();
        });
    </script>

</body>
</html>


