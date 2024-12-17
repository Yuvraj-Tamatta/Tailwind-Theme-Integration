<?php

namespace App\Http\Controllers;

use App\Models\forDynamicMenu;
use App\Services\demoMenu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        // dd(forDynamicMenu::all());
        $menu = MenuService::mainMenu();
        $demoMenu = MenuService::demoMenu();
        $submenu = MenuService::submenu();
        $macromenu = MenuService::mainMenu();

        $mymenu = demoMenu::menu();
       
        return view('welcome',compact('menu', 'demoMenu','submenu', 'macromenu', 'mymenu'));
    }



   
}
