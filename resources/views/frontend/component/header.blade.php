{{--header--}}
<header id="site-header" style="padding: 16px 0;">

    {{--选择语言--}}
    <div id="site-header-top" class="_none">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="clearfix">
                        <button class="btn btn-warning btn-lg header-btn visible-sm pull-right">List your Property for Free</button>
                        <p class="timing-in-header">Open Hours: Monday to Saturday - 8am to 6pm</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="clearfix">
                        <button class="btn btn-warning btn-lg header-btn hidden-sm">List your Property for Free</button>
                        <div class="language-in-header">
                            <i class="fa fa-globe"></i>
                            <label for="language-dropdown"> Language:</label>
                            <select name="currency" id="language-dropdown">
                                <option value="ENG">ENG</option>
                                <option value="AR">AR</option>
                                <option value="UR">UR</option>
                                <option value="NEO">NEO</option>
                                <option value="AKA">AKA</option>
                            </select>
                        </div>
                        <div class="currency-in-header">
                            <i class="fa fa-flag"></i>
                            <label for="currency-dropdown"> Currency: </label>
                            <select name="currency" id="currency-dropdown">
                                <option value="USD">USD</option>
                                <option value="EUR">EUR</option>
                                <option value="AOA">AOA</option>
                                <option value="XCD">XCD</option>
                                <option value="PKR">PKR</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .downlist {
            position: absolute;
            width: auto;
            min-width: 160px;
            height: auto;
            padding: 16px 32px;
            margin-left: -40px;
            margin-top: 0;
            border: 1px solid #000;
            background:#000;
            filter:alpha(opacity=60);
            -khtml-opacity: 0.6;
            -moz-opacity:0.6;
            opacity: 0.6;
            z-index:100;
            overflow: hidden;
        }
        #site-nav .downlist a {
            display:inline-block;
            width: 100%;
            height: 36px;
            padding: 8px;
            margin: 2px;
            border-bottom: 1px solid #aaa;
            color: #fff;
            filter:alpha(opacity=100);
            -khtml-opacity: 1;
            -moz-opacity:1;
            opacity: 1;
            white-space: nowrap;
            overflow: hidden;
            float:left;
        }
        #site-nav li {
            padding-left: 8px;
            padding-right: 8px;
        }
        #site-logo a {
            font-size:24px;
            line-height: 52px;
        }

    </style>

    {{--header--}}
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <figure id="site-logo">
                    <a href="{{ url('/') }}"><img src="{{ url('/templates/moban2030/assets/images/logo.png') }}" alt="Logo"></a>
{{--                    <a href="{{ url('/') }}"><img src="{{ url(config('company.info.logo')) }}" alt="Logo"></a>--}}
                    {{--<a href="{{ url('/') }}">{{ config('company.info.brand') }}</a>--}}
                </figure>
            </div>
            <div class="col-md-6 col-sm-8">
                <nav id="site-nav" class="nav navbar-default">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">首页</a></li>
                        <li class="nav_nohover hlzb"  drop-down='downlist4'>
                            <a href="{{ url('/houses') }}">楼盘</a>

                            <div class="downlist downlist4 _none" style="">
                                <div class="d_menu">
                                    @foreach($houses as $v)
                                    <a href="{{ url('/house/'.$v->id) }}">{{ $v->title or '' }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ url('/informations') }}">资讯动态</a></li>
                        {{--<li><a href="single-property.html">Property</a></li>--}}
                        {{--<li><a href="gallery.html">Gallery</a></li>--}}
                        <li><a href="{{ url('/contact') }}">联系我们</a></li>
                    </ul>
                </nav>

            </div>
            <div class="col-md-3 col-sm-4">
                <div class="contact-in-header clearfix">
                    <i class="fa fa-mobile"></i>
                    <span>
                        敬请来电 <br>
                        <a href="tel:{{ config('company.info.telephone') }}"><strong>{{ config('company.info.telephone') }}</strong></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</header>