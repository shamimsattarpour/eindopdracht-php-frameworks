<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Models\Type;

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
}