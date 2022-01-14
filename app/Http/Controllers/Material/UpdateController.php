<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Http\Requests\Materials\UpdateRequest;
use App\Models\Material;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Material $material)
    {
        $data = $request->validated();
        $material->update($data);
        return redirect()->route('material.index');
    }
}
