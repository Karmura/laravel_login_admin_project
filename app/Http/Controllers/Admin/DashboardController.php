<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\StaticItem;

class DashboardController extends Controller
{
    public function index()
    {
        // return view('admin.dashboard');
        $items = StaticItem::all();
        return view('admin.dashboard',['items'=>$items]);
        // return $items;
    }
    public function DataUpdateIndex($id)
    {
        // $items = StaticItem::all();
        // return view('admin.dashboard');
        $items = StaticItem::where('id', $id)->get();
        // return $items;
        return view('admin.dashboardupdate', ['i'=>$items]);
    }
    public function DataUpdate(Request $request)
    {
        $id = $request->id;
        $input = $request->all();

        $text1 = $request->input('text1');

        if($image1 = $request->file('image1')){
            $profileImage = $image1->getClientOriginalExtension();
            $filename = time().".".$profileImage;

            $image1->move('upload/category/',$filename);
            $input[image1] = $filename;
        }


        $isUpdateSuccess = StaticItem::where('id',$id)->update([
            'text1'=>$text1,
            'image1'=>$input
        ]);

        if($isUpdateSuccess) return redirect('admin/dashboard')->with('status', 'Updated Successfully');
        else echo '<alert>Update Failed</alert>';
        // return view('admin.dashboardupdate');
        // $items = StaticItem::find($request->id);

        // $items->text1 = $request->text1;

        // $items->save();

        // return redirect()->route('admin.dashboard')->with('success', 'Updated Successfully');
    }

}
