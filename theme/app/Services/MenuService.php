<?php

namespace App\Services;

use App\Models\forDynamicMenu;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Link;

class MenuService
{
    public static function mainMenu()
    {
        $dynamic = forDynamicMenu::select('route','title')->get();
        
        $dynamicArray = $dynamic->toArray();
       
        
        return Menu::build($dynamicArray, function($menu, $items){           
            
                $menu
                // ->prepend('<h2>Yuvraj</h2>')
                // ->append('Milan soni')
                ->add(Link::to($items['route'], $items['title']))
                ->each(function(Link $link){
                    $link->addClass('nav-link  dark:hover:bg-slate-800/70');
                });
            
        });

       
    }
}
