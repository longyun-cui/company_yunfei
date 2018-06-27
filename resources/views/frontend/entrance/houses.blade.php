@extends('frontend.layout.layout')


{{--html.head--}}
@section('head_title')楼盘展示-汉盟房产@endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection



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


    {{--main--}}
    <section id="home-property-listing" class="">
        <header class="section-header home-section-header text-center">
            <div class="container">
                <h2 class="wow slideInRight">楼盘展示</h2>
                <p class="wow slideInLeft font-24px"><b>专业经纪人帮你找好房源</b></p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                @foreach($houses as $v)
                    <div class="col-lg-4 col-sm-6 layout-item-wrap">
                        <article class="property layout-item clearfix">
                            <figure class="feature-image">
                                <a class="clearfix zoom" target="_blank"  href="{{ url('/house/'.$v->id) }}">
                                    <img data-action="zoom" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
                                </a>
                                <span class="btn btn-warning btn-sale">热销中</span>
                            </figure>
                            <div class="property-contents clearfix">
                                <header class="property-header clearfix">
                                    <div class="pull-left">
                                        <h6 class="entry-title"><a href="{{ url('/house/'.$v->id) }}">{{ $v->title or '' }}</a></h6>
                                        <span class="property-location"><i class="fa fa-map-marker"></i> {{ $v->custom->position or '' }} </span>
                                    </div>
                                    <a target="_blank" href="{{ url('/house/'.$v->id) }}">
                                        <button class="btn btn-default btn-price pull-right btn-3d" data-hover="点击查看">
                                            <strong>查看详情</strong>
                                        </button>
                                    </a>
                                </header>
                                <div class="property-meta clearfix">
                                    <span class="_none"><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                    <span><i class="fa fa-bed"></i> {{ $v->custom->average or '' }} </span>
                                    <span><i class="fa fa-bathtub"></i> {{ $v->custom->total or '' }} </span>
                                    <span><i class="fa fa-cab"></i> Yes</span>
                                </div>
                                <div class="contents clearfix">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
                                </div>
                                <div class="author-box clearfix">
                                    <a href="index.html#" class="author-img"><img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Agent Image"></a>
                                    <cite class="author-name">Personal Seller: <a href="index.html#">Linda Garret</a></cite>
                                    <span class="phone"><i class="fa fa-phone"></i> 00894 692-49-22</span>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
