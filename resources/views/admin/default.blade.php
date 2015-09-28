<!DOCTYPE html>
<html lang="zh-cn" class="no-js">
<head>
    <title>{{ $head['title'] }}</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    @if ($head['isAdmin'])
        <meta name="robots" content="none" />
    @else
        <meta name="robots" content="all" />
        <meta content="{{ $head['description'] }}" name="description" />
        <meta content="{{ $head['author'] }}" name="author" />
        <meta content="{{ $head['keywords'] }}" name="keywords" />
    @endforelse

    @section('style')
        {!! Html::style('assets/admin/css/bootstrap.min.css') !!}
        {!! Html::style('assets/admin/css/bootstrap-responsive.min.css') !!}
        {!! Html::style('assets/admin/css/font-awesome.min.css') !!}
        {!! Html::style('assets/admin/css/style-metro.css') !!}
        {!! Html::style('assets/admin/css/style.css') !!}
        {!! Html::style('assets/admin/css/style-responsive.css') !!}
        {!! Html::style('assets/admin/css/themes/'.$head['style_color'].'.css', array('id' => 'style_color')) !!}
        {!! Html::style('assets/admin/css/uniform.default.css') !!}
        {!! Html::style('assets/admin/css/jquery.gritter.css') !!}
    @show

    {!! Html::style('assets/admin/image/favicon.ico', array('rel' => 'shortcut icon')) !!}

</head>
<body class="page-header-fixed page-footer-fixed">
    @include('admin.header')
    <div class="page-container">
        @include('admin.sidebar')
        <div class="page-content">
            <!-- BEGIN PAGE CONTAINER-->
            <div class="container-fluid">
                @include('admin.nav')
                @yield('container')
            </div>
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            {{--点击配置弹出框--}}
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body">
                    Widget settings form goes here
                </div>
            </div>
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    @section('foot')
        <div class="footer">
            <div class="footer-inner" style="font-family:Tahoma;">
                    {{ date('Y') }} &copy; Asx-e for experimental use.
            </div>
            <div class="footer-tools">
                <span class="go-top">
                    <i class="icon-angle-up"></i>
                </span>
            </div>
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
        {{--gritter.js为通知弹框--}}
        {!! Html::script('assets/admin/js/jquery.gritter.js') !!}
        <script type="text/javascript">
            Glo.initIntro();
        </script>
    @show

</body>
</html>