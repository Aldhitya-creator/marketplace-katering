<?php

namespace App\Http\Controllers\User;

use App\Models\Menu;
use App\Models\Merchant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request){
        $menus = Menu::get();
        $merchants = Merchant::get();
        return view('user.menu.index', compact('menus', 'merchants'));
    }

    public function show(Menu $menu)
    {
        return view('user.menu.show', compact('menu'));
    }
}
