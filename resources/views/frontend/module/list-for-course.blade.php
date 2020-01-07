{{--main--}}
<section class="module-container bg-light">
    <div class="container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line color-1 border-light title-h2"><b>视频教程</b></div>
            <div class="wow slideInRight module-subtitle-row color-5 title-h4"><b></b></div>
        </header>

        <div class="module-row module-body-container ">
            <div class="probootstrap-animate-">

                <p class="text-center">

                    <video width="720" height="416" controls="true" controlslist="nodownload" id="myVideo">
                        <source src="{{ asset('/custom/videos/xiaotang_01.mp4') }}" type="video/mp4">
                    </video>

                </p>

            </div>
        </div>

        <div class="module-row module-body-container">
            <div class="item-col margin-0">
                <div class="item-container">

                    <figure class="text-container clearfix">
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

    </div>
</section>