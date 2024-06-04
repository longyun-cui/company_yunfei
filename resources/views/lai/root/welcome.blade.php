<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .main-body-center-section {
                position: relative;
                width: calc(100% - 280px);
                padding: 0;
                margin: auto;
                border-radius: 4px;
            }
            .container-box {
                position: relative;
                width: 100%;
                border-radius: 4px;
                float: left;
            }
            .container-box img {
                width: 100%;
            }
            .margin-bottom-16px { margin-bottom:16px; }

            @media (max-width: 767px) {
                .main-body-section {
                    width: 100%;
                    margin-bottom: 12px;
                    border-radius: 4px;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    LAI
                </div>

                {{--左侧--}}
                <div class="main-body-section main-body-center-section section-wrapper">

                    <div class="container-box pull-left margin-bottom-16px">
                        <img src="{{ url('/resource/custom/lai/2019.jpg') }}">
                        <img src="/resource/custom/lai/2021.jpg">
                        <img src="/resource/custom/lai/2022.jpg">
                        <img src="/resource/custom/lai/2023.jpg">
                        <img src="/resource/custom/lai/2024.jpg">
                        <img src="/resource/custom/lai/2025.jpg">
                        <img src="/resource/custom/lai/2026.jpg">
                        <img src="/resource/custom/lai/2027.jpg">
                        <img src="/resource/custom/lai/2028.jpg">
                        <img src="/resource/custom/lai/2029.jpg">
                        <img src="/resource/custom/lai/2036.jpg">
                        <img src="/resource/custom/lai/2037.jpg">
                    </div>

                    <div class="container-box pull-left margin-bottom-16px">
                        <video width="100%" height="120px" controls="">
                            <source src="{{ url('/resource/custom/lai/1.mp4') }}" type="video/mp4"/>
                        </video>
                    </div>
                    <div class="container-box pull-left margin-bottom-16px">
                        <video width="100%" height="120px" controls="">
                            <source src="/resource/custom/lai/2.mp4" type="video/mp4"/>
                        </video>
                    </div>
                    <div class="container-box pull-left margin-bottom-16px">
                        <video width="100%" height="120px" controls="">
                            <source src="/resource/custom/lai/3.mp4" type="video/mp4"/>
                        </video>
                    </div>
                    <div class="container-box pull-left margin-bottom-16px">
                        <video width="100%" height="120px" controls="">
                            <source src="/resource/custom/lai/4.mp4" type="video/mp4"/>
                        </video>
                    </div>
                    <div class="container-box pull-left margin-bottom-16px">
                        <video width="100%" height="120px" controls="">
                            <source src="/resource/custom/lai/5.mp4" type="video/mp4"/>
                        </video>
                    </div>
                    <div class="container-box pull-left margin-bottom-16px">
                        <video width="100%" height="120px" controls="">
                            <source src="/resource/custom/lai/6.mp4" type="video/mp4"/>
                        </video>
                    </div>


                </div>

{{--                <div class="links">--}}
{{--                    <a href="{{ env('DOMAIN_LY_GPS') }}">GPS</a>--}}
{{--                    <a href="{{ env('DOMAIN_GH_WWW') }}">GH</a>--}}
{{--                    <a href="{{ env('DOMAIN_RZK_WWW') }}">RZK</a>--}}
{{--                    <a href="{{ env('DOMAIN_ZY_ADMIN') }}">zy.admin</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </body>
</html>
