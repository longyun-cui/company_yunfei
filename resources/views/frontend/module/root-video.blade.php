{{--<!-- START: module-link-contact -->--}}
<section class="module-container text-center" id="module-video">
    <div class="container full-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line color-e border-light title-h2"><b>钢琴教学</b></div>
            <div class="wow slideInRight module-subtitle-row color-e title-h4"><b>钢琴入门教程 小汤一</b></div>
        </header>

        <div class="module-row module-body-container ">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">

                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-video- _none" data-rel="lightcase" role="button"
                       href="">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-video- _none" data-rel="lightcase" role="button"
                       href="" data-lc-options='{width:640, height:336, autoplay:false}'
                       data-lc-href="">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>


                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block _none" data-fancybox- data-width="640" data-height="336"
                       href="h">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block" data-fancybox="" href="#myVideo">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <video width="720" height="416"  controls="true" controlslist="nodownload" id="myVideo" style="display:none;">
                        <source src="{{ asset('/custom/videos/xiaotang_01.mp4') }}" type="video/mp4">
                    </video>

                </p>
            </div>
        </div>

        <footer class="module-row module-footer-container text-center">
            <a href="{{ url('/course/xiaotang01?id=01') }}" class="view-more style-light" role="button">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>
<style>
    #module-video { background:url(/common/images/bg-11.jpg); background-size:cover; }
</style>
{{--<!-- END: module-link-contact -->--}}