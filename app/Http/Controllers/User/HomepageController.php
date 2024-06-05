<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(Request $request){
        return view('user.homepage');

    }
}
