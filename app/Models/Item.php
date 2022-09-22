<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id'
    ];

    public function types(){
        return $this->belongsTo('App\Models\Type', 'type_id');
    }

    public function stocks(){
        return $this->hasOne('App\Models\Stock');
    }
}
