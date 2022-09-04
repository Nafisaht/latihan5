<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    public function index()
    {
        $types = ItemType::paginate();
        return view("itemTypes.index", compact("types"));
    }

    public function create()
    {
        $type = ItemType::paginate();
        return view("itemTypes.create");
    }

    public function store(Request $request)
    {
        $type = ItemType::create([
            "name" => $request -> name,
            "description" => $request -> description,
        ]);

        return to_route("types.index");
    }

    public function edit($id)
    {
        $type = ItemType::findOrFail($id);
        return view("itemTypes.edit", compact("type"));
    }

    public function update(Request $request, $id)
    {
        $type = ItemType::findOrFail($id);
        $type->update([
            "name" => $request->name ?? $type->name,
            "description" => $request->description ?? $type->description,
        ]);

        return to_route("types.index");
    }

    public function destroy($id)
    {
        $type = ItemType::findOrFail($id);
        $type->delete();

        return to_route("types.index");
    }
}
