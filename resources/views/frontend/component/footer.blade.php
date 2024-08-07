{{--footer--}}
<footer class="footer-container" id="footer">
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <section class="widget about-widget clearfix">
                        <h4 class="title hide">关于我们</h4>
                        <a class="footer-logo" href="javascript:void(0);">
                            <img src="{{ url('/templates/moban2030/assets/images/footer-logo.png') }}" alt="Footer Logo">
                            {{--<img src="{{ config('company.info.logo') }}" alt="Footer Logo">--}}
                        </a>
                        <p>{{ config('company.info.description') }}</p>
                        <ul class="social-icons clearfix">
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-2 col-sm-6">
                    <section class="widget twitter-widget clearfix">
                        <h4 class="title"></h4>
                        <div id="twitter-feeds" class="clearfix"></div>
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="widget address-widget clearfix">
                        <h4 class="title">联系我们</h4>
                        <ul>
                            <li><i class="fa fa-copyright"></i> {{ config('company.info.name') }} </li>
{{--                            <li><i class="fa fa-map-marker"></i> {{ config('company.info.address-1') }} </li>--}}
                            <li><i class="fa fa-phone"></i> <a href="tel:{{ config('company.info.mobile') }}">{{ config('company.info.mobile') }}</a> </li>
{{--                            <li><i class="fa fa-map-marker"></i> {{ config('company.info.address-2') }} </li>--}}
{{--                            <li><i class="fa fa-phone"></i> <a href="tel:{{ config('company.info.mobile-2') }}">{{ config('company.info.mobile-2') }}</a> </li>--}}
{{--                            <li><i class="fa fa-user"></i> {{ config('company.info.linkman') }} </li>--}}
                            {{--<li><i class="fa fa-envelope"></i> <a href="mailto:{{ config('company.info.email') }}">{{ config('company.info.email') }}</a> </li>--}}
                            <li><i class="fa fa-clock-o"></i> 周一 - 周日: 9:00 - 17:00 </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-bottom _none">
        <div class="container">
            {{--<p class="copyright pull-left wow slideInRight">Copyright © 2018.{{ config('company、.info.name') }} All rights reserved.</p>--}}
            <p class="copyright pull-left wow slideInRight">Copyright © 2018.德烨乐器 All rights reserved.</p>
            <nav class="footer-nav pull-right wow slideInLeft">
                <ul>
                    <li><a href="{{ url('/rent-out') }}">钢琴出租</a></li>
                    <li><a href="{{ url('/contact') }}">联系我们</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row mt10 mb10">
                <div class="col-md-12 text-center">
                    <div>
                        <small> Copyright&copy;2018. {{ config('company.info.english_name') }} {{ config('company.info.name') }}.</small><br>
                    </div>
                    <div>
                        <small>
                            <strong>广州钢琴出租</strong> |
                            <strong>上海钢琴出租</strong> |
                            <strong>二手钢琴批发</strong> |
                            <strong>钢琴回收</strong> |
                            <strong>钢琴维修</strong> |
                            <strong>全年无休上门服务</strong>
                        </small>
                    </div>
                    <div>
                        <a target="_blank" href="https://beian.miit.gov.cn">沪ICP备2023014304号</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>