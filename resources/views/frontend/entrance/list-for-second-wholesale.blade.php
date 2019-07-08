@extends('frontend.layout.layout')


{{--html.head--}}
@section('head_title')二手钢琴批发 - {{ config('company.info.short_name') }}@endsection
@section('meta_author')@endsection
@section('meta_title')钢琴出租-二手钢琴-钢琴初学教程-云飞@endsection
@section('meta_keywords')二手钢琴,钢琴初学,出租钢琴,钢琴出租,钢琴教程@endsection
@section('meta_description')上海云飞钢琴有限公司专业服务于上海钢琴回收,二手钢琴回收,钢琴收购,钢琴出租,对二手钢琴以力求每架钢琴的音色纯正,优美,性能稳定,保持原品牌琴的原汁原味,特别是钢琴的外观油漆更是像新琴一样,由于合理的价格和完善周到的售后服务,使得公司有很高的知名度,得到了业内人士的一致公认和好评.@endsection



{{--header--}}
@section('component-header')
    @include('frontend.component.header')
@endsection


{{--footer--}}
@section('component-footer')
    @include('frontend.component.footer')
@endsection




{{--custom-content--}}
@section('custom-content')


    {{--banner--}}
    @include('frontend.component.banner-for-rent-out-list')

    {{--main--}}
    @include('frontend.module.list-for-second-wholesale')


@endsection


@section('custom-css')
    {{--<link href="{{ asset('/templates/jiaoben1627/css/layout.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('/templates/jiaoben1627/css/normalize.css') }}" rel="stylesheet">
@endsection


@section('custom-js')
    <script type="text/javascript" src="{{ asset('/templates/jiaoben1627/js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/templates/jiaoben1627/js/jquery.mixitup.min.js') }}"></script>
@endsection


@section('custom-script')
    <script type="text/javascript">
        $(function () {

            var filterList = {

                init: function () {

                    // MixItUp plugin
                    $('#portfolio-list').mixitup({
                        targetSelector: '.portfolio',
                        filterSelector: '.filter',
                        effects: ['fade'],
                        easing: 'snap',
                        // call the hover effect
                        onMixEnd: filterList.hoverEffect()
                    });

                },

                hoverEffect: function () {

                    // Simple parallax effect
                    $('#portfolio-list .portfolio').hover(
                        function () {
                            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                        },
                        function () {
                            $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                        }
                    );

                }

            };

            // Run the show!
            filterList.init();


        });
    </script>
@endsection
