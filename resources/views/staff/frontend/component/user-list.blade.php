@foreach($user_list as $u)
<div class="a-piece a-option user-piece user-option user margin-bottom-8px radius-2px"
     data-user="{{ $u->id or 0 }}"
     data-type="{{ $u->relation_type or 0 }}"
>
    <div class="panel-default box-default item-entity-container">

        <div class="item-table-box">

            <div class="item-left-box">
                <a href="{{ url('/user/'.$u->id) }}">
                    <img class="media-object" src="{{ url(env('DOMAIN_CDN').'/'.$u->portrait_img) }}">
                </a>
            </div>

            <div class="item-right-box">

                <div class="item-row item-title-row">

                    <a href="{{ url('/user/'.$u->id) }}">
                        <b>{{ $u->username or '' }}</b>
                    </a>

                </div>

                <div class="item-row item-info-row _none">
                    <span>粉丝 {{ $u->fans_num }}</span>
                    {{--<span> • 内容 {{ $u->item_count }}</span>--}}
                    {{--<span> • 文章 {{ $u->article_count }}</span>--}}
                    {{--<span> • 活动 {{ $u->activity_count }}</span>--}}
                    <span> • 访问 {{ $u->visit_num }}</span>
                </div>

                {{--员工类型--}}
                <div class="item-row item-info-row">
                    <span class="text-muted">
                        @if($u->user_type == 0) <i class="fa fa-user text-black" style="width:12px;"></i> 管理员
                        @elseif($u->user_type == 1) <i class="fa fa-user text-orange" style="width:12px;"></i> 老总
                        @elseif($u->user_type == 11) <i class="fa fa-user text-orange" style="width:12px;"></i> 总经理
                        @elseif($u->user_type == 19) <i class="fa fa-user text-orange" style="width:12px;"></i> 经理
                        @elseif($u->user_type == 41) <i class="fa fa-user text-primary" style="width:12px;"></i> 员工
                        @endif
                    </span>
                </div>

                {{--联系人电话--}}
                @if(!empty($u->mobile))
                    <div class="item-row item-info-row">
                        <i class="fa fa-phone text-danger" style="width:12px;"></i>
                        <span class="text-muted">
                            <a href="tel:{{ $u->mobile or '' }}">
                                <strong>{{ $u->mobile or '暂无' }}</strong>
                            </a>
                        </span>
                    </div>
                @endif
                {{--Email--}}
                @if(!empty($u->email))
                    <div class="item-row item-info-row">
                        <i class="fa fa-envelope text-primary" style="width:12px;"></i>
                        <span class="text-muted">{{ $u->email or '暂无' }}</span>
                    </div>
                @endif
                {{--QQ--}}
                @if(!empty($u->QQ_number))
                    <div class="item-row item-info-row">
                        <i class="fa fa-qq text-primary" style="width:12px;"></i>
                        <a target="_blank" href="tencent://message/?uin={{ $u->QQ_number }}">
                            {{ $u->QQ_number or '暂无' }}
                        </a>
                    </div>
                @endif
                {{--微信号--}}
                @if(!empty($u->wechat_id))
                    <div class="item-row item-info-row">
                        <i class="fa fa-weixin text-success" style="width:12px;"></i>
                        <span class="text-muted">{{ $u->wechat_id or '暂无' }}</span>
                        @if(!empty($u->wechat_qr_code_img))
                        <a class="lightcase-image" href="{{ url(env('DOMAIN_CDN').'/'.$u->wechat_qr_code_img) }}">
                            <i class="fa fa-qrcode text-danger" style="width:16px;font-weight:500;"></i>
                        </a>
                        @endif
                    </div>
                @endif
                {{--地址--}}
                @if(!empty($u->contact_address))
                    <div class="item-row item-info-row">
                        <i class="fa fa-map-marker text-primary" style="width:12px;"></i>
                        <span class="text-muted">{{ $u->contact_address or '暂无' }}</span>
                    </div>
                @endif

                {{--@if(!empty($u->description))--}}
                <div class="item-row item-info-row">
                    {{ $u->description or '暂无简介' }}
                </div>
                {{--@endif--}}

                {{--员工类型--}}
                <div class="item-row item-info-row">

                    <span class="tool-button operate-btn complete-btn" role="button">
                        <a href="/user/staff-edit?user-id={{ $u->id }}"><i class="icon ion-edit"></i> 编辑</a>
                    </span>

                </div>

            </div>

        </div>

    </div>
</div>
@endforeach