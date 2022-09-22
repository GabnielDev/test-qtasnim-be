<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(Request $request){
        $items = Item::with('types')->with('stocks')->get();
        return response()->json($items);
    }

    public function store(Request $request){
        $item = new Item();
        $item->name = $request->name;
        $item->type_id = $request->type_id;
        $item->save();
        return response()->json($item);
    }
}
