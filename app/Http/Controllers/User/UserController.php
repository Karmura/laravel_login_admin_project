<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\StaticItem;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // return view('layouts.user');
        $items = StaticItem::all();
        // return $categories;
        return view('layouts.user',['items'=>$items]);

        // return DB::select('select * from categories');
    }
}
