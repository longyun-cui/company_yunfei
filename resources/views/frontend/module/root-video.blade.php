{{--<!-- START: module-link-contact -->--}}
<section class="module-container text-center" id="module-video">
    <div class="container full-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line color-e border-light title-h2"><b>钢琴教学</b></div>
            <div class="wow slideInRight module-subtitle-row color-e title-h4"><b>24小时，随时为你服务</b></div>
        </header>

        <div class="module-row module-body-container ">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">

                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-video- _none" data-rel="lightcase" role="button"
                       href="{{ trans('custom.text.video_player') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-video- _none" data-rel="lightcase" role="button"
                       href="" data-lc-options='{width:640, height:336, autoplay:false}'
                       data-lc-href="{{ config('common.host.'.env('APP_ENV').'.cdn').trans('custom.text.video') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>


                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block _none" data-fancybox- data-width="640" data-height="336"
                       href="{{ config('common.host.'.env('APP_ENV').'.cdn').trans('custom.text.video') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block" data-fancybox="" href="#myVideo">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <video width="720" height="416" controls="" id="myVideo" style="display:none;">
                        <source src="{{ config('common.host.'.env('APP_ENV').'.cdn').trans('custom.text.video') }}" type="video/mp4">
                    </video>

                </p>
            </div>
        </div>

        <footer class="module-row module-footer-container text-center">
            <a href="{{ url('/recycle/page') }}" class="view-more style-light" role="button">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>
<style>
    #module-video { background:url(/custom/images/banner8.jpeg); background-size:cover; }
</style>
{{--<!-- END: module-link-contact -->--}}