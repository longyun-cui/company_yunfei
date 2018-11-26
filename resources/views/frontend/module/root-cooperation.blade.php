{{--最新资讯--}}
<section class="module-container bg-dark text-center">
    <div class="container">

        <header class="module-row module-header-container">
            <div class="wow slideInLeft module-title-row color-e border-light">合作加盟</div>
            <div class="wow slideInRight module-subtitle-row color-b">服务更多城市，城市让生活更美好</div>
        </header>

        <div class="module-row module-body-container ">
            @foreach($items as $v)
                <div class="col-lg-3 col-md-4 col-sm-6 item-col">
                    <div class="item-container">

                        <figure class="image-container padding-top-4-5">
                            <div class="image-box with-padding">
                                <a class="clearfix zoom-" target="_blank"  href="{{ url('/item/'.$v->id) }}">
                                    <img data-action="zoom-" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Property Image">
                                </a>
                                {{--<span class="btn btn-warning">热销中</span>--}}
                            </div>
                        </figure>

                        <figure class="text-container clearfix">
                            <div class="text-box" style="border-bottom:1px solid #e6e6e6">
                                <div class="text-title-row"><a href="{{ url('/item/'.$v->id) }}"><b>{{ $v->title or '' }}</b></a></div>
                                <div><i class="fa fa-map-marker"></i> {{ $v->custom->deposit or '' }}</div>
                            </div>
                            <div class="text-box clearfix">
                                <a target="_blank" href="{{ url('/item/'.$v->id) }}">
                                    <button class="btn btn-default btn-price pull-right btn-3d" data-hover="点击查看">
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
            <a href="{{ url('/cooperation/list') }}" class="view-more">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>