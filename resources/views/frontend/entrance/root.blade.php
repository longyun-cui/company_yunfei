@extends('frontend.layout.layout')


{{--html.head--}}
@section('head_title')盛贝地产 - 寻觅e家@endsection
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

    <style>
        .slick-slide img { width: 100%; height: 480px; object-fit:cover; }
    </style>
    {{--banner--}}
    <div class="main-slider-wrapper clearfix">
        <div id="main-slider">
            <div class="slide"><img src="{{ url('/common/images/banner01.jpeg') }}" alt="Slide"></div>
            <div class="slide"><img src="{{ url('/common/images/banner02.jpeg') }}" alt="Slide"></div>
            <div class="slide"><img src="{{ url('/common/images/banner03.jpeg') }}" alt="Slide"></div>
            {{--<div class="slide"><img src="{{ url('/templates/moban2030/assets/images/slider/1.jpg') }}" alt="Slide"></div>--}}
            {{--<div class="slide"><img src="{{ url('/templates/moban2030/assets/images/slider/2.jpg') }}" alt="Slide"></div>--}}
            {{--<div class="slide"><img src="{{ url('/templates/moban2030/assets/images/slider/3.jpg') }}" alt="Slide"></div>--}}
            {{--<div class="slide"><img src="{{ url('/templates/moban2030/assets/images/slider/4.jpg') }}" alt="Slide"></div>--}}
        </div>
        <div id="slider-contents">
            <div class="container text-center">
                <div class="jumbotron">
                    <h1>盛贝地产 - 寻觅e家</h1>
                    <div class="contents clearfix">
                        <p>If you dream of designing a new home that takes full advantage of <br>
                            the unique geography and views of land that you love</p>
                    </div>
                    <a class="btn btn-warning btn-lg btn-3d" data-hover="我们的服务" href="javascript:void(0);" role="button">我们的服务</a>
                    <a class="btn btn-default btn-border btn-lg" href="javascript:void(0);" role="button">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>

    {{----}}
    <div id="advance-search" class="main-page clearfix _none">
        <div class="container">
            <button class="btn top-btn">Find Your Place</button>
            <form action="index.html#" id="adv-search-form" class="clearfix">
                <fieldset>
                    <select name="location" id="main-location">
                        <option value="">All Cities</option>
                        <option value="chicago"> Chicago</option>
                        <option value="los-angeles"> Los Angeles</option>
                        <option value="miami"> Miami</option>
                        <option value="new-york"> New York</option>
                    </select>
                    <select name="sub-location" id="property-sub-location">
                        <option value="">All Areas</option>
                        <option value="brickell" > Brickell</option>
                        <option value="brickyard" > Brickyard</option>
                        <option value="bronx" > Bronx</option>
                        <option value="brooklyn" > Brooklyn</option>
                        <option value="coconut-grove" > Coconut Grove</option>
                        <option value="downtown" > Downtown</option>
                        <option value="eagle-rock" > Eagle Rock</option>
                        <option value="englewood" > Englewood</option>
                        <option value="hermosa" > Hermosa</option>
                        <option value="hollywood" > Hollywood </option>
                        <option value="lincoln-park" > Lincoln Park</option>
                        <option value="manhattan" > Manhattan</option>
                        <option value="midtown" > Midtown</option>
                        <option value="queens" > Queens</option>
                        <option value="westwood" > Westwood </option>
                        <option value="wynwood" > Wynwood</option>
                    </select>
                    <select id="property-status" name="status">
                        <option value="">All Status</option>
                        <option value="for-rent"> For Rent</option>
                        <option value="for-sale"> For Sale</option>
                        <option value="foreclosures"> Foreclosures</option>
                        <option value="new-costruction"> New Costruction</option>
                        <option value="new-listing"> New Listing</option>
                        <option value="open-house"> Open House</option>
                        <option value="reduced-price"> Reduced Price</option>
                        <option value="resale"> Resale</option>
                    </select>
                    <select id="property-type" name="type" >
                        <option value="">All Types</option>
                        <option value="apartment"> Apartment</option>
                        <option value="condo"> Condo</option>
                        <option value="farm"> Farm</option>
                        <option value="loft"> Loft</option>
                        <option value="lot"> Lot</option>
                        <option value="multi-family-home"> Multi Family Home</option>
                        <option value="single-family-home"> Single Family Home</option>
                        <option value="townhouse"> Townhouse</option>
                        <option value="villa"> Villa</option>
                    </select>
                    <select name="bedrooms" id="property-beds">
                        <option value="">Beds</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="any">Any</option>
                    </select>
                    <select name="bathrooms" id="property-baths">
                        <option value="">Bathrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="any">Any</option>
                    </select>
                    <input type="text" name="min-area" id="property-min-area" placeholder="Min Area (sqft)">
                    <input type="text" name="max-area" id="property-max-area" placeholder="Max Area (sqft)">
                    <select name="min-price" id="property-min-price">
                        <option value="any" selected="selected">Min Price</option>
                        <option value="1000">$1000</option>
                        <option value="5000">$5000</option>
                        <option value="10000">$10000</option>
                        <option value="50000">$50000</option>
                        <option value="100000">$100000</option>
                        <option value="200000">$200000</option>
                        <option value="300000">$300000</option>
                        <option value="400000">$400000</option>
                        <option value="500000">$500000</option>
                        <option value="600000">$600000</option>
                        <option value="700000">$700000</option>
                        <option value="800000">$800000</option>
                        <option value="900000">$900000</option>
                        <option value="1000000">$1000000</option>
                        <option value="1500000">$1500000</option>
                        <option value="2000000">$2000000</option>
                        <option value="2500000">$2500000</option>
                        <option value="5000000">$5000000</option>
                    </select>
                    <select name="max-price" id="property-max-price" >
                        <option value="any" selected="selected">Max Price</option>
                        <option value="5000">$5000</option>
                        <option value="10000">$10000</option>
                        <option value="50000">$50000</option>
                        <option value="100000">$100000</option>
                        <option value="200000">$200000</option>
                        <option value="300000">$300000</option>
                        <option value="400000">$400000</option>
                        <option value="500000">$500000</option>
                        <option value="600000">$600000</option>
                        <option value="700000">$700000</option>
                        <option value="800000">$800000</option>
                        <option value="900000">$900000</option>
                        <option value="1000000">$1000000</option>
                        <option value="1500000">$1500000</option>
                        <option value="2000000">$2000000</option>
                        <option value="2500000">$2500000</option>
                        <option value="5000000">$5000000</option>
                        <option value="10000000">$10000000</option>
                    </select>
                </fieldset>
                <button type="submit" class="btn btn-default btn-lg text-center">Search <br class="hidden-sm hidden-xs"> Property</button>
            </form>
        </div>
    </div>

    {{--main--}}
    <section id="home-property-listing" class="">
        <header class="section-header home-section-header text-center">
            <div class="container">
                <h2 class="wow slideInRight">楼盘展示</h2>
                <p class="wow slideInLeft font-20px"><b>专业经纪人帮你找好房源</b></p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                @foreach($houses as $v)
                    <div class="col-lg-4 col-sm-6 layout-item-wrap">
                        <article class="property layout-item clearfix">
                            <figure class="feature-image">
                                <a class="clearfix zoom-" target="_blank"  href="{{ url('/house/'.$v->id) }}">
                                    <img data-action="zoom-" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
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

    {{--下载APP--}}
    <section id="announcement-section" class="text-center">
        <div class="container ">
            <h2 class="title wow slideInLeft">权威发布</h2>
            <p class="wow slideInRight font-20px">发布最新升值最快房源信息，扫码关注官方微信！</p>
            <a class="btn" href="javascript:void(0);"><img src="{{ url('/common/images/wechat.png') }}" alt="ISO Button" style="width:128px;"></a>
            <a class="btn _none" href="javascript:void(0);"><img src="{{ url('/templates/moban2030/assets/images/playstore-btn.png') }}" alt="Play Store Button"></a>
        </div>
    </section>

    {{--出租--}}
    <section id="home-property-for-rent-listing" style="display:none;">
        <header class="section-header home-section-header text-center">
            <div class="container">
                <h2 class="wow slideInLeft">Office For Rent</h2>
                <p class="wow slideInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut <br>
                    labore et dolore magna aliquan ut enim ad minim veniam.</p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div id="property-for-rent-slider">
                    @for($i=1;$i<1;$i++)
                        <div class="col-lg-4 col-md-6">
                            <article class="property clearfix">
                                <figure class="feature-image">
                                    <a class="clearfix" href="{{ url('/house') }}"> <img src="{{ url('/templates/moban2030/assets/images/property/'.$i.'.jpg') }}" alt="Property Image"></a>
                                </figure>
                                <div class="property-contents">
                                    <header class="property-header clearfix">
                                        <div class="pull-left">
                                            <h6 class="entry-title"><a href="{{ url('/house') }}">Guaranteed modern home</a></h6>
                                            <span class="property-location"><i class="fa fa-map-marker"></i> 14 Tottenham Road, London</span>
                                        </div>
                                        <button class="btn btn-default btn-price pull-right btn-3d" data-hover="$389.000"><strong>$389.000</strong></button>
                                    </header>
                                    <div class="property-meta clearfix">
                                        <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                        <span><i class="fa fa-bed"></i> 3 Beds</span>
                                        <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                        <span><i class="fa fa-cab"></i> Yes</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>

    {{--优势--}}
    <section id="home-features-section" class="text-center">
        <header class="section-header home-section-header">
            <div class="container">
                <h2 class="wow slideInRight">为什么选择我们？</h2>
                <p class="wow slideInLeft"></p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="feature clearfix">
                        <i class="icon"><img src="{{ url('/templates/moban2030/assets/images/features/1.png') }}" alt="Feature Icon"></i>
                        <h6 class="entry-title font-20px">实力强 </h6>
                        <p>房源实力雄厚，从市场上来说，我司选择的房源使用更好材料；从设计上来说，我司选择的房源更有能力和资金在商业配套、景观设计等方面投入开发。  </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="feature clearfix">
                        <i class="icon"><img src="{{ url('/templates/moban2030/assets/images/features/2.png') }}" alt="Feature Icon"></i>
                        <h6 class="entry-title font-20px">风险小  </h6>
                        <p>买房子不是一锥子买卖，相比于其他房源，我们的选择的房源更注重口碑和声誉，房源证件齐全，收房放心。 </p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="feature clearfix">
                        <i class="icon"><img src="{{ url('/templates/moban2030/assets/images/features/3.png') }}" alt="Feature Icon"></i>
                        <h6 class="entry-title font-20px">物业好  </h6>
                        <p>真正的精致生活居所不仅在于硬件设施的完美与奢华，更在于提供全面的增值服务。我司房源更加注重后期管理和服务，物业质量较高。 　</p>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="feature clearfix">
                        <i class="icon"><img src="{{ url('/templates/moban2030/assets/images/features/4.png') }}" alt="Feature Icon"></i>
                        <h6 class="entry-title font-20px">眼光好  </h6>
                        <p>我司选择的房源开发商往往拥有十余年甚至数十年的房产开发经历，经验丰富。也许若干年后，当初同价位的房子因为区域的不同价格早已不可同日而语，即便是同一地段的房子，我司房源的价格也会涨得比周围多的多，如果是投资的话，那就更得选择我们了。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
