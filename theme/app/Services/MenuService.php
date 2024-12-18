<?php

namespace App\Services;

use App\Models\forDynamicMenu;
use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Link;

class MenuService 
{
    public static function mainMenu()
    {
        $dynamic = forDynamicMenu::select('id','route', 'title', 'icon')->get();

        $dynamicArray = $dynamic->toArray();


        return Menu::build($dynamicArray, function ($menu, $items) {

            $menu
               ->setAttribute('id', 'sortable_list')               
                ->add(Link::to($items['route'], "<i class=\"" . $items['icon'] . "\"></i>".$items['title']))               
                ->addParentClass('data-id', $items['id'])               
               
                ->each(function (Link $link) {

                    $link->addClass('nav-link menu-item dark:hover:bg-slate-800/70');                     
                   
                });
               
        });
           
    }
 
    public static function subMenu()
    {
        return Menu::new()
           
            ->submenu(
                '<h2 class="text-xl font-bold">User Management</h2>',
                Menu::new()                    
                    ->addClass('sortable_list')
                    ->add(Link::to('/admin/user', 'User'))
                    ->add(Link::to('/admin/userprofile', 'User Profile'))
                    ->add(Link::to('/admin/permission', 'Permission'))
                    ->add(Link::to('/admin/role', 'Role'))
                    ->add(Link::to('/admin/menu', 'Menu'))
                   

            );
    }

    public static function practice(){
        return Menu::new()
        ->add(Link::to('/', "Home"))
        ->add(Link::to('/about', "About"));
        
    }

    
}
