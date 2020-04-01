{{--<!-- START: module-link-contact -->--}}
<section class="module-container text-center bg-light bg-" id="module-course">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line title-lg _bold">钢琴教学</div>
            <div class="wow slideInRight module-subtitle-row title-sm"></div>
        </header>

        <div class="module-row module-body-container bg-f">
            <div class="section-container">

                <figure class="text-container clearfix">
                    <div class="text-box clearfix text-center">
                        <span class="title-with-double-line border-light title-sm">钢琴入门教学 小汤一</span>
                    </div>
                    <div class="text-box clearfix">
                        @for($i=1; $i<31; $i++)
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 button-col">
                                <a href="{{ url('/course/xiaotang01?id='.sprintf("%02d", $i)) }}">
                                    <button class="btn btn-default btn-3d" data-hover="点击查看">
                                        <strong>第{{ sprintf("%02d", $i) }}讲</strong>
                                    </button>
                                </a>
                            </div>
                        @endfor
                    </div>
                </figure>

            </div>
        </div>

        <div class="module-row module-body-container bg-f">
            <div class="section-container">

                <figure class="text-container clearfix">
                    <div class="text-box clearfix text-center">
                        <span class="title-with-double-line border-light title-sm">钢琴入门教学 小汤二</span>
                    </div>
                    <div class="text-box clearfix">
                        @for($i=1; $i<33; $i++)
                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 button-col">
                                <a href="{{ url('/course/xiaotang02?id='.sprintf("%02d", $i)) }}">
                                    <button class="btn btn-default btn-3d" data-hover="点击查看">
                                        <strong>第{{ sprintf("%02d", $i) }}讲</strong>
                                    </button>
                                </a>
                            </div>
                        @endfor
                    </div>
                </figure>

            </div>
        </div>

        <div class="module-row module-body-container bg-f">
            <div class="section-container">

                <figure class="text-container clearfix">
                    <div class="text-box clearfix text-center">
                        <span class="title-with-double-line border-light title-sm">钢琴入门教学 小汤三</span>
                    </div>
                    <div class="text-box clearfix">
                        <span>敬请期待</span>
                    </div>
                </figure>

            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-link-contact -->--}}

<style>
    #module-course .module-body-container { margin-top:8px; margin-bottom:8px; }

    #module-course .section-container { padding:16px; margin-bottom:16px; }
    #module-course .button-col { margin:0; padding:1px; }
    #module-course .btn { width:100%;height:100%; }

    @media (max-width: 767px) {
        #module-course .section-container { padding: 16px 8px; }
    }
</style>