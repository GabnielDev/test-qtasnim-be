<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(Request $request){
        $stocks = Stock::with('items')->get();
        return response()->json($stocks);
    }

    public function store(Request $request){
        $item = new Stock();
        $item->item_id = $request->item_id;
        $item->stock = $request->stock;
        $item->save();
        return response()->json($item);
    }
}
