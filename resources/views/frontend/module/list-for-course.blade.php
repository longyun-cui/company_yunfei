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
            @for($i=1; $i<31; $i++)
                <div class="col-lg-2 col-md-3 col-sm-4 item-col margin-0">
                    <div class="item-container">

                        <a target="_blank" href="{{ url('/course/xiaotang01?id='.$i) }}">
                        <figure class="text-container clearfix">
                            <div class="text-box clearfix">
                                    <button class="btn btn-default btn-price pull-right btn-3d" data-hover="点击查看" style="border-radius:0;">
                                        <strong>第{{ $i }}讲</strong>
                                    </button>
                            </div>
                        </figure>
                        </a>

                    </div>
                </div>
            @endfor
        </div>

        <footer class="module-row module-footer-container text-center">
            {{ $items->links() }}
        </footer>

    </div>
</section>