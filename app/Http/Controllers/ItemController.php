<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // $items=Item::get();
        return view('item.index', [
            "items" => Item::get()
        ]);
    }

    public function create()
    {
        return view('item.create');
        // return view("items.create", compact("itemTypes"));
    }

    public function store(Request $request)
    {
        $items = Item::create([
            // "item_type_id"=> $request->item_type_id,
            "name" => $request -> name,
            "qty" => $request -> qty,
            "price" => $request -> price,
        ]);

        return redirect("/");
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view("item.edit", compact("item"));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update([
            // "item_type_id"=>$request->item_type_id ?? $item->item_type_id,
            "name"=>$request->name ?? $item->name,
            "qty"=>$request->qty ?? $item->qty,
            "price"=>$request->price ?? $item->price,
        ]);

        return redirect("/");
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect("/");
    }
}
