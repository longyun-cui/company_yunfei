@foreach($item_list as $num => $item)
<div class="a-piece item-piece item-option radius-4px {{ $getType or 'items' }}"
     data-item="{{ $item->id or 0 }}"
     data-id="{{ $item->id or 0 }}"
     data-item-id="{{ $item->id or 0 }}"
     data-getType="{{ $getType or 'items' }}"
>

    <div class="item-container bg-white">


        {{--头部--}}
        <figure class="text-container clearfix">
            <div class="text-box">
                <div class="text-title-row multi-ellipsis-1">
                    <a href="{{ url('/user/'.$item->owner->id) }}" style="color:#ff7676;font-size:13px;">
                        <span class="item-user-portrait">
                            {{--<img src="/common/images/bg/background-image.png" data-src="{{ url(env('DOMAIN_CDN').'/'.$item->owner->portrait_img) }}" alt="">--}}
                            <img src="{{ url(env('DOMAIN_CDN').'/'.$item->owner->portrait_img) }}" alt="">
                        </span>
                        {{ $item->creator->username or '' }}
                    </a>
                    {{--<span class="text-muted disabled pull-right"><small>{{ date_show($item->updated_at->timestamp) }}</small></span>--}}
                    <span class="text-muted disabled pull-right">

                        <small>
                            @if(!empty($item->published_at)) {{ time_show($item->published_at) }}
                            @else {{ time_show($item->updated_at->timestamp) }}
                            @endif
                        </small>

                    </span>
                    {{ $item->id or 0 }}
                </div>
            </div>
        </figure>


        {{--有封面图片--}}
        @if(!empty($item->cover_pic))
        <figure class="image-container padding-top-2-5">
            <div class="image-box">
                <a class="clearfix zoom-" target="_self" href="{{ url('/item/'.$item->id) }}">
                    {{--<img class="grow" src="/common/images/bg/background-image.png" data-src="{{ env('DOMAIN_CDN').'/'.$item->cover_pic }}" alt="Cover">--}}
                    <img class="grow" src="{{ env('DOMAIN_CDN').'/'.$item->cover_pic }}" alt="Cover">
                    {{--@if(!empty($item->cover_pic))--}}
                    {{--<img class="grow" src="{{ url(env('DOMAIN_CDN').'/'.$item->cover_pic) }}">--}}
                    {{--@else--}}
                    {{--<img class="grow" src="{{ url('/common/images/notexist.png') }}">--}}
                    {{--@endif--}}
                </a>
                {{--<span class="btn btn-warning">热销中</span>--}}
                <span class="paste-tag-inn">
                    @if($item->time_type == 1)
                        @if(!empty($item->start_time))
                            <span class="label label-success start-time-inn"><b>{{ time_show($item->start_time) }}</b></span>
                        @endif
                        @if(!empty($item->end_time))
                            <span style="font-size:12px;">至</span>
                            <span class="label label-danger end-time-inn"><b>{{ time_show($item->end_time) }}(结束)</b></span>
                        @endif
                    @endif
                </span>
            </div>
        </figure>
        @endif


        {{--内容主体--}}
        <figure class="text-container clearfix">
            <div class="text-box with-border-top">

                {{--主要内容--}}
                <div class="text-row text-title-row multi-ellipsis-1- margin-top-4px margin-bottom-4px">


                    {{--是否删除--}}
                    @if($item->deleted_at != null)
                        <lable class="tag bg-black">已删除</lable>
                    @else
                    @endif

                    {{--是否发布--}}
                    @if($item->item_active == 0)
                        <lable class="tag bg-yellow-gradient">
                            <i class="icon ion-paper-airplane"></i> 待发布
                        </lable>
                    @elseif($item->item_active == 1)
                        {{--是否完成--}}
                        @if($item->is_completed == 0)
                            <lable class="tag bg-red-gradient">
                                <i class="icon ion-android-checkbox-outline"></i> 待完成
                            </lable>
                        @elseif($item->is_completed == 1)
                            {{--<lable class="tag bg-olive">--}}
                                {{--<i class="icon ion-android-checkbox"></i> 已完成--}}
                            {{--</lable>--}}
                        @endif
                    @endif

                    @if($item->item_type == 1) <lable class="tag bg-purple-gradient">售前</lable>
                    @elseif($item->item_type == 2) <lable class="tag bg-primary">回收</lable>
                    @elseif($item->item_type == 3) <lable class="tag bg-light-blue">调琴</lable>
                    @elseif($item->item_type == 9)  <lable class="tag bg-teal">售后</lable>
                    @endif

                    {{--<a href="{{ url('/item/'.$item->id) }}"><b>{{ $item->title or '' }}</b></a>--}}
                    <b>{{ $item->custom->model or '' }}</b>

                </div>

                {{--时间--}}
                @if(empty($item->cover_pic))
                @if($item->time_type == 1)
                <div class="text-row text-time-row multi-ellipsis-1">
                        @if(!empty($item->start_time))
                            <span class="label label-success start-time-inn"><b>{{ time_show($item->start_time) }}</b></span>
                        @endif
                        @if(!empty($item->end_time))
                            <span class="font-12px"> 至 </span>
                            <span class="label label-danger end-time-inn"><b>{{ time_show($item->end_time) }} (结束)</b></span>
                        @endif
                </div>
                @endif
                @endif

                {{--电话号码--}}
                @if(!empty($item->custom->mobile))
                    <div class="text-row text-info-row- multi-ellipsis-1 margin-bottom-4px">
                        <i class="icon ion-iphone text-blue" style="width:16px;text-align:center;float:left;"></i>
                        <span class="">
                            <a href="tel:{{ $item->custom->mobile or '' }}">{{ $item->custom->mobile or '' }}</a>
                        </span>
                    </div>
                @endif

                {{--地址--}}
                @if(!empty($item->custom->address))
                    <div class="text-row text-info-row- multi-ellipsis-1 margin-bottom-4px">
                        <i class="icon ion-location text-blue" style="width:16px;text-align:center;float:left;"></i>
                        <span class="">{{ $item->custom->address or '' }}</span>
                    </div>
                @endif

                <div class="text-title-row multi-ellipsis-1 _none">
                    <span class="info-tags text-danger">该组织•贴片广告</span>
                </div>

            </div>

            {{--工具栏--}}
            <div class="text-box with-border-top clearfix">

                <div class="text-row text-tool-row">

                    {{--已删除--}}
                    @if($item->deleted_at != null)

                        {{--<lable class="tag bg-black">已删除</lable>--}}

                        {{--是否完成--}}
                        @if($item->is_completed == 1)
                            <lable class="tag bg-olive">
                                <i class="icon ion-android-checkbox"></i> 已完成 by 【{{ $item->completer->username or '' }}】{{ time_show($item->completed_at) }}
                            </lable>
                        @else
                            {{--<lable class="tag bg-purple-gradient">--}}
                                {{--<i class="icon ion-android-checkbox-outline"></i> 待完成--}}
                            {{--</lable>--}}
                        @endif

                        {{--删除权限--}}
                        @if(in_array($me_staff->user_type,[0,1,9,11]))
                            <a class="tool-button operate-btn delete-btn task-restore-this" role="button">
                                <i class="icon ion-arrow-return-left"></i> 恢复
                            </a>
                            <a class="tool-button operate-btn delete-btn task-delete-permanently-this" role="button">
                                <i class="icon ion-trash-a"></i> 彻底删除
                            </a>
                        @endif

                    @endif

                    {{--未删除--}}
                    @if($item->deleted_at == null)

                        {{--是否发布--}}
                        @if($item->item_active == 0)
                            <a class="tool-button operate-btn edit-btn task-edit-this" role="button">
                                <i class="icon ion-edit"></i> 编辑
                            </a>
                            <a class="tool-button operate-btn publish-btn task-publish-this" role="button">
                                <i class="icon ion-paper-airplane"></i> 发布
                            </a>
                            <a class="tool-button operate-btn delete-btn task-delete-permanently-this" role="button">
                                <i class="icon ion-trash-a"></i> 删除
                            </a>

                        @elseif($item->item_active == 1)

                            {{--是否完成--}}
                            @if($item->is_completed == 0)

                                {{--<lable class="tag bg-red-gradient">--}}
                                    {{--<i class="icon ion-android-checkbox-outline"></i> 待完成--}}
                                {{--</lable>--}}
                                {{--<lable class="tag bg-maroon-gradient">--}}
                                    {{--<i class="icon ion-android-checkbox-outline"></i> 待完成--}}
                                {{--</lable>--}}
                                {{--<lable class="tag bg-yellow-gradient">--}}
                                    {{--<i class="icon ion-android-checkbox-outline"></i> 待完成--}}
                                {{--</lable>--}}
                                {{--<lable class="tag bg-purple-gradient">--}}
                                    {{--<i class="icon ion-android-checkbox-outline"></i> 待完成--}}
                                {{--</lable>--}}
                                <a class="tool-button operate-btn complete-btn task-complete-this" role="button">
                                    <i class="icon ion-android-checkbox-outline"></i> 完成
                                </a>
                            @elseif($item->is_completed == 1)
                                <lable class="tag bg-olive">
                                    <i class="icon ion-android-checkbox"></i> 已完成 by 【{{ $item->completer->username or '' }}】{{ time_show($item->completed_at) }}
                                </lable>
                            @endif

                            {{--删除权限--}}
                            @if(in_array($me_staff->user_type,[0,1,9,11]))
                                <a class="tool-button operate-btn delete-btn task-delete-this" role="button">
                                    <i class="icon ion-trash-a"></i> 删除
                                </a>
                            @endif

                        @endif


                    @endif




                    {{--分享--}}
                    <a class="tool-button _none" role="button">
                        <i class="fa fa-share"></i> @if($item->share_num) {{ $item->share_num }} @endif
                    </a>

                    {{--评论--}}
                    <a class="tool-button comment-toggle _none" href="{{ url('/item/'.$item->id) }}" role="button">
                        <span>
                            <i class="icon ion-compose"></i> @if($item->comment_num) {{ $item->comment_num }} @endif
                        </span>
                    </a>

                </div>

            </div>


            <div class="text-box with-border-top text-center clearfix _none">
                <a target="_self" href="{{ url('/item/'.$item->id) }}">
                    <button class="btn btn-default btn-flat btn-3d btn-clicker" data-hover="点击查看" style="border-radius:0;">
                        <strong>查看详情</strong>
                    </button>
                </a>
            </div>


        </figure>

    </div>

</div>
@endforeach

