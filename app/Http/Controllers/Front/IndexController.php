<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\Front\IndexRepository;

class IndexController extends Controller
{

    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new IndexRepository;
    }



    // 返回【主页】视图
    public function view_root()
    {
        return $this->repo->root();
    }


    // 返回【楼盘】【列表】视图
    public function view_houses()
    {
        return $this->repo->houses();
    }
    // 返回【楼盘】【详情】视图
    public function view_house($id=0)
    {
        return $this->repo->house($id);
    }



    //
    public function book_appointment()
    {
        return $this->repo->book_appointment(request()->all());
    }
    //
    public function grab_ticket()
    {
        return $this->repo->grab_ticket(request()->all());
    }



}
