@extends(env('TEMPLATE_STAFF_FRONT').'layout.layout')


@section('head_title')
    {{ $title_text }} - 云飞钢琴
@endsection


@section('meta_title')@endsection
@section('meta_author')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection


@section('wx_share_title')@endsection
@section('wx_share_desc')@endsection
@section('wx_share_imgUrl'){{ url('/k-org.cn.png') }}@endsection


@section('sidebar')
    @include(env('TEMPLATE_STAFF_FRONT').'component.sidebar.sidebar-root')
@endsection


@section('header','')
@section('description','')
@section('content')
<div style="display:none;">
    <input type="hidden" id="" value="{{ $encode or '' }}" readonly>
</div>

<div class="container">

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 container-body-left">

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET-->
                <div class="box box-info form-container">

                    <div class="box-header with-border" style="margin:16px 0;">
                        <h3 class="box-title">{{ $title_text or '' }}</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <form action="" method="post" class="form-horizontal form-bordered" id="form-edit-item">
                    <div class="box-body">

                        {{ csrf_field() }}
                        <input type="hidden" name="operate" value="{{ $operate or '' }}" readonly>
                        <input type="hidden" name="operate_id" value="{{ $operate_id or 0 }}" readonly>
                        {{--<input type="hidden" name="category" value="{{ $category or 'user' }}" readonly>--}}
                        {{--<input type="hidden" name="type" value="{{ $type or 'user' }}" readonly>--}}


                        {{--类别--}}
                        <div class="form-group form-category">
                            <label class="control-label col-md-2">类型</label>
                            <div class="col-md-8">
                                <div class="btn-group">

                                    @if(in_array($me->user_type, [0,1]))
                                    @if($operate == 'create' || ($operate == 'edit' && $data->user_type == 11))
                                        <button type="button" class="btn">
                                            <span class="radio">
                                                <label>
                                                    <input type="radio" name="user_type" value="11" checked="checked"> 总经理
                                                    {{--<input type="radio" name="user_type" value=11--}}
                                                        {{--@if($operate == 'edit' && $data->user_type == 11) checked="checked" @endif--}}
                                                    {{--> 总经理--}}
                                                </label>
                                            </span>
                                        </button>
                                    @endif
                                    @endif

                                    @if(in_array($me->user_type, [0,1,11]))
                                    @if($operate == 'create' || ($operate == 'edit' && $data->user_type == 19))
                                    <button type="button" class="btn">
                                        <span class="radio">
                                            <label>
                                                @if(($operate == 'create' && $me->user_type == 11) || ($operate == 'edit' && $data->user_type == 19))
                                                    <input type="radio" name="user_type" value=19 checked="checked"> 经理
                                                @else
                                                    <input type="radio" name="user_type" value=19> 经理
                                                @endif
                                            </label>
                                        </span>
                                    </button>
                                    @endif
                                    @endif

                                    @if(in_array($me->user_type, [0,1,11]))
                                    @if($operate == 'create' || ($operate == 'edit' && $data->user_type == 41))
                                    <button type="button" class="btn">
                                        <span class="radio">
                                            <label>
                                                @if($operate == 'edit' && $data->user_type == 41)
                                                    <input type="radio" name="user_type" value="41" checked="checked"> 员工
                                                @else
                                                    <input type="radio" name="user_type" value="41"> 员工
                                                @endif
                                            </label>
                                        </span>
                                    </button>
                                    @endif
                                    @endif

                                    @if(in_array($me->user_type, [0,1,11]))
                                    @if($operate == 'create' || ($operate == 'edit' && $data->user_type == 61))
                                    <button type="button" class="btn">
                                        <span class="radio">
                                            <label>
                                                @if($operate == 'edit' && $data->user_type == 61)
                                                    <input type="radio" name="user_type" value="61" checked="checked"> 观察员
                                                @else
                                                    <input type="radio" name="user_type" value="61"> 观察员
                                                @endif
                                            </label>
                                        </span>
                                    </button>
                                    @endif
                                    @endif

                                </div>
                            </div>
                        </div>

                        {{--用户名--}}
                        <div class="form-group">
                            <label class="control-label col-md-2"><sup class="text-red">*</sup> 用户名</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="username" placeholder="用户名" value="{{ $data->username or '' }}">
                            </div>
                        </div>
                        {{--手机--}}
                        <div class="form-group">
                            <label class="control-label col-md-2"><sup class="text-red">*</sup> 登录手机</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="mobile" placeholder="手机" value="{{ $data->mobile or '' }}">
                            </div>
                        </div>
                        {{--描述--}}
                        <div class="form-group _none">
                            <label class="control-label col-md-2">描述</label>
                            <div class="col-md-8 ">
                                {{--<input type="text" class="form-control" name="description" placeholder="描述" value="{{$data->description or ''}}">--}}
                                <textarea class="form-control" name="description" rows="3" cols="100%">{{ $data->description or '' }}</textarea>
                            </div>
                        </div>
                        {{--标签--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">标签</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="tag" placeholder="标签" value="{{ $data->tag or '' }}">
                            </div>
                        </div>

                        {{--邮箱--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">邮箱</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="email" placeholder="邮箱" value="{{ $data->email or '' }}">
                            </div>
                        </div>
                        {{--QQ--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">QQ</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="QQ_number" placeholder="QQ" value="{{ $data->QQ_number or '' }}">
                            </div>
                        </div>
                        {{--微信号--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">微信号</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="wechat_id" placeholder="微信号" value="{{ $data->wechat_id or '' }}">
                            </div>
                        </div>
                        {{--微信二维码--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">微信二维码</label>
                            <div class="col-md-8 fileinput-group">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if(!empty($data->wechat_qr_code_img))
                                            <img src="{{ url(env('DOMAIN_CDN').'/'.$data->wechat_qr_code_img) }}" alt="" />
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail">
                                    </div>
                                    <div class="btn-tool-group">
                                        <span class="btn-file">
                                            <button class="btn btn-sm btn-primary fileinput-new">选择图片</button>
                                            <button class="btn btn-sm btn-warning fileinput-exists">更改</button>
                                            <input type="file" name="wechat_qr_code" />
                                        </span>
                                        <span class="">
                                            <button class="btn btn-sm btn-danger fileinput-exists" data-dismiss="fileinput">移除</button>
                                        </span>
                                    </div>
                                </div>
                                <div id="titleImageError1" style="color: #a94442"></div>

                            </div>
                        </div>

                        {{--联系地址--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">联系地址</label>
                            <div class="col-md-8 ">
                                <input type="text" class="form-control" name="contact_address" placeholder="地址" value="{{ $data->contact_address or '' }}">
                            </div>
                        </div>

                        {{--头像--}}
                        <div class="form-group _none">
                            <label class="control-label col-md-2">头像</label>
                            <div class="col-md-8 fileinput-group">

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if(!empty($data->portrait_img))
                                            <img src="{{ url(env('DOMAIN_CDN').'/'.$data->portrait_img) }}" alt="" />
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail">
                                    </div>
                                    <div class="btn-tool-group">
                                        <span class="btn-file">
                                            <button class="btn btn-sm btn-primary fileinput-new">选择图片</button>
                                            <button class="btn btn-sm btn-warning fileinput-exists">更改</button>
                                            <input type="file" name="portrait" />
                                        </span>
                                        <span class="">
                                            <button class="btn btn-sm btn-danger fileinput-exists" data-dismiss="fileinput">移除</button>
                                        </span>
                                    </div>
                                </div>
                                <div id="titleImageError" style="color: #a94442"></div>

                            </div>
                        </div>

                        {{--启用--}}
                        @if($operate == 'create')
                            <div class="form-group form-type _none">
                                <label class="control-label col-md-2">启用</label>
                                <div class="col-md-8">
                                    <div class="btn-group">

                                        <button type="button" class="btn">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="active" value="0" checked="checked"> 暂不启用
                                                </label>
                                            </div>
                                        </button>
                                        <button type="button" class="btn">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="active" value="1"> 启用
                                                </label>
                                            </div>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                    </form>

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="button" class="btn btn-success" id="edit-item-submit"><i class="fa fa-check"></i> 提交</button>
                                <button type="button" onclick="history.go(-1);" class="btn btn-default">返回</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET-->
            </div>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 hidden-xs hidden-sm container-body-right">

        @include(env('TEMPLATE_STAFF_FRONT').'component.right-side.right-root')

    </div>

</div>
@endsection


@section('custom-css')
<link rel="stylesheet" href="{{ asset('/lib/css/select2-4.0.5.min.css') }}">
@endsection


@section('custom-script')
<script src="{{ asset('/lib/js/select2-4.0.5.min.js') }}"></script>
<script>
    $(function() {

        $("#multiple-images").fileinput({
            allowedFileExtensions : [ 'jpg', 'jpeg', 'png', 'gif' ],
            showUpload: false
        });

        // 添加or编辑
        $("#edit-item-submit").on('click', function() {
            var options = {
                url: "{{ url('/user/staff-edit') }}",
                type: "post",
                dataType: "json",
                // target: "#div2",
                success: function (data) {
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        layer.msg(data.msg);
                        location.href = "{{ url('/user/staff-list') }}";
                    }
                }
            };
            $("#form-edit-item").ajaxSubmit(options);
        });

    });
</script>
@endsection
