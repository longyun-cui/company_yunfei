<?php


//Route::get('/', function () {
//    return view('welcome');
//});



$controller = 'StaffIndexController';

Route::match(['get','post'], 'login', $controller.'@login');
Route::match(['get','post'], 'logout', $controller.'@logout');


/*
 * 用户系统（前台）
 * 需要登录
 */
Route::group(['middleware' => ['staff.login']], function () {

    $controller = 'StaffIndexController';


    Route::get('/', $controller.'@view_root');
    Route::get('/404', $controller.'@view_404');


    /*
     * 个人信息管理
     */
    Route::get('/my-info/', $controller.'@view_my_info_index');
    Route::get('/my-info/index', $controller.'@view_my_info_index');
    Route::get('/my-info/my-info-index', $controller.'@view_my_info_index');
    Route::match(['get','post'], '/my-info/my-info-edit', $controller.'@operate_my_info_edit');
    Route::match(['get','post'], '/my-info/password-reset', $controller.'@operate_my_info_password_reset');




    /*
     * 用户管理
     */
    Route::match(['get','post'], '/user/staff-create', $controller.'@operate_user_staff_create');
    Route::match(['get','post'], '/user/staff-edit', $controller.'@operate_user_staff_edit');
    Route::match(['get','post'], '/user/staff-list', $controller.'@view_user_staff_list');
    Route::post('/user/staff-delete', $controller.'@operate_user_staff_delete');
    Route::post('/user/staff-restore', $controller.'@operate_user_staff_restore');
    Route::post('/user/staff-delete-permanently', $controller.'@operate_user_staff_delete_permanently');




    /*
     * 任务管理
     */
    Route::match(['get','post'], '/item/task-create', $controller.'@operate_item_task_create');
    Route::match(['get','post'], '/item/task-edit', $controller.'@operate_item_task_edit');
    Route::post('/item/task-delete', $controller.'@operate_item_task_delete');
    Route::post('/item/task-restore', $controller.'@operate_item_task_restore');
    Route::post('/item/task-delete-permanently', $controller.'@operate_item_task_delete_permanently');
    Route::post('/item/task-publish', $controller.'@operate_item_task_publish');
    Route::post('/item/task-complete', $controller.'@operate_item_task_complete');
    Route::post('/item/task-remark-edit', $controller.'@operate_item_task_remark_edit');








    Route::match(['get','post'], '/item/content-management', $controller.'@view_item_content_management');
    Route::post('/item/content-edit', $controller.'@operate_item_content_edit');
    Route::post('/item/content-get', $controller.'@operate_item_content_get');
    Route::post('/item/content-delete', $controller.'@operate_item_content_delete');
    Route::post('/item/content-enable', $controller.'@operate_item_content_enable');
    Route::post('/item/content-disable', $controller.'@operate_item_content_disable');


    Route::match(['get','post'], '/item/item-list', $controller.'@view_item_list');
    Route::match(['get','post'], '/item/item-list-for-all', $controller.'@view_item_list_for_all');
    Route::match(['get','post'], '/item/item-list-for-menu_type', $controller.'@view_item_list_for_menu_type');
    Route::match(['get','post'], '/item/item-list-for-time_line', $controller.'@view_item_list_for_time_line');
    Route::match(['get','post'], '/item/item-list-for-debase', $controller.'@view_item_list_for_debase');


    Route::match(['get','post'], '/user/my-administrator-list', $controller.'@view_user_my_administrator_list');
    Route::match(['get','post'], '/user/relation-administrator', $controller.'@operate_user_relation_administrator');
    Route::match(['get','post'], '/user/administrator-relation-add', $controller.'@operate_user_administrator_relation_add');
    Route::match(['get','post'], '/user/administrator-relation-add-bulk', $controller.'@operate_user_administrator_relation_add_bulk');

    Route::match(['get','post'], '/user/administrator-relation-remove', $controller.'@operate_user_administrator_relation_remove');


});




/*
 * 管理员系统（后台）
 * 需要登录
 */
Route::group(['prefix' => 'admin'], function () {


    /*
     * 登录 & 退出 & 注册
     */
    Route::group([], function () {

        $controller = "StaffAdminController";

        Route::match(['get','post'], 'login', $controller.'@login');
        Route::match(['get','post'], 'logout', $controller.'@logout');

    });


    /*
     * 后台管理，需要登录
     */
    Route::group(['middleware' => 'staff.admin.login'], function () {

        $controller = "StaffAdminController";

        Route::get('/', $controller.'@index');
        Route::get('index', $controller.'@index');


        /*
         * info
         */
        Route::match(['get','post'], '/info/', $controller.'@view_info_index');
        Route::match(['get','post'], '/info/index', $controller.'@view_info_index');
        Route::match(['get','post'], '/info/edit', $controller.'@operate_info_edit');
        Route::match(['get','post'], '/info/password-reset', $controller.'@operate_info_password_reset');




        /*
         * user
         */
        Route::match(['get','post'], '/user/user_select2_district', $controller.'@operate_user_select2_district');

        Route::match(['get','post'], '/user/user-create', $controller.'@operate_user_user_create');
        Route::match(['get','post'], '/user/user-edit', $controller.'@operate_user_user_edit');

        Route::match(['get','post'], '/user/user-list-for-all', $controller.'@view_user_list_for_all');
        Route::match(['get','post'], '/user/user-list-for-individual', $controller.'@view_user_list_for_individual');
        Route::match(['get','post'], '/user/user-list-for-doc', $controller.'@view_user_list_for_doc');
        Route::match(['get','post'], '/user/user-list-for-org', $controller.'@view_user_list_for_org');
        Route::match(['get','post'], '/user/user-list-for-sponsor', $controller.'@view_user_list_for_sponsor');

        Route::match(['get','post'], '/user/user-login', $controller.'@operate_user_user_login');



        /*
         * item
         */
        Route::match(['get','post'], '/item/item-list-for-all', $controller.'@view_item_list_for_all');
        Route::match(['get','post'], '/item/item-list-for-atom', $controller.'@view_item_list_for_atom');
        Route::match(['get','post'], '/item/item-list-for-doc', $controller.'@view_item_list_for_doc');




        /*
         * district
         */
        Route::match(['get','post'], '/district/district_select2_parent', $controller.'@operate_district_select2_parent');

        Route::match(['get','post'], '/district/district-create', $controller.'@operate_district_create');
        Route::match(['get','post'], '/district/district-edit', $controller.'@operate_district_edit');

        Route::match(['get','post'], '/district/district-list-for-all', $controller.'@view_district_list_for_all');




        /*
         * statistic
         */
        Route::match(['get','post'], '/statistic', $controller.'@view_statistic_index');
        Route::match(['get','post'], '/statistic/index', $controller.'@view_statistic_index');
        Route::match(['get','post'], '/statistic/statistic-index', $controller.'@view_statistic_index');
        Route::match(['get','post'], '/statistic/statistic-user', $controller.'@view_statistic_user');
        Route::match(['get','post'], '/statistic/statistic-item', $controller.'@view_statistic_item');
        Route::match(['get','post'], '/statistic/statistic-all-list', $controller.'@view_statistic_all_list');





    });


});
