@extends(env('TEMPLATE_STAFF_FRONT').'layout.layout')


@section('head_title','修改密码 - 德烨乐器')


@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection


@section('header','')
@section('description','修改密码 - 德烨乐器')
@section('content')
<div class="container">

    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 container-body-left">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info form-container">

                    <div class="box-header with-border" style="margin:16px 0;">
                        <h3 class="box-title">修改密码</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <form action="" method="post" class="form-horizontal form-bordered" id="form-edit-password">
                    <div class="box-body">

                        {{ csrf_field() }}

                        {{--原密码--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">原密码</label>
                            <div class="col-md-8 ">
                                <div><input type="password" class="form-control" name="password_pre" placeholder="原密码" value=""></div>
                            </div>
                        </div>
                        {{--新密码--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">新密码</label>
                            <div class="col-md-8 ">
                                <div><input type="password" class="form-control" name="password_new" placeholder="新密码" value=""></div>
                            </div>
                        </div>
                        {{--确认密码--}}
                        <div class="form-group">
                            <label class="control-label col-md-2">确认密码</label>
                            <div class="col-md-8 ">
                                <div><input type="password" class="form-control" name="password_confirm" placeholder="确认密码" value=""></div>
                            </div>
                        </div>

                    </div>
                    </form>

                    <div class="box-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="button" class="btn btn-success" id="edit-password-submit"><i class="fa fa-check"></i> 提交</button>
                                <button type="button" onclick="history.go(-1);" class="btn btn-default">返回</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 hidden-xs hidden-sm container-body-right">
        @include(env('TEMPLATE_STAFF_FRONT').'component.right-side.right-root')
    </div>

</div>
@endsection


@section('custom-js')
<script>
    $(function() {
        // 修改密码
        $("#edit-password-submit").on('click', function() {
            var options = {
                url: "/my-info/password-reset",
                type: "post",
                dataType: "json",
                // target: "#div2",
                success: function (data) {
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        layer.msg(data.msg);
                        location.href = "/my-info/my-info-index";
                    }
                }
            };
            $("#form-edit-password").ajaxSubmit(options);
        });
    });
</script>
@endsection
