{{--main--}}
<section class="module-container bg-light">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line color-1 border-light title-h2"><b>钢琴出租</b></div>
            <div class="wow slideInRight module-subtitle-row color-5 title-h4"><b>上海地区最实惠的租琴</b></div>
        </header>

        <div class="module-row module-body-container">
            @foreach($items as $v)
                <div class="item-col col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="item-container">

                        <figure class="image-container padding-top-3-4">
                            <div class="image-box">
                                <a class="clearfix zoom-" target="_blank"  href="{{ url('/item/'.$v->id) }}">
                                    <img data-action="zoom-" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
                                </a>
                                {{--<span class="btn btn-warning">热销中</span>--}}
                            </div>
                        </figure>

                        <figure class="text-container clearfix">
                            <div class="text-box" style="border-bottom:1px solid #e6e6e6">
                                <div class="text-title-row"><a href="{{ url('/item/'.$v->id) }}"><b>{{ $v->title or '' }}</b></a></div>
                                <div class="text-description-row">
                                    <div>
                                        <i class="fa fa-cny"></i> <span class="font-18px color-red"><b>{{ $v->custom->price or '' }}</b></span>
                                    </div>
                                    <div>
                                        <span>押金：<i class="fa fa-cny"></i> {{ $v->custom->deposit or '' }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-box text-center clearfix">
                                <a target="_blank" href="{{ url('/item/'.$v->id) }}">
                                    <button class="btn btn-default btn-3d btn-clicker" data-hover="点击查看">
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
            <a href="{{ url('/rent-out/list') }}" class="view-more style-dark">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>