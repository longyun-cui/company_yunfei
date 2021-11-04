<ul class="sidebar-menu">

    <li class="header">任务列表</li>

    <li class="treeview {{ $sidebar_menu_task_list_for_all_active or '' }}">
        <a href="{{ url('/?task-list-type=all') }}">
            <i class="fa fa-list text-orange"></i>
            <span>全部任务</span>
        </a>
    </li>
    <li class="treeview {{ $sidebar_menu_task_list_for_unfinished_active or '' }}">
        <a href="{{ url('/?task-list-type=unfinished') }}">
            <i class="fa fa-list text-orange"></i>
            <span>未完成任务</span>
        </a>
    </li>

    @if(Auth::guard('staff')->check() && in_array(Auth::guard('staff')->user()->user_type ,[0,1,9,11,19]))

        <li class="treeview {{ $sidebar_menu_task_create_active or '' }}">
            <a href="{{ url('/item/task-create') }}">
                <i class="fa fa-plus text-orange"></i>
                <span>添加任务</span>
            </a>
        </li>

        <li class="treeview {{ $sidebar_menu_task_list_for_unpublished_active or '' }}">
            <a href="{{ url('/?task-list-type=unpublished') }}">
                <i class="fa fa-list text-orange"></i>
                <span>待发布任务</span>
            </a>
        </li>

    @endif

    @if(Auth::guard('staff')->check() && in_array(Auth::guard('staff')->user()->user_type ,[0,1,9,11]))

        <li class="header">员工管理</li>

        <li class="treeview {{ $sidebar_menu_staff_create_active or '' }}">
            <a href="{{ url('/user/staff-create') }}">
                <i class="fa fa-plus text-orange"></i>
                <span>添加员工</span>
            </a>
        </li>
        <li class="treeview {{ $sidebar_menu_staff_list_active or '' }}">
            <a href="{{ url('/user/staff-list') }}">
                <i class="fa fa-list text-orange"></i>
                <span>员工列表</span>
            </a>
        </li>

    @endif

</ul>