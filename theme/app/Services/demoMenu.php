<?php
namespace App\Services;

use App\Models\forDynamicMenu;
use Spatie\Menu\Laravel\Facades\Menu;
use Spatie\Menu\Laravel\Link;

class demoMenu{
    public static function menu(){

        $menuitem = forDynamicMenu::all();
        $menuitem= $menuitem->toArray();
        return Menu::build($menuitem, function($menu, $item){
            $menu->setAttribute('id', 'user_manage');
            $menu->addClass('shadow p-4 border');
            $menu->add(Link::to($item['route'], "<i class=\"".$item['icon']. "\".></i>" .$item['title']));
            $menu->each(function(Link $link){ 
                $link->addClass('text-green-600 text-4xl py-4 rounded-full');
                $link->addParentClass('my-3 shadow border bg-yellow-400 text-center');
            });
            $menu->prepend("<b class='text-2xl '>This Menu Came from DataBase</b>");
           
        });
       
    }
}
?>