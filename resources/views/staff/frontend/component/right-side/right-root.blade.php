<div class="box-body bg-white margin-bottom-4px right-menu">

    <a href="{{ url('/?task-list-type=all') }}">
        <div class="box-body {{ $sidebar_menu_task_list_for_all_active or '' }}">
            <i class="fa fa-list text-orange" style="width:24px;"></i>
            <span>全部任务</span>
        </div>
    </a>

    <a href="{{ url('/?task-list-type=unfinished') }}">
        <div class="box-body {{ $sidebar_menu_task_list_for_unfinished_active or '' }}">
            <i class="fa fa-list text-orange" style="width:24px;"></i>
            <span>未完成任务</span>
        </div>
    </a>

    @if(Auth::guard('staff')->check() && in_array(Auth::guard('staff')->user()->user_type ,[0,1,9,11,19]))
    <a href="{{ url('/item/task-create') }}">
        <div class="box-body {{ $sidebar_menu_task_create_active or '' }}">
            <i class="fa fa-plus text-orange" style="width:24px;"></i>
            <span>添加任务</span>
        </div>
    </a>

    {{--<a href="{{ url('/item/task-unpublished-list') }}">--}}
    <a href="{{ url('/?task-list-type=unpublished') }}">
        <div class="box-body {{ $sidebar_menu_task_list_for_unpublished_active or '' }}">
            <i class="fa fa-list text-orange" style="width:24px;"></i>
            <span>待发布任务</span>
        </div>
    </a>
    @endif

</div>


{{--员工管理--}}
@if(Auth::guard('staff')->check() && in_array(Auth::guard('staff')->user()->user_type ,[0,1,9,11]))
<div class="box-body bg-white margin-bottom-4px right-menu">

    <a href="{{ url('/user/staff-create') }}">
        <div class="box-body {{ $sidebar_menu_staff_create_active or '' }}">
            <i class="fa fa-plus text-orange" style="width:24px;"></i>
            <span>添加员工</span>
        </div>
    </a>

    <a href="{{ url('/user/staff-list') }}">
        <div class="box-body {{ $sidebar_menu_staff_list_active or '' }}">
            <i class="fa fa-list text-orange" style="width:24px;"></i>
            <span>员工管理</span>
        </div>
    </a>

</div>
@endif