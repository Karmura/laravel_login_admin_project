<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\StaticItem;

class StaticItemController extends Controller
{
    public function index()
    {
        $items = StaticItem::all();
        // return view('admin.dashboard',['items'=>$items]);
        return $items;
    }
    // public function edit($id)
    // {
    //     $items = StaticItem::find($id);
    //     return view('admin.dashboard',['staticitem'=>$items]);
    // }
    public function update(Request $request)
    {

    }
}
