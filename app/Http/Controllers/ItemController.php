<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ItemController extends Controller
{
    public function index()
    {
        // $items=Item::get();
        // return view('items.index', [
        //     "items" => Item::get()
        // ]);
        $items = DB::table('items')
        ->leftJoin('item_types', 'items.item_type_id', '=', 'item_types.id')
        ->select('items.*', 'item_types.name as type')
        ->orderBy('items.name')
        ->get();
        // return view('items.index')
        // $items = Item::with("ItemType")->orderBy("name")->paginate();
        return view("items.index", compact("items"));
    }

    public function create()
    {
        $types = ItemType::all();
        return view('items.create', compact("types"));
        // return view("items.create", compact("itemTypes"));
    }

    public function store(Request $request)
    {
        $validated =Validator::make($request->all(), [
            "code" => "required",
            "item_type_id" => "required",
            "name" => "required",
            "qty" => "required",
            "price" => "required",
        ]); 
        Item::create($validated->validated());
        return redirect()->route("items.index");
    } 

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $itemTypes = ItemType::get();
        return view("items.edit", compact("item", "itemTypes"));
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update([
            "code" => $request->code ?? $item->code,
            "item_type_id"=>$request->item_type_id ?? $item->item_type_id,
            "name"=>$request->name ?? $item->name,
            "qty"=>$request->qty ?? $item->qty,
            "price"=>$request->price ?? $item->price,
        ]);

        return redirect()->route("items.index");
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect("/");
    }
}
