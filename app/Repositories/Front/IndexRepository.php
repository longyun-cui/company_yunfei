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
        }

        $html = view('frontend.entrance.root')->with(['houses'=>$houses])->__toString();
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

        $houses = RootItem::where(['category'=>11, 'active'=>1])->where('id', '<>', $id)->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
        }

        $html = view('frontend.entrance.house')->with(['houses'=>$houses, 'house'=>$house])->__toString();
        return $html;
    }





}