<?php

namespace App\Helpers;

use App\Models\Menu;
use App\Models\page;

class Helper
{
    static function MenuList($GroupId,$menu_type)
    {
        return Menu::with('alt_menu')->with('selectpage')->where('menu_ust_id', $GroupId)->where('menu_type',$menu_type)->where('menu_status', 1)->orderby('menu_sira', 'asc')->get();
    }
    static function PageLastPost()
    {
        return page::where("status",1)->where("kategori_id",">","0")->orderby("id","desc")->get();
    }
}
