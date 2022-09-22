<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function sellItem(){
        $items = Item::all();
        return response()->json(
            [
                'items' => $items,
                'message' => 'Items',
                'code' => 200,
            ]
        );
    }

    public function saveItem(Request $request){
        $items = new Item();
        $items->title = $request->title;
        $items->img = $request->img;
        $items->price = $request->price;
        $items->detail = $request->detail;
        $items->save();

        return response()->json(
            [
                'message' => 'Item Create Successfully',
                'code' => 200
            ]
        );
    }

    public function deleteItem($id){
        $items = Item::find($id);
        if($items) {
            $items->delete();
            return response()->json(
                [
                    "message" => "Item Delete Successfully",
                    "code" => 200
                ]
            );
        }else {
            return response()->json(
                [
                    "message" => "Item with id:$id not found",
                    "code" => 400
                ]
            );
        }
    }


}
