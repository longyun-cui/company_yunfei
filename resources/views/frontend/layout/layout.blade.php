<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPoppins:400,600" rel="stylesheet">


        <!-- favicon and touch icons -->
        <link rel="shortcut icon" href="assets/images/favicon.png.html" >

        <!-- Bootstrap -->
        <link href="{{ asset('/templates/moban2030/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/plugins/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/plugins/slick-nav/slicknav.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/plugins/wow/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2030/assets/css/theme.css') }}" rel="stylesheet">

        <link href="{{ asset('/common/css/common.css') }}" rel="stylesheet">

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
        <script src="{{ asset('/templates/moban2030/assets/js/jquery.migrate.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/slick-nav/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/tweetie/tweetie.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/forms/jquery.form.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/forms/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/modernizr/modernizr.custom.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/wow/wow.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/zoom/zoom.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/plugins/mixitup/mixitup.min.js') }}"></script>
        <!---<script src="http://ditu.google.cn/maps/api/js?key=AIzaSyD2MtZynhsvwI2B40juK6SifR_OSyj4aBA&libraries=places"></script>--->
        <script src="{{ asset('/templates/moban2030/plugins/whats-nearby/source/WhatsNearby.js') }}"></script>
        <script src="{{ asset('/templates/moban2030/assets/js/theme.js') }}"></script>


    </body>
</html>
