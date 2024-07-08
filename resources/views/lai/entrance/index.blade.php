@extends('lai.layout.layout')

@section('head_title','大郎的前半生')

@section('header','Admin')
@section('description','管理员系统 - 云飞钢琴')
@section('breadcrumb')
    <li><a href="{{ url('/super/admin') }}"><i class="fa fa-dashboard"></i>首页</a></li>
    <li><a href="#"><i class="fa "></i>Here</a></li>
@endsection

@section('content')

    {{--banner--}}
    <div class="main-body-section main-body-center-section section-wrappe pull-left">
        <div class="container-box pull-left margin-bottom-32px-">
            <img src="{{ url('/resource/custom/lai/chiyao.jpeg') }}">
        </div>
    </div>




    {{--手机2--}}
    <div class="main-body-section main-body-center-section section-wrapper pull-left">

        <div class="container-box pull-left margin-bottom-8px-" style="text-align:center;background:#edf;">
            <h2>手机2</h2>
        </div>

        <div class="container-box pull-left margin-bottom-16px">

            <img src="/resource/custom/lai/2036.jpg">

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
                    <source src="/resource/custom/lai/6.mp4" type="video/mp4"/>
                </video>
            </div>
            <div class="container-box pull-left margin-bottom-16px">
                <video width="100%" height="120px" controls="">
                    <source src="/resource/custom/lai/5.mp4" type="video/mp4"/>
                </video>
            </div>
        </div>

    </div>

    {{--手机1--}}
    <div class="main-body-section main-body-center-section section-wrapper pull-left">

        <div class="container-box pull-left margin-bottom-8px-" style="text-align:center;background:#fed;">
            <h2>手机1</h2>
        </div>

        <div class="container-box pull-left margin-bottom-16px">
            <video width="100%" height="120px" controls="">
                <source src="{{ url('/resource/custom/lai/1.mp4') }}" type="video/mp4"/>
            </video>
        </div>

        <div class="container-box pull-left margin-bottom-16px">
            <img src="/resource/custom/lai/2019.jpg">
            <img src="/resource/custom/lai/2021.jpg">
            <img src="/resource/custom/lai/2022.jpg">
            <img src="/resource/custom/lai/2023.jpg">
            <img src="/resource/custom/lai/2024.jpg">
            <img src="/resource/custom/lai/2025.jpg">
            <img src="/resource/custom/lai/2026.jpg">
            <img src="/resource/custom/lai/2027.jpg">
            <img src="/resource/custom/lai/2028.jpg">
            <img src="/resource/custom/lai/2029.jpg">
            <img src="/resource/custom/lai/2037.jpg">
        </div>

    </div>




@endsection


@section('css')
    <style>
        .content { padding:0; }
        .container-box img {
            width: 100%;
            margin-bottom:4px;
        }
    </style>
@endsection


@section('js')
    <script>
        $(function() {
        });
    </script>
@endsection
