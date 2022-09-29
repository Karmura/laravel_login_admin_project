<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('welcome',compact('products'));
    }

    public function store(Request $req)
    {
        $data = $req->validate([
            'title'=>'required',
            'price'=>'required',
        ]);
        $new_product = Product::create($data);

        if($req->has('images')){
            foreach($req->file('images')as$image){
                $imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'),$imageName);
                Image::create([
                    'product_id'=>$new_product->id,
                    'image'=>$imageName
                ]);
            }
        }
        return back()->with('success', 'Product Successfully add!!');
    }

    public function images($id)
    {
        $product = Product::find($id);
        if(!$product) abort(404);
        $images = $product->images;
        return view('images',compact('product','images'));
    }

    public function removeImage($id)
    {
            $image = Image::find($id);

            if(!$image) abort(404);

            unlink(public_path('product_images/'.$image->image));

            $image->delete();

            return back()->with('success','Image deleted successfully!');
    }

    public function addImages(Request $req,$id)
    {
        $product = Product::find($id);
        if(!$product) abort(404);

        if($req->has('images')){
            foreach($req->file('images')as$image){
                $imageName = $product['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'),$imageName);
                Image::create([
                    'product_id'=>$product->id,
                    'image'=>$imageName
                ]);
            }
        }

        return back()->with('success','New Images Add!!');

    }
}
