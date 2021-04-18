<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function item()
    {
        return $this->hasMany(Item::class);
    }

    public static function findAll()
    {
        return Category::all();
    }

    public static function find($id)
    {
        return Category::find($id);
    }
}
