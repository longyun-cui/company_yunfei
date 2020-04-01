{{--main--}}
<section class="module-container text-center bg-light module-video">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line title-lg _bold">视频教程</div>
            <div class="wow slideInRight module-subtitle-row title-sm">
                钢琴入门教程
                @if($course == "xiaotang01") 小汤一
                @elseif($course == "xiaotang02") 小汤二
                @elseif($course == "xiaotang03") 小汤三
                @endif
                第{{ $id }}讲
            </div>
        </header>

        <div class="module-row module-body-container">
            <div class="section-container- text-center">

                <video width="720" height="auto" controls="true" controlslist="nodownload" autoplay="autoplay" id="myVideo">
                    <source src="{{ asset('/uploads/custom/videos/'.$course.'/'.$course.'_'.$id.'.mp4') }}" type="video/mp4">
                </video>

            </div>
        </div>

        <div class="module-row module-body-container bg-white">
            <div class="section-container">

                <figure class="text-container clearfix">
                    <div class="text-box clearfix text-center">
                        <span class="title-sm">钢琴入门教学 小汤一</span>
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

        <div class="module-row module-body-container bg-white">
            <div class="section-container">

                    <figure class="text-container clearfix">
                        <div class="text-box clearfix text-center">
                            <span class="title-sm">钢琴入门教学 小汤二</span>
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


        <div class="module-row module-body-container">

            @include('frontend.module.section-rent-out', ['items'=>$rent_items])

        </div>

    </div>
</section>

<style>
    .module-video .module-body-container { margin-top:8px; margin-bottom:8px; }

    .module-video .section-container { padding:16px; margin-bottom:16px; }
    .module-video .button-col { margin:0; padding:1px; }
    .module-video .btn { width:100%;height:100%; }

    @media (max-width: 767px) {
        video { width:100% }
        .module-video .section-container { padding: 16px 8px; }
    }
</style>