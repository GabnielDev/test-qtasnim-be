<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(Request $request){
        $types = Type::all();
        return response()->json($types);
    }

    public function store(Request $request){
        $type = new Type();
        $type->name = $request->name;
        $type->save();
        return response()->json($type);
    }
}
