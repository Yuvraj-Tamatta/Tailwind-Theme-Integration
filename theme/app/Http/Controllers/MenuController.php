<?php

namespace App\Http\Controllers;

use App\Models\forDynamicMenu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        // dd(forDynamicMenu::all());
        $menu = MenuService::mainMenu();
       
        return view('welcome',compact('menu'));
    }

   
}
