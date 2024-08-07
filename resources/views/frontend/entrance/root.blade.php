@extends('frontend.layout.layout')


{{--html.head--}}
@section('head_title')钢琴出租-二手钢琴-钢琴初学教程-德烨乐器@endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_keywords')二手钢琴,钢琴初学,出租钢琴,钢琴出租,钢琴教程@endsection
@section('meta_description')上海德烨乐器有限公司专业服务于上海钢琴回收,二手钢琴回收,钢琴收购,钢琴出租,对二手钢琴以力求每架钢琴的音色纯正,优美,性能稳定,保持原品牌琴的原汁原味,特别是钢琴的外观油漆更是像新琴一样,由于合理的价格和完善周到的售后服务,使得公司有很高的知名度,得到了业内人士的一致公认和好评.@endsection



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
    @include('frontend.component.banner-for-root')

    <div class="page-root">

        @include('frontend.module.root-rent-pic')

        @include('frontend.module.root-rent-out', ['items'=>$rent_items])

        {{--@include('frontend.module.root-video')--}}
        @include('frontend.module.root-course')

{{--        @include('frontend.module.root-cooperation', ['items'=>$cooperation_items])--}}

{{--        @include('frontend.module.root-second-wholesale', ['items'=>$wholesale_items])--}}

        @include('frontend.module.root-recycle')

        @include('frontend.module.root-advantage')

        @include('frontend.module.root-coverage', ['items'=>$coverage_items])

{{--        @include('frontend.module.root-qrcode')--}}

        @include('frontend.module.root-client', ['items'=>$client_items])

    </div>

@endsection



{{--footer--}}
@section('custom-style')
<style>
</style>
@endsection