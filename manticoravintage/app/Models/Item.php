<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function categories()
    {
        return $this->hasOne(Categories::class);
    }

    public function types()
    {
        return $this->hasOne(Types::class);
    }
}
