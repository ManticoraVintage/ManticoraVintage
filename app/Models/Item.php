<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    
    public function itemAttributes()
    {
        return $this->hasMany(ItemAttributes::class);
    }

    public static function findAll()
    {
        return Item::all();
    }

    public static function find($id)
    {
        return Item::find($id);
    }
}
