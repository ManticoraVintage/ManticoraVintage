<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemAttributes;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ItemAttributes::with('item')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create item
        $item = new Item();
        $item->name = $request->name;
        $item->photo = $request->photo_name;
        $item->quality = $request->quality;
        $item->country = $request->country;

        //get category and type id from string name
        $categoryId = Category::select('id')->where('name', '=', $request->category)->get()[0]->id;
        $typeId = Type::select('id')->where('name', '=', $request->type)->get()[0]->id;
        $item->category_id = $categoryId;
        $item->type_id = $typeId;

        $item->save();

        //Create item attributes
        $itemAttributes = new ItemAttributes();
        $itemAttributes->price = $request->price;
        $itemAttributes->available = $request->available;
        $itemAttributes->size = $request->size;
        $itemAttributes->url = $request->url;
        $itemAttributes->item_id = $item->id;

        $itemAttributes->save();
        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showFilteredItems($categoryId, $typeId)
    {
        if ($categoryId == 'null' && $typeId == 'null') {
            return ItemAttributes::with('item')->get();
        }
        if ($categoryId !== 'null' && $typeId !== 'null') {
            return Item::with('itemAttributes')
                ->where('category_id', '=', $categoryId)
                ->where('type_id', '=', $typeId)->get();
        }
        if ($categoryId !== 'null') {
            return Item::with('itemAttributes')->where('category_id', '=', $categoryId)->get();
        }
        if ($typeId !== 'null') {
            return Item::with('itemAttributes')->where('type_id', '=', $typeId)->get();
        }
    }

    public function showOne($item_id)
    {
        $typeId = Item::select('type_id')->where('id', $item_id)->get()[0]->type_id;
        $typeData = Type::where('id', $typeId)->get()->toArray();
        $itemData = ItemAttributes::with('item')->where('id', '=', $item_id)->get()->toArray();

        // TO-DO: Return the typeData under a specific key 
        //return array_replace_recursive($itemData, array_replace_recursive([$typeData], $itemData));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemAttributeId = ItemAttributes::where('item_id', $id)->get()[0]->id;
        ItemAttributes::where('id', $itemAttributeId)->delete();
        Item::where('id', $id)->delete();
    }


    public function getManticoraItems()
    {
        return Item::with('itemAttributes')->whereIn('type_id', [1, 2])->get();
    }


    public function getZozobraItems()
    {
        return Item::with('itemAttributes')->where('type_id', 3)->get();
    }
}
