<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Http\Requests\Materials\StoreRequest;
use App\Models\Material;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Material::firstOrCreate($data);
        return redirect()->route('material.index');
    }
}
