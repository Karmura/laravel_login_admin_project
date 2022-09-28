<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    public function index()
    {
        // return view('admin.dashboard',compact('items')); // return admin page
        $items = Items::all();
        return view('user.userdashboard',compact('items')); // return home page
    }
    public function edit(Items $items)
    {
        // $items = Items::all();
        return view('admin.dashboard',compact('items'));
    }

    public function update(Request $request, Items $items)
    {
        $item = Items::find($items->id);
        $id = $items->id;
        $input = $request->all();
        // $files = $request->file('images');

        $text1 = $input['text1'];
        $text2 = $input['text2'];
        $text3 = $input['text3'];
        $text4 = $input['text4'];
        $text5 = $input['text5'];
        $text6 = $input['text6'];

        $image = array();

        $images = [
            $image1 = 'productImages/'.$item->image1,
            $image2 = 'productImages/'.$item->image2,
            $image3 = 'productImages/'.$item->image3,
            $image4 = 'productImages/'.$item->image4,
            $image5 = 'productImages/'.$item->image5,
            $image6 = 'productImages/'.$item->image6,
        ];
        // dd($images);

        if($request->hasFile("images")) {
            // dd("Hello");
            $files = $request->file('images');


            foreach ($files as $file) {

                // Multi Image Delete
                // dd(File::exists("productImages/{$images}"));
                File::delete($images);

                $image_name = md5(rand(10, 100));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'productImages/';
                $image_url = $upload_path.$image_full_name;

                $file->move($upload_path, $image_full_name);
                $image[] = $image_full_name;

                // dd($image);
            }
            Items::where('id',$id)->update([
            'image1' => $image[0],
            'image2' => $image[1],
            'image3' => $image[2],
            'image4' => $image[3],
            'image5' => $image[4],
            'image6' => $image[5],
            ]);

        }
        // Items::where('id',$id)->update([

        //     // 'image' => implode('|',$image),
        //     'image1' => $image[0],
        //     'image2' => $image[1],
        //     'image3' => $image[2],
        //     'image4' => $image[3],
        //     'image5' => $image[4],
        //     'image6' => $image[5],

        //     'text1' => $text1,
        //     'text2' => $text2,
        //     'text3' => $text3,
        //     'text4' => $text4,
        //     'text5' => $text5,
        //     'text6' => $text6,
        // ]);

        return redirect()->route('home')->with('status','Successfully Changed');

    }
}
