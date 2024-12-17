<?php

namespace App\Http\Controllers;

use App\Http\Requests\menuRequest;
use App\Models\forDynamicMenu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index(){

        return view('menu');
    }

    public function create(menuRequest $request)
    {
        $validatedData = $request->all();
        forDynamicMenu::create($validatedData);    
        return redirect()->route('menu.show');
    }
}
