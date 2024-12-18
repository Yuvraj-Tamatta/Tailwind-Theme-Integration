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
                $link->addClass('p-4 ms-2');
                $link->addParentClass('text-xl my-1 shadow border bg-gray-300 rounded-full');
            });
           
           
        });
       
    }

    public static function myMenu(){
        return Menu::new()
                ->link('/', "home")
                ->link('/about', "About");
    }
}
?>