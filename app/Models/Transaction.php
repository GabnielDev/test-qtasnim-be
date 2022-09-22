<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id',
        'quantity'
    ];

    public function items(){
        return $this->belongsTo('App\Models\Item', 'item_id');
    }
}
