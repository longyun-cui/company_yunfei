{{--main--}}
<section class="module-container bg-light">
    <div class="container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line title-lg _bold">视频教程列表</div>
            <div class="wow slideInRight module-subtitle-row title-sm"></div>
        </header>

        <div class="module-row module-body-container">
            <div class="item-col margin-0">
                <div class="item-container">

                    <figure class="text-container clearfix">
                        <div class="text-box clearfix text-center">
                            <span class="title-sm _bold">钢琴入门教学 小汤一</span>
                        </div>
                        <div class="text-box clearfix">
                            @for($i=1; $i<31; $i++)
                                <a href="{{ url('/course/xiaotang01?id='.sprintf("%02d", $i)) }}">
                                    <button class="btn btn-default btn-3d margin-4px" data-hover="点击查看" style="min-width:84px;border-radius:0;">
                                        <strong>第{{ sprintf("%02d", $i) }}讲</strong>
                                    </button>
                                </a>
                            @endfor
                        </div>
                    </figure>

                </div>
            </div>
        </div>

        <div class="module-row module-body-container">
            <div class="item-col margin-0">
                <div class="item-container">

                    <figure class="text-container clearfix">
                        <div class="text-box clearfix text-center">
                            <span class="title-sm _bold">钢琴入门教学 小汤二</span>
                        </div>
                        <div class="text-box clearfix">
                            @for($i=1; $i<33; $i++)
                                <a href="{{ url('/course/xiaotang02?id='.sprintf("%02d", $i)) }}">
                                    <button class="btn btn-default btn-3d margin-4px" data-hover="点击查看" style="min-width:84px;border-radius:0;">
                                        <strong>第{{ sprintf("%02d", $i) }}讲</strong>
                                    </button>
                                </a>
                            @endfor
                        </div>
                    </figure>

                </div>
            </div>
        </div>

    </div>
</section>