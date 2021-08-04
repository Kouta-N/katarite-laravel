<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Item;
use App\Common\getImageClass;
class ItemController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Item::class,'item');
    }

    public function index()
    {
        $items = Item::all()->sortByDesc('created_at');
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request, Item $item)
    {
        $item->fill($request->all());
        getImageClass::getImage($request, $item);
        $item->user_id = $request->user()->id;
        $item->save();
        return redirect()->route('items.index');
    }

    public function edit(Item $item)
    {
        return view('items.edit',compact('item'));
    }

    public function update(ItemRequest $request, Item $item)
    {
        $item->fill($request->all());
        getImageClass::getImage($request, $item);
        $item->save();
        return redirect()->route('items.index');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }

     public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }
}