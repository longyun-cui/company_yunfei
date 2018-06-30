<?php
namespace App\Repositories\Front;

use App\Models\RootModule;
use App\Models\RootMenu;
use App\Models\RootItem;
use App\Models\RootMessage;

use App\Repositories\Common\CommonRepository;

use Response, Auth, Validator, DB, Exception, Cache;
use QrCode;

class IndexRepository {

    private $model;
    private $repo;
    public function __construct()
    {
//        $this->model = new OrgOrganization;
    }


    // root
    public function root()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

//        $seoCases = RootSeoCase::where(['active'=>1])->orderby('id', 'desc')->limit(6)->get();
//        $websiteTemplates = RootWebsiteTemplate::where(['active'=>1])->orderby('id', 'desc')->limit(8)->get();
//
//        $html = view('frontend.entrance.root')
//            ->with(['info'=>$info, 'menus'=>$menus, 'seoCases'=>$seoCases, 'websiteTemplates'=>$websiteTemplates])->__toString();
//        return $html;

        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }
        $informations = RootItem::where(['category'=>31, 'active'=>1])->orderby('id', 'desc')->get();

        $html = view('frontend.entrance.root')->with(['houses'=>$houses,'informations'=>$informations])->__toString();
        return $html;
    }


    // root
    public function contact()
    {

        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.entrance.contact')->with(['houses'=>$houses])->__toString();
        return $html;
    }




    // services
    public function houses()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();
        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.entrance.houses')->with(['houses'=>$houses])->__toString();
        return $html;
    }

    // service_seo
    public function house($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id != 0) $house = RootItem::where(['id'=>$id])->orderby('id', 'desc')->first();
        else $house = RootItem::orderby('id', 'desc')->first();
        $house->custom = json_decode($house->custom);
        $house->custom2 = json_decode($house->custom2);

        $ticket_total = RootMessage::where('category', 12)->count();

        $houses = RootItem::where(['category'=>11, 'active'=>1])->where('id', '<>', $id)->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.entrance.house')->with(['houses'=>$houses, 'house'=>$house, 'ticket_total'=>$ticket_total])->__toString();
        return $html;
    }

    // services
    public function informations()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();

        $informations = RootItem::where(['category'=>31, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($informations as $item)
        {
            $item->custom = json_decode($item->custom);
        }

        $html = view('frontend.entrance.informations')->with(['houses'=>$houses, 'informations'=>$informations])->__toString();
        return $html;
    }

    // service_seo
    public function information($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();

        if($id != 0) $information = RootItem::where(['id'=>$id])->orderby('id', 'desc')->first();
        else $information = RootItem::orderby('id', 'desc')->first();
        $information->custom = json_decode($information->custom);


        $informations = RootItem::where(['category'=>11, 'active'=>1])->where('id', '<>', $id)->orderby('id', 'desc')->get();
        foreach($informations as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.entrance.information')->with(['houses'=>$houses, 'informations'=>$informations, 'information'=>$information,])->__toString();
        return $html;
    }



    //
    public function message_contact($post_data)
    {
        $messages = [
            'name.required' => '请输入姓名',
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'name' => 'required',
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 1;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '提交成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '提交失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }


    //
    public function message_book_appointment($post_data)
    {
        $messages = [
            'name.required' => '请输入姓名',
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'name' => 'required',
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 11;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '预约成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '预约失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }


    //
    public function message_grab_ticket($post_data)
    {
        $messages = [
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 12;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '抢专车券成功成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '抢专车券成功失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }





}