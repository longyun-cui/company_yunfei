{{--main--}}
<section class="module-container bg-dark module-bg-orange bg-orange-1">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line title-lg"><b>钢琴出租</b></div>
            <div class="wow slideInRight module-subtitle-row title-sm">十年品质保证</div>
        </header>

        <div class="module-row module-body-container">
            @foreach($items as $v)
                <div class="col-lg-6 col-md-6 col-sm-6 item-col">
                    <a class="zoom- clearfix" target="_blank" href="{{ url('/item/'.$v->id) }}">
                        <div class="item-container model-left-right padding-8px bg-grey-f5">

                            <figure class="image-container padding-top-1-4-" style="float:right;">
                                <div class="image-box">
                                    <img data-action="zoom-" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
                                    {{--<span class="btn btn-warning">热销中</span>--}}
                                </div>
                            </figure>

                            <figure class="text-container text-left">
                                <div class="text-box">
                                    <div class="text-title-row">
                                        <span class="_bold">{{ $v->title or '' }}</span>
                                    </div>
                                    <div class="text-description-row">
                                        <div>
                                            <span>租金：<i class="fa fa-cny"></i> <span class="color-red font-14px _bold">{{ $v->custom->price or '' }}</span></span>
                                        </div>
                                        <div>
                                            <span>押金：<i class="fa fa-cny"></i> {{ $v->custom->deposit or '' }} </span>
                                        </div>
                                    </div>
                                </div>
                            </figure>

                        </div>
                    </a>
                </div>

            @endforeach
        </div>

        <div class="module-row module-body-container _none">
            @foreach($items as $v)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 item-col">
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
                                <div class="text-title-row multi-ellipsis-1">
                                    <a href="{{ url('/item/'.$v->id) }}"><b>{{ $v->title or '' }}</b></a>
                                </div>
                                <div class="text-description-row">
                                    <div>
                                        租金：<i class="fa fa-cny"></i> <span class="color-red _bold">{{ $v->custom->price or '' }}</span>
                                    </div>
                                    <div>
                                        <span>押金：<i class="fa fa-cny"></i> {{ $v->custom->deposit or '' }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box with-border-top text-center clearfix">
                                <a target="_blank" href="{{ url('/item/'.$v->id) }}">
                                    <button class="btn btn-default btn-3d btn-clicker" data-hover="点击查看">
                                        查看详情
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