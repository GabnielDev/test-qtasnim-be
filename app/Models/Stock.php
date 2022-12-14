<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'stock'
    ];

    public function items(){
        return $this->belongsTo('App\Models\Item', 'item_id');
    }
}
