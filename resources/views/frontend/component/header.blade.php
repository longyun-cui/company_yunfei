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

    {{--header--}}
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <figure id="site-logo">
                    <a href="{{ url('/') }}"><img src="{{ url('/templates/moban2030/assets/images/logo.png') }}" alt="Logo"></a>
                </figure>
            </div>
            <div class="col-md-6 col-sm-8">
                <nav id="site-nav" class="nav navbar-default">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">首页</a></li>
                        <li><a href="{{ url('/houses') }}">楼盘</a></li>
                        {{--<li><a href="single-property.html">Property</a></li>--}}
                        {{--<li><a href="gallery.html">Gallery</a></li>--}}
                        <li><a href="contact.html">联系我们</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="contact-in-header clearfix">
                    <i class="fa fa-mobile"></i>
                    <span>
                        敬请来电 <br>
                        <strong>177-1750-6956</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>

</header>