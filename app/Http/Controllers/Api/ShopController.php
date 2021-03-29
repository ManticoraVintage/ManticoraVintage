<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ShopController extends Controller
{
    function __invoke() {
        return Item::findAll();
    }
}
