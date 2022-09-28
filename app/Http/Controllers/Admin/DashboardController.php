<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Items::all();
        // return view('admin.dashboard',compact('items'));
        return view('admin.dashboard',compact('items'));
    }
    // public function store(Request $request,Items $items)
    // {
    //     $input = $request->all();
    //     if ($image1 = $request->file('image1')) {
    //         $destinationPath = 'productImages';
    //         $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image1'] = "$profileImage";
    //     }

    //     Items::create($input);

    //     return redirect()->url('admin/dashboard');
    // }

    // public function edit(Items $items)
    // {
    //     // $items = Items::all();
    //     return view('admin.dashboard',compact('items'));
    // }
}
