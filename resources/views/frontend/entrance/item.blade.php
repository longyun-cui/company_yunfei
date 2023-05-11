@extends('frontend.layout.layout')


{{--html.head--}}
@section('head_title'){{$item->title or ''}}-{{ config('company.info.short_name') }}@endsection
@section('meta_author')@endsection
@section('meta_title')钢琴出租-二手钢琴-钢琴初学教程-云飞@endsection
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
    @include('frontend.component.banner-for-rent-out-list')

    <div class="">

        @if($item->category == 11)
            @include('frontend.module.item-rent-out-detail', ['data'=>$item])
        @else
            @include('frontend.module.item-detail', ['data'=>$item])
        @endif

    </div>

    @include('frontend.module.item-modal')

@endsection




{{--script--}}
@section('custom-script')
<script>

    $(".show-modal-zc").on('click',function(){
        $('#dialog-zc').show();
        $('#dialog-jg').hide();
        $('#dialog-kp').hide();
        $('#grab-modal').modal();
    });

    $(".show-modal-jg").on('click',function(){
        $('#dialog-zc').hide();
        $('#dialog-jg').show();
        $('#dialog-kp').hide();
        $('#grab-modal').modal();
    });

    $(".show-modal-item").on('click',function(){
        $('#dialog-zc').hide();
        $('#dialog-jg').hide();
        $('#dialog-item').show();
        $('#grab-modal').modal();
    });

    $('.lightcase-images-show').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        speed: 1000,
        prevArrow: '<i class="fa fa-angle-left"></i>',
        nextArrow: '<i class="fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 600,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });


    $(function() {

        $('.lightcase-image').lightcase({
            maxWidth: 9999,
            maxHeight: 9999
        });

    });

</script>
@endsection
