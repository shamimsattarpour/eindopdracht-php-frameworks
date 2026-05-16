<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Models\Type;
use Illuminate\Http\Request;

class LightController extends Controller
{
    public function showIndex()
    {
        $lights = Light::all();
        $types = Type::all();

        return view('lights.index', compact('lights', 'types'));
    }

    public function showByType($typeId)
    {
        $lights = Light::where('type_id', $typeId)->get();
        $types = Type::all();

        return view('lights.index', compact('lights', 'types'));
    }

    public function showDetail($id)
    {
        $light = Light::findOrFail($id);

        $relatedLights = Light::where('type_id', $light->type_id)
            ->where('id', '!=', $id)
            ->get();

        return view('lights.detail', compact('light', 'relatedLights'));
    }

    public function create()
    {
        $types = Type::all();

        return view('lights.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
            'type_id' => 'required',
            'image' => 'required'
        ]);

        Light::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'type_id' => $request->input('type_id'),
            'image' => $request->input('image')
        ]);

        return redirect()->route('lights.index');
    }

    public function edit($id)
    {
        $light = Light::findOrFail($id);

        $types = Type::all();

        return view('lights.edit', compact('light', 'types'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
            'type_id' => 'required',
            'image' => 'required'
        ]);

        $light = Light::findOrFail($id);

        $light->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'type_id' => $request->input('type_id'),
            'image' => $request->input('image')
        ]);

        return redirect()->route('lights.index');
    }

    public function destroy($id)
    {
        $light = Light::findOrFail($id);

        $light->delete();

        return redirect()->route('lights.index');
    }
}