{{--main--}}
<section class="module-container bg-light module-bg-orange">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line color-e border-light title-h2"><b>钢琴出租</b></div>
            <div class="wow slideInRight module-subtitle-row color-d title-h4"><b>十年品质保证</b></div>
        </header>

        <div class="module-row module-body-container">
            @foreach($items as $v)
                <div class="item-col col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="item-container padding-8px bg-white">

                        <figure class="image-container padding-top-3-4">
                            <div class="image-box">
                                <a class="clearfix zoom-" target="_blank"  href="{{ url('/item/'.$v->id) }}">
                                    <img data-action="zoom-" src="{{ url(env('DOMAIN_CDN').'/'.$v->cover_pic) }}" alt="Property Image">
                                </a>
                                {{--<span class="btn btn-warning">热销中</span>--}}
                            </div>
                        </figure>

                        <figure class="text-container clearfix">
                            <div class="text-box">
                                <div class="text-title-row multi-ellipsis-2"><a href="{{ url('/item/'.$v->id) }}"><b>{{ $v->title or '' }}</b></a></div>
                                <div class="text-description-row">
                                    <div>
                                        租金：<i class="fa fa-cny"></i> <span class="font-16px color-red"><b>{{ $v->custom->price or '' }}</b></span>
                                    </div>
                                    <div>
                                        <span>押金：<i class="fa fa-cny"></i> {{ $v->custom->deposit or '' }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box with-border-top text-center clearfix">
                                <a target="_blank" href="{{ url('/item/'.$v->id) }}">
                                    <button class="btn btn-default btn-3d btn-clicker" data-hover="点击查看" style="border-radius:0;">
                                        <strong>查看详情</strong>
                                    </button>
                                </a>
                            </div>
                        </figure>

                    </div>
                </div>
            @endforeach
        </div>

        <footer class="module-row module-footer-container text-center">
            <a href="{{ url('/rent-out/list') }}" class="view-more style-light">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>