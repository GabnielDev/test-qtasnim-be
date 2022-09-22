<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request){
        $items = Transaction::with('items')->get();
        return response()->json($items);
    }

    public function store(Request $request){
        $item = new Transaction();
        $item->item_id = $request->item_id;
        $item->quantity = $request->quantity;
        $item->save();

        $stock = Stock::where('item_id',$item->item_id)->first();
        $stock->stock -= $item->quantity;
        $stock->save();

        return response()->json($item);
    }
}
