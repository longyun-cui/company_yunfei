@extends(env('TEMPLATE_STAFF_ADMIN').'layout.layout')

@section('head_title','管理员系统 - 云飞钢琴')

@section('header','Admin')
@section('description','管理员系统 - 云飞钢琴')
@section('breadcrumb')
    <li><a href="{{ url('/super/admin') }}"><i class="fa fa-dashboard"></i>首页</a></li>
    <li><a href="#"><i class="fa "></i>Here</a></li>
@endsection

@section('content')
admin.index
@endsection


@section('js')
    <script>
        $(function() {
        });
    </script>
@endsection
