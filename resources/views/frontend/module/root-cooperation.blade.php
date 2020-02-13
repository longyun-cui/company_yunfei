{{--最新资讯--}}
<section class="module-container text-center bg-grey-27 bg-dark">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line title-lg">合作加盟</div>
            <div class="wow slideInRight module-subtitle-row title-sm">服务更多城市，城市让生活更美好</div>
        </header>

        <div class="module-row module-body-container ">
            @foreach($items as $v)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 item-col">
                    <div class="item-container padding-8px bg-white">

                        <figure class="image-container padding-top-4-5">
                            <div class="image-box">
                                <a class="clearfix zoom-" target="_blank"  href="{{ url('/item/'.$v->id) }}">
                                    <img data-action="zoom-" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
                                </a>
                                {{--<span class="btn btn-warning">热销中</span>--}}
                            </div>
                        </figure>

                        <figure class="text-container clearfix">
                            <div class="text-box">
                                <div class="text-title-row multi-ellipsis-1">
                                    <a href="{{ url('/item/'.$v->id) }}"><b>{{ $v->title or '' }}</b></a>
                                </div>
                                <div class="hidden-xs"><i class="fa fa-map-marker"></i> {{ $v->custom->deposit or '' }}</div>
                            </div>
                            <div class="text-box with-border-top text-center clearfix hidden-xs">
                                <a target="_blank" href="{{ url('/item/'.$v->id) }}">
                                    <button class="btn btn-default btn-3d btn-clicker" data-hover="点击查看">查看详情</button>
                                </a>
                            </div>
                        </figure>

                    </div>
                </div>
            @endforeach
        </div>

        <footer class="module-row module-footer-container text-center">
            <a href="{{ url('/cooperation/list') }}" class="view-more style-light">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>