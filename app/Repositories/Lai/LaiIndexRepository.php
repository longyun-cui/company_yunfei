<?php
namespace App\Repositories\Lai;

use App\User;
use App\Models\YF\YF_Item;
use App\Models\YF\YF_Pivot_Item_Relation;

use App\Repositories\Common\CommonRepository;

use Response, Auth, Validator, DB, Exception;
use QrCode, Excel;

class LaiIndexRepository {

    private $model;
    private $repo;
    public function __construct()
    {
//        $this->model = new User;
        $this->view_template_front = env('TEMPLATE_STAFF_FRONT');
    }


    // 返回（后台）主页视图
    public function view_index()
    {
        return view('lai.root.welcome');
    }


}