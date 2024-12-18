<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        // // dd(forDynamicMenu::all());
        // $menu = MenuService::mainMenu();
        // $practice = MenuService::practice();
        // // $submenu = MenuService::submenu();
        // $dm = demoMenu::myMenu();       
        // return view('welcome',['mymenu'=> $practice]);
       
        
        return view('welcome');

    }



   
}
