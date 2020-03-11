{{--图片展示--}}
<section class="section-container bg-light bg-white">
    <div class="row">

        <header class="module-row module-header-container with-border-bottom text-center">
            <div class="wow slideInLeft module-title-row title-lg _bold">图片展示</div>
        </header>

        <div class="module-row module-body-container property-contents lightcase-images-show" id="lightcase-images-show">
            @if(!empty($data->custom2) && count($data->custom2) > 0)
                @foreach($data->custom2 as $img)
                    <article class="property clearfix">
                        <figure class="feature-image" style="height:240px; max-height:240px; overflow:hidden;">
                            <a class="clearfix zoom lightcase-image" data-rel="lightcase" href="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$img->img)}}">
                                <img data-action="zoom-" src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$img->img)}}" alt="" />
                            </a>
                        </figure>
                    </article>
                @endforeach
            @endif
        </div>

    </div>
</section>