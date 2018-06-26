<!DOCTYPE HTML>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@yield('head_title')</title>

        <meta name="author" content="@yield('meta_author')" />
        <meta name="description" content="@yield('meta_description')" />
        <meta name="keywords" content="@yield('meta_keywords')" />

        <!-- Styles -->
        {{--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,600" rel="stylesheet">--}}


        <!-- favicon and touch icons -->
        <link rel="shortcut icon" href="assets/images/favicon.png.html" >

        <!-- Bootstrap -->
        <link href="{{ asset('/templates/moban2030/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/plugins/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/plugins/slick-nav/slicknav.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/plugins/wow/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/assets/css/theme.css') }}" rel="stylesheet">
        <link href="https://cdn.bootcss.com/layer/3.0.3/skin/default/layer.min.css" rel="stylesheet">
        {{--<link href="https://cdn.bootcss.com/bootstrap-modal/2.2.6/css/bootstrap-modal.min.css" rel="stylesheet">--}}

{{--        <link href="{{ asset('/templates/moban2030/assets/others/common.css') }}" rel="stylesheet">--}}
        <link href="{{ asset('/common/css/common.css') }}" rel="stylesheet">


        @yield('custom-css')
        @yield('custom-style')

    </head>
    <body class="">

        <div id="page-loader">
            <div class="loaders">
                <img src="{{ url('/templates/moban2030/assets/images/loader/3.gif') }}" alt="First Loader">
                <img src="{{ url('/templates/moban2030/assets/images/loader/4.gif') }}" alt="First Loader">
            </div>
        </div>


        {{--header--}}
        @yield('component-header')


        {{--content--}}
        @yield('custom-content')


        {{--footer--}}
        @yield('component-footer')


        {{--bottom--}}
        @include('frontend.component.bottom')


        <a href="{{ url('/') }}#top" id="scroll-top"><i class="fa fa-angle-up"></i></a>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('/templates/moban2030/assets/js/jquery.min.js') }}"></script>
        {{--<script src="{{ asset('/templates/moban2030/assets/js/jquery.migrate.js') }}"></script>--}}
        <script src="{{ asset('/templates/moban2030/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/slick-nav/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        {{--<script src="{{ asset('/templates/moban2030/plugins/tweetie/tweetie.js') }}"></script>--}}
        <script src="{{ asset('/templates/moban2030/plugins/forms/jquery.form.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/forms/jquery.validate.min.js') }}"></script>
{{--        <script src="{{ asset('/templates/moban2030/plugins/modernizr/modernizr.custom.js') }}"></script>--}}
        <script src="{{ asset('/templates/moban2030/plugins/wow/wow.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/zoom/zoom.js') }}"></script>
{{--        <script src="{{ asset('/templates/moban2030/plugins/mixitup/mixitup.min.js') }}"></script>--}}
        <!---<script src="http://ditu.google.cn/maps/api/js?key=AIzaSyD2MtZynhsvwI2B40juK6SifR_OSyj4aBA&libraries=places"></script>--->
{{--        <script src="{{ asset('/templates/moban2030/plugins/whats-nearby/source/WhatsNearby.js') }}"></script>--}}
        <script src="{{ asset('/templates/moban2030/assets/js/theme.js') }}"></script>
        <script src="https://cdn.bootcss.com/layer/3.0.3/layer.min.js"></script>
        {{--<script src="https://cdn.bootcss.com/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js"></script>--}}


        <script>
            $(function() {

                // 添加or编辑
                $("#btnSubmit").on('click', function() {

                    var form = $("#form-book-appointment");
                    var name = $("#book-name");
                    var name_val = name.val();
                    var mobile = $("#book-mobile");
                    var mobile_val = mobile.val();

                    console.log(form);
                    console.log(name);
                    console.log(name_val);
                    console.log(mobile);
                    console.log(mobile_val);


                    if($("#book-name").val() == "")
                    {
                        layer.msg("名字不能为空");
                        name.focus();
                        return false;
                    }

                    var filter=/^1[3|4|5|7|8][0-9]\d{4,8}$/;
                    if(!filter.test(mobile.val()))
                    {
                        layer.msg("请输入正确的手机号!");
                        mobile.focus();
                        mobile.value="";
                        return false;
                    }

                    var options = {
                        url: "{{url('/book/appointment')}}",
                        type: "post",
                        dataType: "json",
                        // target: "#div2",
                        success: function (data) {
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.msg(data.msg);
                                name.val('');
                                mobile.val('');
                                {{--location.href = "{{url('/admin/item/list')}}";--}}
                                    return true;
                            }
                        }
                    };
                    $("#form-book-appointment").ajaxSubmit(options);
                });


                // 添加or编辑
                $("#grab-submit").on('click', function() {

                    var form = $("#form-grab-ticket");
                    var mobile = $("#grab-mobile");
                    var mobile_val = mobile.val();

                    console.log(mobile);
                    console.log(mobile_val);

                    var filter=/^1[3|4|5|7|8][0-9]\d{4,8}$/;
                    if(!filter.test(mobile_val))
                    {
                        layer.msg("请输入正确的手机号!");
                        mobile.focus();
                        mobile.val('');
                        return false;
                    }

                    var options = {
                        url: "{{url('/grab/ticket')}}",
                        type: "post",
                        dataType: "json",
                        // target: "#div2",
                        success: function (data) {
                            if(!data.success) layer.msg(data.msg);
                            else
                            {
                                layer.msg(data.msg);
                                mobile.val('');
                                {{--location.href = "{{url('/admin/item/list')}}";--}}
                                $('#grab-modal').modal('hide');
                                $('.modal-backdrop').hide();
                                return true;
                            }
                        }
                    };
                    form.ajaxSubmit(options);
                });



                $("#grab-modal").on('click', '.icon-close', function () {
                    $('#grab-modal').hide();
                    $('#grab-modal').modal('hide');
                    $('.modal-backdrop').hide();
                });

            });
        </script>


        @yield('custom-js')
        @yield('custom-script')



    </body>
</html>
