{{--最新资讯--}}
<section class="module-container bg-grey-27 bg-dark" id="home-property-for-rent-listing">
    <div class="container main-container">

        <header class="module-row module-header-container text-center">
            <div class="wow slideInLeft module-title-row title-with-double-line title-md _blod">钢琴Tips</div>
            <div class="wow slideInRight module-subtitle-row title-sm">随时了解最新资讯，掌握钢琴小贴士</div>
        </header>

        <div class="module-row module-body-container root-slider">
            @foreach($items as $v)
                <div class="col-lg-4 col-md-6">
                    <article class="property clearfix">

                        <figure class="feature-image">
                            <a class="clearfix" href="{{ url('/item/'.$v->id) }}">
                                <img data-action="zoom-" src="{{ url(env('DOMAIN_CDN').'/'.$v->cover_pic) }}" alt="Image">
                            </a>
                        </figure>

                        <div class="property-contents">
                            <header class="property-header clearfix">
                                <div class="pull-left">
                                    <h6 class="entry-title"><a href="{{ url('/item') }}">{{ $v->title or '' }}</a></h6>
                                    <span class="property-location _none">{{ $v->updated_at or '' }}</span>
                                </div>
                            </header>
                            <div class="property-meta clearfix">
                                <a target="_blank" href="{{ url('/item/'.$v->id) }}">
                                    <button class="btn btn-default btn-3d btn-clicker pull-right" data-hover="点击查看">查看详情</button>
                                </a>
                                {{--<span><i class="fa fa-arrows-alt"></i> 3060 SqFt</span>--}}
                                {{--<span><i class="fa fa-bed"></i> 3 Beds</span>--}}
                                {{--<span><i class="fa fa-bathtub"></i> 3 Baths</span>--}}
                                {{--<span><i class="fa fa-cab"></i> Yes</span>--}}
                            </div>
                        </div>

                    </article>
                </div>
            @endforeach
        </div>

        <footer class="module-row module-footer-container text-center">
            <a href="{{ url('/coverage/list') }}" class="view-more">查看更多 <i class="fa fa-hand-o-right"></i></a>
        </footer>

    </div>
</section>