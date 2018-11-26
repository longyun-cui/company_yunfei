{{--house-detail--}}
<div id="property-single">

    <style>
        #property-single .common .entry-title { padding-bottom: 8px; }
        #property-single .common .entry-title .text-center { margin-top: 16px; }
    </style>

    <div class="container">
        <div class="row">

            {{--left--}}
            <div class="col-lg-12 col-md-12">

                {{--图文详情--}}
                <section class="property-contents common">
                    <div class="entry-title clearfix">
                        <h3 class="text-center"> {{ $data->title or '' }} </h3>
                        {{--<a class="pull-right print-btn" href="javascript:window.print()">Print This Property <i class="fa fa-print"></i></a>--}}
                        <a class="pull-right print-btn font-14px" href="javascript:void(0);">浏览 ({{ $data->visit_num or '' }}) 次</a>
                    </div>
                    <div>
                        {!! $data->content or '' !!}
                    </div>
                </section>


                {{--楼盘详情--}}
                <section class="property-contents common _none">
                    <div class="entry-title clearfix">
                        <h4 class="pull-left"> 楼盘详情 </h4>
                        <a class="pull-right print-btn _none" href="javascript:window.print()">Print This Property <i class="fa fa-print"></i></a>
                    </div>
                    <div>
                        {{--{!! $data->content or '' !!}--}}
                    </div>
                </section>


                {{----}}
                <section class="property-single-features common clearfix _none">
                    <h4 class="entry-title">Property Features</h4>
                    <ul class="property-single-features-list clearfix">
                        <li>Air Conditioning</li>
                        <li>Cable TV</li>
                        <li>Cot</li>
                        <li class="disabled">Fan</li>
                        <li>Lift</li>
                        <li>Parking</li>
                        <li>Separate Shower</li>
                        <li>Office/den</li>
                        <li class="disabled">Air Conditioning</li>
                        <li>Cable TV</li>
                        <li>Cot</li>
                        <li>Fan</li>
                        <li>Lift</li>
                        <li class="disabled">Parking</li>
                        <li>Cot</li>
                        <li>Fan</li>
                        <li>Lift</li>
                        <li>Parking</li>
                        <li>Separate Shower</li>
                        <li class="disabled">Office/den</li>
                        <li>Air Conditioning</li>
                        <li>Cable TV</li>
                    </ul>
                </section>

                <section class="property-video common _none">
                    <h4 class="entry-title">Video Tour</h4>
                    {{--<iframe src="" allowfullscreen></iframe>--}}
                </section>

                <section class="property-nearby-places common _none">
                    <h4 class="entry-title">Near By Places</h4>
                    <div id="nearby-places-map"></div>
                </section>

                {{--经纪人--}}
                <section class="property-agent common _none">
                    <h4 class="entry-title">联系经纪人</h4>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="agent-box clearfix">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-5">
                                        <a href="javascript:void(0);" class="agent-image">
                                            <img src="{{ url('/templates/moban2030/assets/images/agents/2.jpg') }}" alt="Agent Image">
                                        </a>
                                    </div>
                                    <div class="col-sm-7 col-xs-7">
                                        <cite class="agent-name">Michelle Ramirez</cite>
                                        <small class="designation">Company Agent at Realtory Inc. </small>
                                        <ul class="agent-social-handlers clearfix">
                                            <li><a href="javascript:void(0);"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-pinterest-square"></i> Pinterest</a></li>
                                            <li><a href="javascript:void(0);"><i class="fa fa-google-plus-square"></i> Google Plus</a></li>
                                        </ul>
                                        <a href="{{ url('/') }}" class="btn btn-warning">View Profile</a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. luctus ligula ac faucibus faucibus. Cras in nisi in turpis eleifend vehicula at at massa. Vivamus aliquet porttitor odio.</p>
                            </div>
                            <div class="widget address-widget clearfix">
                                <ul>
                                    <li><i class="fa fa-map-marker"></i> 4 Tottenham Road, London, England.</li>
                                    <li><i class="fa fa-phone"></i> (123) 45678910</li>
                                    <li><i class="fa fa-envelope"></i> huycoi.art@gmail.com</li>
                                    <li><i class="fa fa-fax"></i> +84 962 216 601</li>
                                    <li><i class="fa fa-clock-o"></i> Mon - Sat: 9:00 - 18:00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="agent-contact-form">
                                <form id="agent-form" class="agent-form" method="post">
                                    <input type="text" name="name" placeholder="您的姓名" class="required" >
                                    <input type="text" name="phone" placeholder="电话" class="required">
                                    <input type="text" name="email" placeholder="邮箱" class="email required">
                                    <textarea name="message" cols="30" rows="5" class="required" placeholder="留言"></textarea>
                                    <button class="btn btn-default btn-lg btn-3d" type="button" data-hover="提交">提交</button>
                                    <div class="error-container"></div>
                                    <div class="message-container"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

            </div>


            {{--最新动态--}}
            <div class="col-lg-12 col-md-12 _none">
                <section class="property-contents common">
                    <div class="entry-title clearfix">
                        <h3 class="text-center"> 最新动态 </h3>
                        <a class="pull-right print-btn _none" href="javascript:window.print()">Print This Property <i class="fa fa-print"></i></a>
                    </div>
                    <div>
                        {{{ $data->custom->recent_news or '' }}}
                    </div>
                </section>
            </div>


            {{--图片--}}
            <div class="col-lg-12 col-md-12 _none">
                <img src="{{ url('/custom/images/box-img.jpg') }}" alt="" />
            </div>


            <style>
                .property-contents table { width:100%; }
                .property-contents tbody { width:100%; }
                .property-contents tr { width:100%; min-height:32px; line-height:32px; border-bottom:1px dashed #eee; }
                .property-contents td { width:50%;float:left; }
            </style>


            {{--其他楼盘--}}
            <div class="col-lg-12 col-md-12 ">
                <div id="property-sidebar">

                    {{----}}
                    <section class="widget adv-search-widget clearfix _none">
                        <h5 class="title hide">Search your Place</h5>
                        <div id="advance-search-widget" class="clearfix">
                            <form action="single-property.html#" id="adv-search-form">
                                <div id="widget-tabs">
                                    <ul class="tab-list clearfix">
                                        <li><a class="btn" href="single-property.html#tab-1">Sale</a></li>
                                        <li><a class="btn" href="single-property.html#tab-2">Rent</a></li>
                                        <li><a class="btn" href="single-property.html#tab-3">office for rent</a></li>
                                    </ul>
                                    <div id="tab-1" class="tab-content current">
                                        <fieldset class="clearfix">
                                            <div>
                                                <label for="main-location">All Location</label>
                                                <select name="location" id="main-location">
                                                    <option value="">All Cities</option>
                                                    <option value="chicago"> Chicago</option>
                                                    <option value="los-angeles"> Los Angeles</option>
                                                    <option value="miami"> Miami</option>
                                                    <option value="new-york"> New York</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="property-sub-location">Sub Location</label>
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
                                            </div>
                                            <div>
                                                <label for="property-status">All Status</label>
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
                                            </div>
                                            <div>
                                                <label for="property-type">All Types</label>
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
                                            </div>
                                            <div>
                                                <label for="property-beds">No.Beds</label>
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
                                            </div>
                                            <div>
                                                <label for="property-baths">No.Baths</label>
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
                                            </div>
                                            <div>
                                                <label for="property-min-area">Min Area(sqft)</label>
                                                <input type="text" name="min-area" id="property-min-area">
                                            </div>
                                            <div>
                                                <label for="property-max-area">Max Area(sqft)</label>
                                                <input type="text" name="max-area" id="property-max-area">
                                            </div>
                                            <div>
                                                <label for="property-min-price">Min Prices</label>
                                                <select name="min-price" id="property-min-price">
                                                    <option value="any" selected="selected">Any</option>
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
                                            </div>
                                            <div>
                                                <label for="property-max-price">Max Prices</label>
                                                <select name="max-price" id="property-max-price" >
                                                    <option value="any" selected="selected">Any</option>
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
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div id="tab-2" class="tab-content">
                                        <fieldset class="clearfix">
                                            <div>
                                                <label for="main-location">All Location</label>
                                                <select name="location" id="main-location">
                                                    <option value="">All Cities</option>
                                                    <option value="chicago"> Chicago</option>
                                                    <option value="los-angeles"> Los Angeles</option>
                                                    <option value="miami"> Miami</option>
                                                    <option value="new-york"> New York</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="property-sub-location">Sub Location</label>
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
                                            </div>
                                            <div>
                                                <label for="property-status">All Status</label>
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
                                            </div>
                                            <div>
                                                <label for="property-type">All Types</label>
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
                                            </div>
                                            <div>
                                                <label for="property-beds">No.Beds</label>
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
                                            </div>
                                            <div>
                                                <label for="property-baths">No.Baths</label>
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
                                            </div>
                                            <div>
                                                <label for="property-min-area">Min Area(sqft)</label>
                                                <input type="text" name="min-area" id="property-min-area">
                                            </div>
                                            <div>
                                                <label for="property-max-area">Max Area(sqft)</label>
                                                <input type="text" name="max-area" id="property-max-area">
                                            </div>
                                            <div>
                                                <label for="property-min-price">Min Prices</label>
                                                <select name="min-price" id="property-min-price">
                                                    <option value="any" selected="selected">Any</option>
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
                                            </div>
                                            <div>
                                                <label for="property-max-price">Max Prices</label>
                                                <select name="max-price" id="property-max-price" >
                                                    <option value="any" selected="selected">Any</option>
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
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div id="tab-3" class="tab-content">
                                        <fieldset class="clearfix">
                                            <div>
                                                <label for="main-location">All Location</label>
                                                <select name="location" id="main-location">
                                                    <option value="">All Cities</option>
                                                    <option value="chicago"> Chicago</option>
                                                    <option value="los-angeles"> Los Angeles</option>
                                                    <option value="miami"> Miami</option>
                                                    <option value="new-york"> New York</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="property-sub-location">Sub Location</label>
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
                                            </div>
                                            <div>
                                                <label for="property-status">All Status</label>
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
                                            </div>
                                            <div>
                                                <label for="property-type">All Types</label>
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
                                            </div>
                                            <div>
                                                <label for="property-beds">No.Beds</label>
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
                                            </div>
                                            <div>
                                                <label for="property-baths">No.Baths</label>
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
                                            </div>
                                            <div>
                                                <label for="property-min-area">Min Area(sqft)</label>
                                                <input type="text" name="min-area" id="property-min-area">
                                            </div>
                                            <div>
                                                <label for="property-max-area">Max Area(sqft)</label>
                                                <input type="text" name="max-area" id="property-max-area">
                                            </div>
                                            <div>
                                                <label for="property-min-price">Min Prices</label>
                                                <select name="min-price" id="property-min-price">
                                                    <option value="any" selected="selected">Any</option>
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
                                            </div>
                                            <div>
                                                <label for="property-max-price">Max Prices</label>
                                                <select name="max-price" id="property-max-price" >
                                                    <option value="any" selected="selected">Any</option>
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
                                            </div>
                                        </fieldset>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-lg text-center btn-3d" data-hover="Search Property">Search Property</button>
                                </div>
                            </form>
                        </div>
                    </section>


                    {{----}}
                    <section class="widget recent-properties clearfix">
                        <h4 class="title" style="margin-bottom:32px;padding-bottom:16px;font-size:24px;line-height:24px; border-bottom:1px solid #eee;"><b>热门租琴</b></h4>
                        @foreach($rent_items as $v)
                            <div class="col-lg-4 col-md-4 ">
                                <div class="property clearfix">
                                    <a href="{{ url('/house/'.$v->id) }}" class="feature-image zoom-">
                                        <img data-action="zoom-" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
                                    </a>
                                    <div class="property-contents">
                                        <h6 class="entry-title"><a href="{{ url('/item/'.$v->id) }}">{{ $v->title or '' }}</a></h6>
                                        <span class="btn-price">单价：{{ $v->custom->average or '' }}</span>
                                        <span class="btn-price">总价：{{ $v->custom->total or '' }}</span>
                                        <div class="property-meta clearfix _none">
                                            <span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>
                                            <span><i class="fa fa-bed"></i> 3 Beds</span>
                                            <span><i class="fa fa-bathtub"></i> 3 Baths</span>
                                            <span><i class="fa fa-cab"></i> Yes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>


                    {{----}}
                    <section class="widget property-taxonomies clearfix _none">
                        <h5 class="title">Recent Status</h5>
                        <ul class="clearfix">
                            <li><a href="single-property.html#">For Rent </a><span class="pull-right">29</span></li>
                            <li><a href="single-property.html#">For Sale </a><span class="pull-right">35</span></li>
                            <li><a href="single-property.html#">Office For Rent </a><span class="pull-right">07</span></li>
                        </ul>
                    </section>


                    {{----}}
                    <section class="widget property-taxonomies clearfix _none">
                        <h5 class="title">Recent Type</h5>
                        <ul class="clearfix">
                            <li><a href="single-property.html#">Apartment </a><span class="pull-right">30</span></li>
                            <li><a href="single-property.html#">Loft </a><span class="pull-right">05</span></li>
                            <li><a href="single-property.html#">Single Family Home </a><span class="pull-right">28</span></li>
                            <li><a href="single-property.html#">Vila </a><span class="pull-right">37</span></li>
                        </ul>
                    </section>


                </div>
            </div>


        </div>
    </div>

</div>

